using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Web.Script.Serialization;

namespace Do.serverGame
{
    class Map
    {
        ushort Id, factionId;
        string Name;

        public Dictionary<uint, game.User> Users;
        private List<Portal> portals;
        private Dictionary<uint, string[]> bonusBox;
        public Dictionary<uint, serverGame.Alien> Aliens;

        public bool IsStarterMap = false;
        public class Portal
        {
            public ushort Id { get; set; }
            public string x { get; set; }
            public string y { get; set; }
            public string newX { get; set; }
            public string newY { get; set; }
            public ushort Map { get; set; }
        }

        private class NPCS
        {
            public ushort npcId { get; set; }
            public int Count { get; set; }
        }

        public Map(UInt16 Id, string Name, string Portals, string NPCS, bool StarterMap, ushort factionId)
        {
            this.Id = Id;
            this.Name = Name;
            this.factionId = factionId;
            this.IsStarterMap = StarterMap;

            this.Users = new Dictionary<uint, game.User>();
            var serializer = new JavaScriptSerializer();
            this.portals = serializer.Deserialize<List<Portal>>(Portals);
            CreateNPCS(NPCS);
            CreateBonusBox(50);
        }

        public void AddUser(uint userId)
        {
            if (!this.Users.ContainsKey(userId))
            {
                this.Users.Add(userId, Program.Users[userId]);
            }

            this.Users[userId].sendUserData();
            sendMapInitData(userId);
            sendNPC(userId);
            sendPortals(userId);

            Parallel.ForEach(bonusBox, Pair =>
            {
                this.Users[userId].Send("0|c|" + Pair.Key + "|2|" + Pair.Value[0] + "|" + Pair.Value[1]);
            });
        }

        public void RemoveUser(uint userId)
        {
            this.Users.Remove(userId);

            Parallel.ForEach(this.Users, Pair =>
            {
                Pair.Value.Send("f|R|" + userId);
            });
        }

        private void CreateNPCS(string NPCS)
        {
            if (string.IsNullOrEmpty(NPCS))
            {
                return;
            }

            var serializer = new JavaScriptSerializer();
            List<NPCS> npcs = serializer.Deserialize<List<NPCS>>(NPCS);
            this.Aliens = new Dictionary<uint, Alien>();

            uint _Created = 0;

            foreach(NPCS npc in npcs)
            {
                uint Created = 0;
                while (Created < npc.Count)
                {
                    Created++;
                    _Created++;

                    this.Aliens.Add(_Created, new Alien(_Created, npc.npcId, this.Id));
                }
            }
        }

        private void sendMapInitData(uint userId)
        {
            if (this.Id == 1)
            {
                this.Users[userId].Send("0|s|0|1|redStation|1|1500|1000|1000");
                this.Users[userId].Send("0|CSS|1");
                this.Users[userId].Send("0|SMP|1|1");
            }
        }

        private void CreateBonusBox(int Count)
        {
            uint Created = 0;

            this.bonusBox = new Dictionary<uint, string[]>();
            while (Created < Count)
            {
                ++Created;
                this.bonusBox.Add(Created, (new string[] { Program.Random.Next(5, 180).ToString() + "00", Program.Random.Next(5, 128).ToString() + "00" }));
            }
        }

