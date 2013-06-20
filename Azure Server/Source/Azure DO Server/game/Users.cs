using Do.Core;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Linq;
using System.Net.Sockets;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace Do.game
{
    class User
    {
        System.Net.Sockets.Socket handler;
        private byte[] buffer = new byte[2048];
        private bool userAuth = false, socketClosed = false, destroyedClass = false;
        public int LastPing = 0;
        public uint userId, AttackID = 0;
        public ushort mapId = 1, laserId = 3;
        public string IP;

        #region usersClass
        public usersClass.Config Config;
        public usersClass.Ship Ship;
        #endregion

        public User(System.Net.Sockets.Socket handler)
        {
            this.handler = handler;
            Do.Core.StateObject state = new Do.Core.StateObject();
            state.workSocket = handler;

            this.IP = handler.RemoteEndPoint.ToString().Split(':')[0];

            handler.BeginReceive(buffer, 0, buffer.Length, 0,
                new AsyncCallback(ReadCallback), this);
        }

        public void ReadCallback(IAsyncResult ar)
        {
            String content = String.Empty;


            try
            {
                if (handler == null || !handler.Connected)
                {
                    if (!this.socketClosed)
                    {
                        Out.WriteLine("Socket closed, waiting for a reconnection (2 min limit)", this.IP, ConsoleColor.DarkYellow);
                        this.socketClosed = true;
                        this.discconectUserInactivity();
                    }
                    return;
                }
                int bytesRead = handler.EndReceive(ar);

                //handler.rea
                if (bytesRead > 0)
                {
                    content = System.Text.Encoding.UTF8.GetString(buffer, 0, bytesRead);


                    if (Program.Settings["flushPackets"] == "true")
                    {
                        Console.WriteLine("'" + content + "'");
                    }

                    if (content.StartsWith("<policy-file-request/>"))
                    {
                        Out.WriteLine("Sended policy file", handler.RemoteEndPoint.ToString().Split(':')[0]);

                        Send("<?xml version=\"1.0\"?><cross-domain-policy xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:noNamespaceSchemaLocation=\"http://www.adobe.com/xml/schemas/PolicyFileSocket.xsd\"><allow-access-from domain=\"*\" to-ports=\"*\" secure=\"false\" /><site-control permitted-cross-domain-policies=\"master-only\" /></cross-domain-policy>");

                        handler.Shutdown(SocketShutdown.Both);
                        this.handler.Close();
                        GC.Collect();

                        return;
                    }
                    else
                    {
                        Do.Core.parserPacket packetParser = new Do.Core.parserPacket(content);
                        string packetHeader = packetParser.getString();

                        if (packetHeader == "LOGIN" && this.userAuth == false)
                        {
                            Out.WriteLine("Received petition connection", IP);
                            this.userId = packetParser.getUInt();
                            ulong sessionId = packetParser.getULong();
                            this.userAuth = true;

                            DataRow userRow = Program.checkSession(userId, sessionId);
                            if (userRow == null)
                            {
                                //this.Send("ERR|2"); // EXTREME LOL
                                this.discconectUser(2);
                                return;
                            }

                            if (Program.Users.ContainsKey(this.userId))
                            {
                                this.Config = Program.Users[this.userId].Config;
                                this.Ship = Program.Users[this.userId].Ship;
                                this.mapId = Program.Users[this.userId].mapId;

                                Program.Maps[this.mapId].RemoveUser(this.userId);
                                Program.Users[this.userId].discconectUser();

                                Program.Users.Add(this.userId, this);
                                this.sendConfig();

                                Program.Maps[this.mapId].AddUser(this.userId);
                            }
                            else
                            {
                                this.mapId = Convert.ToUInt16(userRow["mapId"]);
                                Program.Users.Add(userId, this);

                                if (string.IsNullOrEmpty(userRow["settings"].ToString()))
                                {
                                    this.Config = new usersClass.Config();
                                }
                                else
                                {
                                    try
                                    {
                                        var json = new System.Web.Script.Serialization.JavaScriptSerializer();
                                        this.Config = json.Deserialize<usersClass.Config>(userRow["settings"].ToString());
                                    }
                                    catch (Exception)
                                    {
                                        this.Config = new usersClass.Config();
                                    }
                                }

                                this.Ship = new usersClass.Ship(Convert.ToUInt32(userRow["shipId"]), userRow["Name"].ToString(), Convert.ToUInt16(userRow["factionId"]), userRow["x"].ToString(), userRow["y"].ToString());
                                this.sendConfig();
                                Program.Maps[this.mapId].AddUser(this.userId);
                            }

                            this.AttackShip();
                            Out.WriteLine("Is connected now with userId: " + this.userId, IP, ConsoleColor.DarkGreen);
                            this.LastPing = Program.GetUnixTimestamp;
                            this.checkPing();
                        }
                        else if (this.userAuth == true)
                        {
                            if (packetHeader.StartsWith("PNG"))
                            {
                                this.socketClosed = false;
                                this.LastPing = Program.GetUnixTimestamp;
                                Program.Maps[this.mapId].sendNPC(this.userId);
                            }
                            else if (packetHeader.StartsWith("RDY"))
                            {
                                string packetSubHeader = packetParser.getString();
                                if (packetSubHeader.StartsWith("MAP"))
                                {
                                }
                            }
                            else if (packetHeader.StartsWith("SEL"))
                            {
                                uint _userId = packetParser.getUInt();

                                if (_userId < 1000)
                                {
                                    if (Program.Maps[this.mapId].Aliens.ContainsKey(_userId))
                                    {
                                        this.Ship.selectedUserId = _userId;
                                        this.Send("0|N|" + _userId + "|" + Program.NPCS[Program.Maps[this.mapId].Aliens[_userId].typeId].Name + "|" + Program.Maps[this.mapId].Aliens[_userId].shield + "|" + Program.NPCS[Program.Maps[this.mapId].Aliens[_userId].typeId].Shield + "|" + Program.Maps[this.mapId].Aliens[_userId].HP + "|" + Program.NPCS[Program.Maps[this.mapId].Aliens[_userId].typeId].HP);
                                    }
                                }
                                else if (_userId != this.userId && Program.Users.ContainsKey(_userId) && Program.Users[_userId].mapId == this.mapId)
                                {
                                    this.Ship.selectedUserId = _userId;
                                    this.Send("0|N|" + _userId + "|" + Program.Users[_userId].Ship.Name + "|" + Program.Users[_userId].Ship.shield + "|" + Program.Users[_userId].Ship.maxShield + "|" + Program.Users[_userId].Ship.HP + "|" + Program.Users[_userId].Ship.maxHP);
                                }
                            }
                            else if (packetHeader.StartsWith("1"))
                            {
                                Program.Maps[this.mapId].moveShip(this.userId, packetParser.getString(), packetParser.getString(), 1000);
                            }
                            else if (packetHeader.StartsWith("a"))
                            {
                                if (this.Ship.isAttacking == false)
                                {
                                    this.Ship.isAttacking = true;
                                }
                            }
                            else if (packetHeader.StartsWith("j"))
                            {
                                Program.Maps[this.mapId].usePortal(this.userId, this.Ship.x, this.Ship.y);
                            }
                            else if (packetHeader.StartsWith("x"))
                            {
                                Program.Maps[this.mapId].pickBonusBox(this.userId, packetParser.getUInt());
                            }
                            else if (packetHeader.StartsWith("u"))
                            {
                                ushort _laserId = packetParser.getUShort();

                                if (_laserId < 7)
                                {
                                    this.laserId = _laserId;
                                }
                            }
                            else if (packetHeader.StartsWith("7"))
                            {
                                changeSettings(packetParser);
                            }
                            else if (packetHeader.StartsWith("A"))
                            {
                                changeSettings(packetParser);
                            }
                            else if (packetHeader.StartsWith("G"))
                            {
                                this.Ship.isAttacking = false;
                            }
                        }
                        packetParser.Dispose();
                    }   
                }
            }
            catch (SocketException e)
            {
                if (e.NativeErrorCode.Equals(10035))
                    Out.WriteLine("Socket Exception Event: " + e.Message, "Socket.Exception", ConsoleColor.DarkRed);
                else
                {
                    Console.WriteLine(e.ToString());
                    Out.WriteLine("Socket closed, waiting for a reconnection (2 min limit)", this.IP, ConsoleColor.DarkYellow);
                    this.socketClosed = true;
                    this.discconectUserInactivity();
                }
            }
            catch (Exception e)
            {
                Out.WriteLine("Handler Error: " + e.ToString(), this.IP, ConsoleColor.DarkRed);
            }
            finally
            {
                try
                {
                    if (handler != null && handler.Connected)
                    {
                        handler.BeginReceive(buffer, 0, buffer.Length, 0,
                            new AsyncCallback(ReadCallback), this);
                    }
                }
                catch (Exception)
                {
                }
            }
        }

        public void discconectUser(int Reason = 0)
        {
            try
            {
                this.handler.Shutdown(SocketShutdown.Both);
                this.handler.Close();
                this.handler = null;
                this.socketClosed = true;
            }
            catch (Exception)
            {
            }

            if (Reason == -1 || Reason == 1)
            {
                using (MySQLManager.Database.Session_Details.Interfaces.IQueryAdapter dbClient = Program.manager.getQueryreactor())
                {
                    var json = new System.Web.Script.Serialization.JavaScriptSerializer();
                    dbClient.query("UPDATE server_1_players SET mapId = '" + this.mapId + "', x = '" + this.Ship.x + "', y = '" + this.Ship.y + "', settings = @settings WHERE playerID = '" + this.userId + "'", (new string[] { "settings" }), (new string[] { json.Serialize(this.Config) }));
                }
            }

            this.Config = null;

            if (Reason == 0)
            {
                Out.WriteLine("userId " + this.userId + " reconnected in another site", this.IP, ConsoleColor.DarkYellow);
            }
            else if (Reason == 1)
            {
                Out.WriteLine("userId " + this.userId + " has been destroyed", this.IP, ConsoleColor.DarkYellow);
            }
            else if (Reason == 2)
            {
                Out.WriteLine("Ivalid login", this.IP, ConsoleColor.DarkYellow);
            }


            if (Reason != -1)
            {
                this.socketClosed = true;

                this.destroyedClass = true;
                Program.removeUser(this.userId);
            }
        }

        private async void discconectUserInactivity(bool withPing = true)
        {
            await Task.Delay(120000);

            if (this.socketClosed == true && this.destroyedClass != true)
            {
                using (MySQLManager.Database.Session_Details.Interfaces.IQueryAdapter dbClient = Program.manager.getQueryreactor())
                {
                    var json = new System.Web.Script.Serialization.JavaScriptSerializer();
                    dbClient.query("UPDATE server_1_players SET mapId = '" + this.mapId + "', x = '" + this.Ship.x + "', y = '" + this.Ship.y + "', settings = @settings WHERE playerID = '" + this.userId + "'", (new string[] { "settings" }), (new string[] { json.Serialize(this.Config) } ));
                }

                this.socketClosed = true;
                this.destroyedClass = true;
                this.handler = null;

                this.Config = null;
                this.Ship = null;
                Out.WriteLine("userId " + this.userId + " disconnected from game", this.IP, ConsoleColor.DarkYellow);
                Program.Maps[this.mapId].RemoveUser(this.userId);
                Program.removeUser(this.userId);
            }
            else if(withPing)
            {
                checkPing();
            }
        }

        public void Send(String data)
        {
            try
            {
                if (this.handler != null && this.handler.Connected)
                {
                    byte[] byteData = Encoding.UTF8.GetBytes(data + (char)0x00);


                    this.handler.BeginSend(byteData, 0, byteData.Length, 0,
        new AsyncCallback(this.SendCallback), handler);
                }
            }
            catch (SocketException e)
            {
                if (this.socketClosed)
                {
                    if (e.NativeErrorCode.Equals(10035))
                        Out.WriteLine("Socket Exception Event: " + e.Message, "Socket.Exception", ConsoleColor.DarkRed);
                    else
                    {
                        Out.WriteLine("Socket closed, waiting for a reconnection (2 min limit)", this.IP, ConsoleColor.DarkYellow);
                        this.socketClosed = true;
                        this.discconectUserInactivity();
                    }
                }
            }
        }

        /* 5.14.1 Client
        private void SendCommand(string Data, short ID = 3629)
        {
            packetEncoder enc = new packetEncoder(ID);
            enc.writeShort(0);
            enc.writeString(Data);

            try
            {
                if (this.handler.Connected)
                {
                    this.handler.BeginSend(enc.GetBytes(), 0, enc.GetBytes().Length, 0,
        new AsyncCallback(this.SendCallback), handler);
                }
            }
            catch (StackOverflowException)
            {
            }
        }
        */

        private void SendCallback(IAsyncResult ar)
        {
            try
            {
                // Retrieve the socket from the state object.
                Socket handler = (Socket)ar.AsyncState;

                // Complete sending the data to the remote device.
                int bytesSent = handler.EndSend(ar);
            }
            catch (Exception)
            {
                //Console.WriteLine(e.ToString());
            }
        }

        private async void checkPing()
        {
            await Task.Delay(26100);
            if (Program.GetUnixTimestamp - this.LastPing > 28)
            {
                Out.WriteLine("Losed connection with userId: " + this.userId, this.IP, ConsoleColor.DarkYellow);
                socketClosed = true;
                discconectUserInactivity();
                return;
            }
            checkPing();
        }

        #region Packets
        private void sendConfig()
        {
            this.Send("0|A|SET|" + this.Config.SET);
            this.Send("0|7|MINIMAP_SCALE," + this.Config.MINIMAP_SCALE);
            this.Send("0|7|DISPLAY_PLAYER_NAMES|" + Program.ToEnum(this.Config.DISPLAY_PLAYER_NAMES));
            this.Send("0|7|DISPLAY_CHAT|" + Program.ToEnum(this.Config.DISPLAY_CHAT));
            this.Send("0|7|PLAY_MUSIC|" + Program.ToEnum(this.Config.PLAY_MUSIC));
            this.Send("0|7|PLAY_SFX|" + Program.ToEnum(this.Config.PLAY_SFX));
            this.Send("0|7|BAR_STATUS|" + this.Config.BAR_STATUS);
            this.Send("0|7|WINDOW_SETTINGS," + this.Config.WINDOW_SETTINGS);
            this.Send("0|7|AUTO_REFINEMENT|" + Program.ToEnum(this.Config.AUTO_REFINEMENT));
            this.Send("0|7|QUICKSLOT_STOP_ATTACK|" + Program.ToEnum(this.Config.QUICKSLOT_STOP_ATTACK));
            this.Send("0|7|DOUBLECLICK_ATTACK|" + Program.ToEnum(this.Config.DOUBLECLICK_ATTACK));
            this.Send("0|7|AUTO_START|" + Program.ToEnum(this.Config.AUTO_START));
            this.Send("0|7|DISPLAY_NOTIFICATIONS|" + Program.ToEnum(this.Config.DISPLAY_NOTIFICATIONS));
            this.Send("0|7|SHOW_DRONES|" + Program.ToEnum(this.Config.SHOW_DRONES));
            this.Send("0|7|DISPLAY_WINDOW_BACKGROUND|" + Program.ToEnum(this.Config.DISPLAY_WINDOW_BACKGROUND));
            this.Send("0|7|ALWAYS_DRAGGABLE_WINDOWS|" + Program.ToEnum(this.Config.ALWAYS_DRAGGABLE_WINDOWS));
            this.Send("0|7|PRELOAD_USER_SHIPS|" + Program.ToEnum(this.Config.PRELOAD_USER_SHIPS));
            this.Send("0|7|QUALITY_PRESETTING|" + this.Config.QUALITY_PRESETTING);
            this.Send("0|7|QUALITY_CUSTOMIZED|" + this.Config.QUALITY_CUSTOMIZED);
            this.Send("0|7|QUALITY_BACKGROUND|" + this.Config.QUALITY_BACKGROUND);
            this.Send("0|7|QUALITY_POIZONE|" + this.Config.QUALITY_POIZONE);
            this.Send("0|7|QUALITY_SHIP|" + this.Config.QUALITY_SHIP);
            this.Send("0|7|QUALITY_ENGINE|" + this.Config.QUALITY_ENGINE);
            this.Send("0|7|QUALITY_COLLECTABLE|" + this.Config.QUALITY_COLLECTABLE);
            this.Send("0|7|QUALITY_ATTACK|" + this.Config.QUALITY_ATTACK);
            this.Send("0|7|QUALITY_EFFECT|" + this.Config.QUALITY_EFFECT);
            this.Send("0|7|QUALITY_EXPLOSION|" + this.Config.QUALITY_EXPLOSION);
            this.Send("0|7|QUICKBAR_SLOT|" + this.Config.QUICKBAR_SLOT);
            this.Send("0|7|SLOTMENU_POSITION|" + this.Config.SLOTMENU_POSITION);
            this.Send("0|7|SLOTMENU_ORDER|" + this.Config.SLOTMENU_ORDER);
        }

        public void sendUserData()
        {
            this.Ship.selectedUserId = 0;
            #region 5.14.1 Client
            /*
            packetEncoder userData = new packetEncoder(1845);
            userData.writeShort(0);
            userData.writeInt(Convert.ToInt32(this.userId));
            
            userData.writeString("Xdr");
            userData.writeInt(Convert.ToInt32(this.Ship.Id));
            userData.writeInt(Convert.ToInt32(this.Ship.speed));
            userData.writeInt(Convert.ToInt32(this.Ship.shield));
            userData.writeInt(Convert.ToInt32(this.Ship.maxShield));
            userData.writeInt(Convert.ToInt32(this.Ship.HP));
            userData.writeInt(Convert.ToInt32(this.Ship.maxHP));
            userData.writeInt(0);
            userData.writeInt(100);
            userData.writeInt(Convert.ToInt32(this.Ship.x));
            userData.writeInt(Convert.ToInt32(this.Ship.y));
            userData.writeInt(Convert.ToInt32(this.mapId));
            userData.writeInt(1);
            userData.writeInt(0); //clanId
            userData.writeInt(1500); //laserMax
            userData.writeInt(1000); //laserMin
            userData.writeInt(0);
            userData.writeBool(false); // premium
            userData.writeInt(0);
            userData.writeInt(0);
            userData.writeInt(1); // level
            userData.writeInt(15); // credits
            userData.writeInt(10); //uri
            userData.writeInt(0); // jackpot
            userData.writeInt(1); // rank
            userData.writeString("Xdr"); // clanName
            userData.writeInt(0); // GG
            userData.writeBool(false); // system font
            userData.writeBool(false);
            userData.writeInt(0);
             
            this.handler.Send(userData.GetBytes());
             */
            #endregion

            this.Send("RDY|I|" + this.userId + "|" + this.Ship.Name + "|" + this.Ship.Id + "|" + this.Ship.speed + "|" + this.Ship.shield + "|" + this.Ship.maxShield + "|" + this.Ship.HP + "|" + this.Ship.maxHP + "|5|100|" + this.Ship.x + "|" + this.Ship.y + "|" + this.mapId + "|" + this.Ship.factionId + "|0|1500|0|15|0|3|0|1|10|10000000|10|21|ADM|7|1|0|50|25");
            // pID, pID, userId, Name, shipId, speed, shield, maxShield, Health, maxHealth, shipment, maxShipment, x, y, mapId, enterpriseId, clanId, laserMax, laserNow, misilMax, misilNow, ??, premium, exp, honor, level, credits, uri, jackpot, rank, clanName, GG

            
            this.Send("0|B|50|50|50|" + this.Ship.UCB100 + "|5000|50"); // LCB-10(x1)|MCB-25(x2)|MCB-50(x3)|UCB-100(x4)|SAB-50(roba escudo)|RSB-75(x5)
            this.Send("0|7|HS");
            this.Send("0|S|CFG|1");

            this.Send("0|A|ITM|0|0|0|0|4|1|0|0|0|0|0|0|0|0|0|0|0");
            this.Send("0|g|a|b,1000,1,10000,C,2,500,U,3,1000,U,5,1000,U|r,100,1,10000,C,2,50000,C,3,500,U,4,700,U"); // Store
            this.Send("0|TX|S|1|15|0|1|15|0|1|15|0|1|15|0|1|15|0");
            this.Send("0|ps|blk|0");

            this.Send("0|m|1|" + this.Ship.x + "|" + this.Ship.y);
            this.Send("0|POI|RDY");
            this.Send("0|n|d|" + this.userId + "|3/4-25-25-25-25,3/4-25-25-25-25,3/4-25-25-25-25,3/4-25-25-25-25");
            this.Send("0|A|STD|Bienvenido a Azure");
        }

        #region SaveSettings
        private void changeSettings(parserPacket packet)
        {
            try
            {
                string settingName = packet.getString().Replace("\n", "");

                settingName = (settingName == "7") ? packet.getString().Replace("\n", "") : settingName;
                string[] settingsArray = {};

                if (settingName.Contains(","))
                {
                    settingsArray = settingName.Split(',');
                    settingName = settingsArray[0];
                }

                if (settingName == "SET")
                {
                    this.Config.SET = packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt() + "|" + packet.getInt();
                }
                else if (settingName == "MINIMAP_SCALE")
                {
                    this.Config.MINIMAP_SCALE = settingsArray[1] + "|" + packet.getUInt();
                }
                else if (settingName == "DISPLAY_PLAYER_NAMES")
                {
                    this.Config.DISPLAY_PLAYER_NAMES = Program.ToBool(packet.getString());
                }
                else if (settingName == "DISPLAY_CHAT")
                {
                    this.Config.DISPLAY_CHAT = Program.ToBool(packet.getString());
                }
                else if (settingName == "PLAY_MUSIC")
                {
                    this.Config.PLAY_MUSIC = Program.ToBool(packet.getString());
                }
                else if (settingName == "PLAY_SFX")
                {
                    this.Config.PLAY_SFX = Program.ToBool(packet.getString());
                }
                else if (settingName == "BAR_STATUS")
                {
                    string[] barStatusArray = packet.getString().Split(',');
                    this.Config.BAR_STATUS = "23," + Program.ToEnum(Program.ToBool(barStatusArray[1])) + ",24," + Program.ToEnum(Program.ToBool(barStatusArray[3])) + ",25," + Program.ToEnum(Program.ToBool(barStatusArray[5])) + ",26," + Program.ToEnum(Program.ToBool(barStatusArray[7])) + ",27," + Program.ToEnum(Program.ToBool(barStatusArray[9])) + "";                    
                }
                else if (settingName == "WINDOW_SETTINGS")
                {
                    this.Config.WINDOW_SETTINGS = settingsArray[1] + "|" + packet.getString();
                }
                else if (settingName == "AUTO_REFINEMENT")
                {
                    this.Config.AUTO_REFINEMENT = Program.ToBool(packet.getString());
                }
                else if (settingName == "QUICKSLOT_STOP_ATTACK")
                {
                    this.Config.QUICKSLOT_STOP_ATTACK = Program.ToBool(packet.getString());
                }
                else if (settingName == "QUICKBAR_SLOT")
                {
                    this.Config.QUICKBAR_SLOT = packet.getString();
                }

                if (packet.MoreToRead)
                {
                    changeSettings(packet);
                }
            }
            catch (Exception)
            {
                if (this.handler != null)
                {
                    this.handler.Shutdown(SocketShutdown.Both);
                }

                this.socketClosed = true;
                discconectUserInactivity(false);
            }
        }
        #endregion
        public async void AttackShip(bool AvisedO = false, bool AvisedB = false)
        {
            if (this.destroyedClass)
            {
                return;
            }
            uint _userId = this.Ship.selectedUserId;

            if (this.Ship.isAttacking == false || _userId == 0)
            {
            }
            else if (this.Ship.UCB100 < 15)
            {
                this.Ship.isAttacking = false;
                if (!AvisedB)
                {
                    AvisedB = true;
                    this.Send("0|W|L|1");
                }
            }
            else if ((_userId < 1000 && !Program.Maps[this.mapId].Aliens.ContainsKey(_userId)) || (_userId > 999 && !Program.Maps[this.mapId].Users.ContainsKey(_userId)))
            {
                this.Ship.isAttacking = false;
            }
            else if (_userId < 1000) // NPC
            {
                AvisedB = false;

                string eX = Program.GetPosWithOutZ(Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].x), eY = Program.GetPosWithOutZ(Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].y),
    uX = Program.GetPosWithOutZ(this.Ship.x), uY = Program.GetPosWithOutZ(this.Ship.y);

                if (!(Convert.ToInt32(eX) - Convert.ToInt32(uX) < 7 && Convert.ToInt32(eX) - Convert.ToInt32(uX) > -7) || !(Convert.ToInt32(eY) - Convert.ToInt32(uY) < 7 && Convert.ToInt32(eY) - Convert.ToInt32(eY) > -7))
                {
                    if (!AvisedO)
                    {
                        AvisedO = true;
                        this.Send("0|O");
                    }
                }
                else
                {
                    if (AvisedO)
                    {
                        this.Send("0|X");
                    }
                    AvisedO = false;
                    int power = Convert.ToInt32(this.Ship.damage * this.laserId);

                    int minPower = (power / 10);
                    power = power + new Random().Next(-minPower, minPower);

                    int realDamage = power;

                    if (Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield > 0)
                    {
                        if (Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield - realDamage > 0)
                        {
                            Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield -= Convert.ToUInt32(realDamage);
                        }
                        else
                        {
                            if (Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield - realDamage < 0)
                            {
                                realDamage += +(Convert.ToInt32(Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield) - realDamage);
                            }

                            Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield = 0;
                        }
                        realDamage = power - Convert.ToInt32(power * (Program.NPCS[Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].typeId].shieldAbsorb / 100m));
                    }

                    Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].receivedAttack(this.userId);

                    realDamage = Math.Abs(realDamage);
                    if (Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].HP - realDamage < 1)
                    {
                        Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].HP = 0;

                        this.Ship.UCB100 -= 15;
                        this.Send("0|B|50|50|50|" + this.Ship.UCB100 + "|5000|50");

                        string packet = "0|a|" + this.userId + "|" + _userId + "|" + (this.laserId - 1) + "|0|0";
                        string packet2 = "0|Y|" + this.userId + "|" + _userId + "|L|1|1|" + power + "|100|0";

                        foreach (var Pair in Program.Maps[this.mapId].Users)
                        {
                            Pair.Value.Send(packet);
                            Pair.Value.Send(packet2);
                            Pair.Value.Send("0|K|" + this.Ship.selectedUserId);
                        }

                        Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].Regenerate();
                        //Program.Maps[this.mapId].RemoveUser(this.Ship.selectedUserId);
                        //Program.Users[this.Ship.selectedUserId].discconectUser(1);
                        this.Ship.selectedUserId = 0;
                        this.Ship.isAttacking = false;
                    }
                    else
                    {
                        try
                        {
                            Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].HP -= Convert.ToUInt32(realDamage);
                            this.Ship.UCB100 -= 15;
                            this.Send("0|B|50|50|50|" + this.Ship.UCB100 + "|5000|50");

                            string packet = "0|a|" + this.userId + "|" + _userId + "|" + (this.laserId - 1) + "|1|1";
                            string packet2 = "0|Y|" + this.userId + "|" + _userId + "|L|" + Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].HP + "|" + Program.Maps[this.mapId].Aliens[this.Ship.selectedUserId].shield + "|" + power + "|100|1";
                            foreach (var Pair in Program.Maps[this.mapId].Users)
                            {
                                Pair.Value.Send(packet);
                                Pair.Value.Send(packet2);
                            }
                        }
                        catch (Exception)
                        {
                        }
                    }
                }
            }
            else
            {
                string eX = Program.GetPosWithOutZ(Program.Users[this.Ship.selectedUserId].Ship.x), eY = Program.GetPosWithOutZ(Program.Users[this.Ship.selectedUserId].Ship.y),
                    uX = Program.GetPosWithOutZ(this.Ship.x), uY = Program.GetPosWithOutZ(this.Ship.y);

                if (Program.Users[this.Ship.selectedUserId].Ship.isAttacking == false && Program.Users[this.Ship.selectedUserId].Ship.InSecureArea == true)
                {
                }
                else if (!(Convert.ToInt32(eX) - Convert.ToInt32(uX) < 7 && Convert.ToInt32(eX) - Convert.ToInt32(uX) > -7) || !(Convert.ToInt32(eY) - Convert.ToInt32(uY) < 7 && Convert.ToInt32(eY) - Convert.ToInt32(eY) > -7))
                {
                    if (!AvisedO)
                    {
                        AvisedO = true;
                        this.Send("0|O");
                        Program.Users[this.Ship.selectedUserId].Send("0|V");
                    }
                }
                else
                {
                    if (AvisedO)
                    {
                        this.Send("0|X");
                        Program.Users[this.Ship.selectedUserId].Send("0|X");
                    }

                    AvisedO = false;
                    int power = Convert.ToInt32(this.Ship.damage * this.laserId);

                    int minPower = (power / 10);
                    power = power + new Random().Next(-minPower, minPower);

                    int realDamage = power;
                    if (Program.Users[this.Ship.selectedUserId].Ship.shield > 0)
                    {
                        if (Program.Users[this.Ship.selectedUserId].Ship.shield - realDamage > 0)
                        {
                            Program.Users[this.Ship.selectedUserId].Ship.shield -= Convert.ToUInt32(realDamage);
                        }
                        else
                        {
                            if (Program.Users[this.Ship.selectedUserId].Ship.shield - realDamage < 0)
                            {
                                realDamage += +(Convert.ToInt32(Program.Users[this.Ship.selectedUserId].Ship.shield) - realDamage);
                            }

                            Program.Users[this.Ship.selectedUserId].Ship.shield = 0;
                        }
                        realDamage = power - Convert.ToInt32(power * (Program.Users[this.Ship.selectedUserId].Ship.shieldAbsorb / 100m));
                    }

                    realDamage = Math.Abs(realDamage);
                    if (Program.Users[this.Ship.selectedUserId].Ship.HP - realDamage < 1)
                    {
                        Program.Users[this.Ship.selectedUserId].Ship.HP = 0;

                        foreach (var Pair in Program.Maps[this.mapId].Users)
                        {
                            Pair.Value.Send("0|K|" + this.Ship.selectedUserId);
                        }

                        Program.Maps[this.mapId].RemoveUser(this.Ship.selectedUserId);
                        Program.Users[this.Ship.selectedUserId].discconectUser(1);
                        this.Ship.selectedUserId = 0;
                        this.Ship.isAttacking = false;
                    }
                    else
                    {
                        try
                        {
                            Program.Users[this.Ship.selectedUserId].Ship.HP -= Convert.ToUInt32(realDamage);
                            this.Ship.UCB100 -= 15;
                            this.Send("0|B|50|50|50|" + this.Ship.UCB100 + "|5000|50");

                            string packet = "0|a|" + this.userId + "|" + _userId + "|" + (this.laserId - 1) + "|1|1";
                            string packet2 = "0|Y|" + this.userId + "|" + _userId + "|L|" + Program.Users[this.Ship.selectedUserId].Ship.HP + "|" + Program.Users[this.Ship.selectedUserId].Ship.shield + "|" + power + "|100|1";
                            foreach (var Pair in Program.Maps[this.mapId].Users)
                            {
                                Pair.Value.Send(packet);
                                Pair.Value.Send(packet2);
                            }
                        }
                        catch (Exception)
                        {
                        }
                    }
                }
            }

            await Task.Delay(1000);
            AttackShip(AvisedO, AvisedB);
        }
        #endregion
    }
}