        public void moveShip(uint userId, string x, string y, uint speed)
        {
            this.Users[userId].Ship.taskMovingId++;
            uint MovingId = this.Users[userId].Ship.taskMovingId;

            int tX = Convert.ToInt32(Program.GetPosWithOutZ(x)), tY = Convert.ToInt32(Program.GetPosWithOutZ(y));
            int nX = Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.x)), nY = Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.y));

            /*
            var local7 = Math.Sqrt((Math.Pow((Convert.ToInt32(y) - Convert.ToInt32(this.Users[userId].Ship.y)), 2) + Math.Pow((Convert.ToInt32(x) - Convert.ToInt32(this.Users[userId].Ship.x)), 2)));
            local7 = local7 / speed * 1000;
            Console.WriteLine(local7);
            this.Users[userId].Ship.x = x;
            this.Users[userId].Ship.y = y;

            string packetSend = "0|1|" + userId + "|" + this.Users[userId].Ship.x + "|" + this.Users[userId].Ship.y + "|" + local7;
            foreach (var Pair in Users)
            {
                if (Pair.Key != userId)
                {
                    Pair.Value.Send(packetSend);
                }
            }
             */
            //if(tX == null || tY == null || nX == null || nY == null) return;
            Dictionary<int, string> newX = new Dictionary<int, string>(), newY = new Dictionary<int, string>();

            bool Arrived = false;
            int Count = -1;

            while(Arrived == false)
            {
                Count++;
                if (this.Users[userId].Ship.taskMovingId != MovingId)
                {
                    return;
                }

                bool arrivedX = false, arrivedY = false;
                if (tX == nX)
                {
                    arrivedX = true;
                    newX.Add(Count, x);
                }
                else if (tX < nX)
                {
                    if ((nX - 4) <= tX)
                    {
                        arrivedX = true;
                        nX = tX;
                        newX.Add(Count, x);
                    }
                    else if ((nX - 4) > tX)
                    {
                        if (tX > tY)
                        {
                            nX -= 2;
                            newX.Add(Count, (nX).ToString() + "" + Program.GetPosWithOutXY(x));
                        }
                        else
                        {
                            nX -= 4;
                            newX.Add(Count, (nX).ToString() + "" + Program.GetPosWithOutXY(x));
                        }
                    }
                }
                else if (tX > nX)
                {
                    if ((nX + 4) >= tX)
                    {
                        arrivedX = true;
                        nX = tX;
                        newX.Add(Count, x);
                    }
                    else if ((nX + 4) < tX)
                    {
                        if (tX > tY)
                        {
                            nX += 4;
                            newX.Add(Count, (nX).ToString() + "" + Program.GetPosWithOutXY(x));
                        }
                        else
                        {
                            nX += 2;
                            newX.Add(Count, (nX).ToString() + "" + Program.GetPosWithOutXY(x));
                        }
                    }
                }

                if (tY == nY)
                {
                    arrivedY = true;
                    newY.Add(Count, y);
                }
                else if (tY < nY)
                {
                    if ((nY - 4) <= tY)
                    {
                        arrivedY = true;
                        nY = tY;
                        newY.Add(Count, y);
                    }
                    else if ((nY - 4) > tY)
                    {
                        if (tY > tX)
                        {
                            nY -= 2;
                            newY.Add(Count, (nY).ToString() + "" + Program.GetPosWithOutXY(y));
                        }
                        else
                        {
                            nY -= 4;
                            newY.Add(Count, (nY).ToString() + "" + Program.GetPosWithOutXY(y));
                        }
                    }
                }
                else if (tY > nY)
                {
                    if ((nY + 4) >= tY)
                    {
                        arrivedY = true;
                        nY = tY;
                        newY.Add(Count, y);
                    }
                    else if ((nY + 4) < tY)
                    {
                        if (tY > tX)
                        {
                            nY += 4;
                            newY.Add(Count, (nY).ToString() + "" + Program.GetPosWithOutXY(y) + "");
                        }
                        else
                        {
                            nY += 2;
                            newY.Add(Count, (nY).ToString() + "" + Program.GetPosWithOutXY(y) + "");
                        }
                    }
                }

                if (arrivedX && arrivedY)
                {
                    Arrived = true;
                }
            }

            _MoveShip(userId, newX, newY, speed, 0, MovingId);
        }

        private async void _MoveShip(uint userId, Dictionary<int, string> x, Dictionary<int, string> y, uint speed, int Count, uint movingId)
        {
            if (this.Users[userId].Ship.taskMovingId != movingId)
            {
                return;
            }

            this.Users[userId].Ship.x = x[Count];
            this.Users[userId].Ship.y = y[Count];
            int nX = Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.x)), nY = Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.y));

            string packetSend = "0|1|" + userId + "|" + this.Users[userId].Ship.x + "|" + this.Users[userId].Ship.y + "|" + speed;

            foreach (var Pair in Users)
            {
                if (Pair.Key != userId)
                {
                    int uX = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.Ship.x)), uY = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.Ship.y));

                    bool distanceX = (uX - nX < 21 && uX - nX > -21) ? true : false;
                    bool distanceY = (uY - nY < 21 && uY - nY > -21) ? true : false;

                    if (distanceX == true && distanceY == true)
                    {
                        this.Users[userId].Send("f|C|" + Pair.Value.userId + "|" + Pair.Value.Ship.Id + "|1|" + "" + "|" + Pair.Value.Ship.Name + "|" + Pair.Value.Ship.x + "|" + Pair.Value.Ship.y + "|" + Pair.Value.Ship.factionId + "|0|1|" + ((this.factionId != Pair.Value.Ship.factionId && IsStarterMap) ? "1" : "0") + "|1|0");
                        this.Users[Pair.Key].Send("f|C|" + userId + "|" + Program.Users[userId].Ship.Id + "|1|" + "" + "|" + Program.Users[userId].Ship.Name + "|" + Program.Users[userId].Ship.x + "|" + Program.Users[userId].Ship.y + "|" + Program.Users[userId].Ship.factionId + "|0|1|" + ((this.factionId != Program.Users[userId].Ship.factionId && IsStarterMap) ? "1" : "0") + "|1|0");
                        this.Users[Pair.Key].Send(packetSend);
                    }
                    else if (Pair.Key != userId)
                    {
                        if (this.Users[userId].Ship.selectedUserId != Pair.Key && !(this.factionId != Pair.Value.Ship.factionId && IsStarterMap))
                        {
                            this.Users[userId].Send("f|R|" + Pair.Key);
                        }
                        else
                        {
                            this.Users[userId].Send(packetSend);
                        }

                        if (this.Users[Pair.Key].Ship.selectedUserId != userId && !(this.factionId != Program.Users[userId].Ship.factionId && IsStarterMap))
                        {
                            this.Users[Pair.Key].Send("f|R|" + userId);
                        }
                        else
                        {
                            this.Users[Pair.Key].Send(packetSend);
                        }
                    }
                }
            }

            foreach (var Pair in this.Aliens)
            {
                int eX = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.x.ToString())), eY = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.y.ToString()));

                bool distanceX = (eX - nX < 21 && eX - nX > -21) ? true : false;
                bool distanceY = (eY - nY < 21 && eY - nY > -21) ? true : false;

                if (distanceX == true && distanceY == true)
                {
                    this.Users[userId].Send("f|C|" + Pair.Key + "|" + Program.NPCS[Pair.Value.typeId].Id + "|1|" + "" + "|" + Program.NPCS[Pair.Value.typeId].Name + "|" + Pair.Value.x + "|" + Pair.Value.y + "||-1|0|0|1|0");
                }
                else
                {
                    if (this.Users[userId].Ship.selectedUserId != Pair.Key)
                    {
                        this.Users[userId].Send("f|R|" + Pair.Key);
                    }
                    else
                    {
                        this.Users[userId].Send(packetSend);
                    }
                }
            }

            bool InSecureArea = false;
            foreach (Portal portal in this.portals)
            {
                int pX = Convert.ToInt32(Program.GetPosWithOutZ(portal.x));
                int pY = Convert.ToInt32(Program.GetPosWithOutZ(portal.y));

                bool distanceX = (pX - nX < 10 && pX - nX > -10) ? true : false;
                bool distanceY = (pY - nY < 10 && pY - nY > -10) ? true : false;

                if (distanceX == true && distanceY == true)
                {
                    if (!this.Users[userId].Ship.isAttacking)
                    {
                        InSecureArea = true;
                    }
                    break;
                }
            }

            this.Users[userId].Ship.InSecureArea = InSecureArea;
            this.Users[userId].Send("0|D|10400|6400|" + Program.ToEnum(InSecureArea) + "|1|1|0|1|0");

            await Task.Delay((1800 - Convert.ToInt32(speed)));
            if (this.Users.ContainsKey(userId))
            {
                if (this.Users[userId].Ship.x != x.Last().Value || this.Users[userId].Ship.y != y.Last().Value)
                {
                    Count++;
                    _MoveShip(userId, x, y, speed, Count, movingId);
                }
            }
        }

        public async void usePortal(uint userId, string x, string y)
        {
            int uX = Convert.ToInt32(Program.GetPosWithOutZ(x)), uY = Convert.ToInt32(Program.GetPosWithOutZ(y));

            foreach (Portal portal in this.portals)
            {
                int pX = Convert.ToInt32(Program.GetPosWithOutZ(portal.x)), pY = Convert.ToInt32(Program.GetPosWithOutZ(portal.y));

                bool distanceX = (pX - uX < 10 && pX - uX > -10) ? true : false;
                bool distanceY = (pY - uY < 10 && pY - uY > -10) ? true : false;

                if (distanceX == true && distanceY == true)
                {
                    this.Users[userId].Send("0|U|" + portal.Map + "|" + portal.Id + "");

                    await Task.Delay(3250);
                    this.Users[userId].Ship.x = portal.newX;
                    this.Users[userId].Ship.y = portal.newY;
                    this.Users[userId].mapId = portal.Map;

                    this.RemoveUser(userId);
                    Program.Maps[portal.Map].AddUser(userId);
                    return;
                }
            }

            this.Users[userId].Send("0|A|STM|jumpgate_failed_no_gate");
        }

        public async void pickBonusBox(uint userId, uint boxId)
        {
            if(bonusBox.ContainsKey(boxId) && this.Users.ContainsKey(userId))
            {
                if (Program.GetPosWithOutZ(bonusBox[boxId][0]) != Program.GetPosWithOutZ(this.Users[userId].Ship.x) || (Convert.ToInt32(Program.GetPosWithOutZ(bonusBox[boxId][1])) - 2) != Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.y)))
                {
                    return;
                }
                else
                {
                    this.Users[userId].Send("0|h");
                    await Task.Delay(500);
                    if (this.Users.ContainsKey(userId) && bonusBox.ContainsKey(boxId))
                    {
                        this.Users[userId].Ship.UCB100 += 1000;
                        this.Users[userId].Send("0|LM|ST|BAT|4|1000");
                        this.Users[userId].Send("0|B|50|50|50|" + this.Users[userId].Ship.UCB100 + "|5000|50");

                        this.bonusBox.Remove(boxId);
                        this.bonusBox.Add(boxId, (new string[] { Program.Random.Next(5, 200).ToString() + "00", Program.Random.Next(5, 130).ToString() + "00" }));

                        foreach (var _Pair in Users)
                        {
                            this.Users[_Pair.Key].Send("0|2|" + boxId);
                            this.Users[userId].Send("0|c|" + boxId + "|2|" + bonusBox[boxId][0] + "|" + bonusBox[boxId][1]);
                        }
                    }
                }
            }
        }

        public void sendNPC(uint userId)
        {
            int uX = Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.x.ToString())), uY = Convert.ToInt32(Program.GetPosWithOutZ(this.Users[userId].Ship.y.ToString()));

            Parallel.ForEach(Users, Pair =>
            {
                int nX = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.Ship.x)), nY = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.Ship.y));

                bool distanceX = (nX - uX < 21 && nX - uX > -21) ? true : false;
                bool distanceY = (nY - uY < 21 && nY - uY > -21) ? true : false;

                if (distanceX == true && distanceY == true)
                {
                    //(this.Id == 1 && Pair.Value.Ship.factionId == 1) 
                    // f|C|userId|shipId|??|??|Name|x|y|enterpriseId|??|??!isEnemeryEnterprise!??|RINGS

                    this.Users[userId].Send("f|C|" + Pair.Value.userId + "|" + Pair.Value.Ship.Id + "|1|" + "" + "|" + Pair.Value.Ship.Name + "|" + Pair.Value.Ship.x + "|" + Pair.Value.Ship.y + "|" + Pair.Value.Ship.factionId + "|0|1|" + ((this.factionId != Pair.Value.Ship.factionId && IsStarterMap) ? "1" : "0") + "|0|0");
                    this.Users[Pair.Key].Send("f|C|" + userId + "|" + this.Users[userId].Ship.Id + "|1|" + "" + "|" + this.Users[userId].Ship.Name + "|" + this.Users[userId].Ship.x + "|" + this.Users[userId].Ship.y + "|" + this.Users[userId].Ship.factionId + "|0|1|" + ((this.factionId != this.Users[userId].Ship.factionId && IsStarterMap) ? "1" : "0") + "|0|0");
                }
            });

            Parallel.ForEach(this.Aliens, Pair =>
            {
                int nX = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.x)), nY = Convert.ToInt32(Program.GetPosWithOutZ(Pair.Value.y));

                bool distanceX = (nX - uX < 21 && nX - uX > -21) ? true : false;
                bool distanceY = (nY - uY < 21 && nY - uY > -21) ? true : false;

                if (distanceX == true && distanceY == true)
                {
                    this.Users[userId].Send("f|C|" + Pair.Key + "|" + Program.NPCS[Pair.Value.typeId].Id + "|1|" + "" + "|" + Program.NPCS[Pair.Value.typeId].Name + "|" + Pair.Value.x + "|" + Pair.Value.y + "||-1|0|0|1|0");
                }
            });
        }

        public void sendPortals(uint userId)
        {
            foreach (Portal portal in this.portals)
            {
                this.Users[userId].Send("C|p|" + portal.Id + "|1|1|" + portal.x + "|" + portal.y + "|1|0");
            }
        }

    }
}
