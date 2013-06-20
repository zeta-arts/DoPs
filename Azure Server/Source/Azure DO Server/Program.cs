using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Configuration;
using System.Xml;
using MySQLManager.Database;
using MySQLManager.Database.Session_Details.Interfaces;
using System.Runtime.InteropServices;

namespace Do
{
    class Program
    {
        public class Ships
        {
            public ushort Id { get; set; }
            public string Name { get; set; }
            public uint HP { get; set; }
            public uint Shield { get; set; }
            public ushort shieldAbsorb { get; set; }
            public uint Damage { get; set; }
            public ushort Speed { get; set; }
            public bool isNeutral { get; set; }
            public ushort LaserId { get; set; }
        }

        public static Dictionary<ushort, serverGame.Map> Maps;
        public static Dictionary<uint, game.User> Users;
        public static Random Random = new Random();
        public static Dictionary<ushort, Ships> NPCS;

        public static Dictionary<string, string> Settings;
        public static DatabaseManager manager;
        private static System.DateTime unixDateTime = new System.DateTime(1970, 1, 1, 0, 0, 0, 0);

        private static ConsoleEventDelegate handler;
        private delegate bool ConsoleEventDelegate(int eventType);
        [DllImport("kernel32.dll", SetLastError = true)]
        private static extern bool SetConsoleCtrlHandler(ConsoleEventDelegate callback, bool add);

        static void Main(string[] args)
        {
            handler = new ConsoleEventDelegate(ConsoleEventCallback);
            SetConsoleCtrlHandler(handler, true);

            Console.SetWindowSize(150, 50);
            Console.BackgroundColor = ConsoleColor.White;
            Console.Clear();
            Console.ForegroundColor = ConsoleColor.Black;
            Console.WriteLine("Azure DarkOrbit(DO) EMULATOR");
            Console.WriteLine("THANKS TO Eliaz for the packets");
            Console.WriteLine("THE FREE OPEN-SOURCE DARKORBIT EMULATOR");
            Console.WriteLine("COPYRIGHT <C> 2013 BY XDR");
            Console.WriteLine("FOR MORE DETAILS CHECK UPDATE.TXT");
            Console.WriteLine("");
            Console.WriteLine("BUILD");
            Console.WriteLine(" CORE: AZURE 0.2 on C#.NET 4.5");
            Console.WriteLine(" CLIENT VERSION: 4.1");
            Console.WriteLine(" SERVER VERSION: 0.5");
            Console.WriteLine("______________________________________________________");
            Console.ForegroundColor = ConsoleColor.Gray;
            Console.WriteLine("");
            Out.WriteLine("Starting up DarkOrbit Emulator for " + Environment.MachineName + "...", "Azure.Boot");
            Task.Factory.StartNew(Server);

            while (true)
            {
                string Command = Console.ReadLine();
                string[] SubCommands = (Command.Contains(' ')) ? Command.Split(' ') : null;

                if (Command == "close")
                {
                    ConsoleEventCallback(2);
                    Environment.Exit(0);
                }
            }
        }

        static bool ConsoleEventCallback(int eventType)
        {
            if (eventType == 2)
            {
                foreach (var User in Users)
                {
                    User.Value.discconectUser(-1);
                }
            }
            return false;
        }

        public static int GetUnixTimestamp
        {
            get { return (int)(DateTime.UtcNow - unixDateTime).TotalSeconds; }
        }

        public static void removeUser(uint userId)
        {
            try
            {
                Users[userId] = null;
                Users.Remove(userId);
                GC.Collect();
            }
            catch (Exception)
            {
            }
        }

        #region Decoders and Encoders
        public static int ReadInt(byte[] data)
        {
            int outputResult = 0;

            outputResult += data[0] << 24;
            outputResult += data[1] << 16;
            outputResult += data[2] << 8;
            outputResult += data[3];

            return outputResult;
        }

        public static int ReadShort(byte[] data)
        {
            int outputResult = 0;

            outputResult += data[0] << 8;
            outputResult += data[1];

            return outputResult;
        }

        public static byte[] WriteInt(int num)
        {
            byte[] dataToOuput = new byte[4];

            dataToOuput[0] = (byte)(num >> 24);
            dataToOuput[1] = (byte)(num >> 16);
            dataToOuput[2] = (byte)(num >> 8);
            dataToOuput[3] = (byte)(num);

            return dataToOuput;
        }

        public static byte[] WriteShort(int num)
        {
            byte[] dataToOuput = new byte[2];

            dataToOuput[0] = (byte)(num >> 8);
            dataToOuput[1] = (byte)(num);

            return dataToOuput;
        }
        #endregion

        static async void Server()
        {
            Out.WriteLine("Started pararell task.", "Azure.Boot");
            checkUpdates();

            Out.WriteLine("Checking for app.ini...", "Azure.Boot");
            
            if (!System.IO.File.Exists("app.ini"))
            {
                Out.WriteLine("Error #1 loading app.ini: File not exists", "Azure.Boot", ConsoleColor.Red);
                Console.ReadKey();
                Environment.Exit(0);
            }
            Settings = await ReadSettings(System.IO.File.ReadAllText("app.ini"));
            if (!Settings.ContainsKey("server") || !Settings.ContainsKey("mport") || !Settings.ContainsKey("username") || !Settings.ContainsKey("password") || !Settings.ContainsKey("dbName") || !Settings.ContainsKey("port") || !Settings.ContainsKey("flushPackets"))
            {
                Out.WriteLine("Error #3 loading app.ini: Configuration file is invalid", "Azure.Boot", ConsoleColor.Red);
                Console.ReadKey();
                Environment.Exit(0);
            }
            Out.WriteLine("app.ini loaded.", "Azure.Boot");
            Console.WriteLine();

            try
            {
                Out.WriteLine("Connecting to " + Settings["dbName"] + " at " + Settings["server"] + ":" + Settings["mport"] + " for user " + Settings["username"], "MySQL.Connect");
                manager = new DatabaseManager(30, 10, DatabaseType.MySQL);
                manager.setServerDetails(Settings["server"], uint.Parse(Settings["mport"]), Settings["username"], Settings["password"], Settings["dbName"]);
                manager.init();
                Out.WriteLine("Connection to database successfull.", "MySQL.Connect");
            }
            catch (Exception e)
            {
                Out.WriteLine("Error #4 connecting to MySQL: " + e.Message, "MySQL.Connect", ConsoleColor.Red);
                Console.ReadKey();
                Environment.Exit(0);
            }

            Console.WriteLine();
            Users = new Dictionary<uint, game.User>();
            Out.WriteLine("Initializing game maps ...", "Server.Game.Maps");
            Maps = new Dictionary<ushort, serverGame.Map>();
            using (IQueryAdapter dbClient = manager.getQueryreactor())
            {
                NPCS = new Dictionary<ushort, Ships>();
                var data = (System.Data.DataTable)dbClient.query("SELECT * FROM ships");
                foreach (System.Data.DataRow Row in data.Rows)
                {
                    Ships alien = new Ships();
                    alien.Id = Convert.ToUInt16(Row["Id"]);
                    alien.Name = Row["Name"].ToString();
                    alien.HP = Convert.ToUInt32(Row["HP"]);
                    alien.Shield = Convert.ToUInt32(Row["Shield"]);
                    alien.Damage = Convert.ToUInt32(Row["Damage"]);
                    alien.Speed = Convert.ToUInt16(Row["Speed"]);
                    alien.isNeutral = ToBool(Row["isNeutral"].ToString());
                    alien.shieldAbsorb = Convert.ToUInt16(Row["shieldAbsorb"]);
                    alien.LaserId = Convert.ToUInt16(Row["LaserId"]);
                    NPCS.Add(alien.Id, alien);

                    var data2 = (System.Data.DataTable)dbClient.query("SELECT * FROM ships_designs WHERE ShipId = " + alien.Id + "");
                    if (data2.Rows.Count > 0)
                    {
                        foreach (System.Data.DataRow _Row in data2.Rows)
                        {
                            Ships ship = new Ships();
                            ship.Id = Convert.ToUInt16(_Row["Id"]);
                            ship.Name = _Row["Name"].ToString();
                            ship.HP = Convert.ToUInt32(Row["HP"]);
                            ship.Shield = Convert.ToUInt32(Row["Shield"]);
                            ship.Damage = Convert.ToUInt32(Row["Damage"]);
                            ship.Speed = Convert.ToUInt16(Row["Speed"]);
                            ship.isNeutral = ToBool(Row["isNeutral"].ToString());
                            ship.shieldAbsorb = Convert.ToUInt16(Row["shieldAbsorb"]);
                            ship.LaserId = Convert.ToUInt16(Row["LaserId"]);
                            NPCS.Add(ship.Id, ship);
                        }
                    }
                }

                data = (System.Data.DataTable)dbClient.query("SELECT * FROM maps");
                foreach (System.Data.DataRow Row in data.Rows)
                {
                    Maps.Add(Convert.ToUInt16(Row["id"]), new serverGame.Map(Convert.ToUInt16(Row["id"]), Row["Name"].ToString(), Row["Portals"].ToString(), Row["NPCS"].ToString(), Program.ToBool(Row["isStarterMap"].ToString()), Convert.ToUInt16(Row["factionId"])));
                }
            }
            Out.WriteLine("Loaded " + Maps.Count + " maps.", "Server.Game.Maps");
            Out.WriteLine("Loaded " + NPCS.Count + " ships.", "Server.Game.Ships");
            Console.WriteLine();

            Out.WriteLine("Starting up asynchronous sockets server for game connections for port " + Settings["port"], "Server.AsyncSocketListener");
            Core.AsynchronousSocketListener.SetPort(Convert.ToInt32(Settings["port"]));
            Task.Factory.StartNew(Core.AsynchronousSocketListener.StartListening);
            Out.WriteLine("Asynchronous sockets server for game connections running on port " + Settings["port"], "Server.AsyncSocketListener");
            Out.WriteLine("DarkOrbit Emulator ready. Status: idle", "Azure.Boot");
            Console.WriteLine();
            Console.Beep();
        }


        public static string ToEnum(bool isTrue)
        {
            return (isTrue) ? "1" : "0";
        }

        public static bool ToBool(string isTrue)
        {
            return (isTrue == "1") ? true : false;
        }

        public static System.Data.DataRow checkSession(uint userId, ulong sessionId)
        {
            if (sessionId < 1 || userId < 1000)
            {
                return null;
            }

            using (IQueryAdapter dbClient = manager.getQueryreactor())
            {
                System.Data.DataTable data = (System.Data.DataTable)dbClient.query("SELECT users.ID, users.Email, users.Name, server_1_players.playerID, server_1_players.shipId, server_1_players.factionId, server_1_players.mapId, server_1_players.x, server_1_players.y, server_1_players.settings FROM server_1_players, users WHERE server_1_players.tokenId = @sessionId AND server_1_players.playerID = @ID AND users.ID = server_1_players.userID", (new string[] { "sessionId", "ID" }), (new string[] { sessionId.ToString(), userId.ToString() }));

                if (data.Rows.Count == 1)
                {
                    return data.Rows[0];
                }

                return null;         
            }
        }

        public static string GetPosWithOutZ(string Pos)
        {
            try
            {
                Pos = Pos.Substring(0, Pos.Length - 2);
                return (Pos.Replace("-", "").Length == 0) ? "0" : Pos;
            }
            catch (Exception e)
            {
                Console.WriteLine(e.ToString() + Pos);
                return null;
            }
        }

        public static string GetPosWithOutXY(string Pos)
        {
            try
            {
                return Pos.Substring(Pos.Length - 2, 2);
            }
            catch (Exception e)
            {
                Console.WriteLine(e.ToString() + Pos);
                return null;
            }
        }

        #region Azure.Boot Functions
        static async void checkUpdates()
        {
            try
            {
                string html = await new System.Net.WebClient().DownloadStringTaskAsync("http://www.elitepvpers.com/forum/darkorbit/2589025-azure-do-server.html");
                string[] Versioning = html.Split((new string[] { "<!-- google_ad_section_start -->Azure Do Server [" }), StringSplitOptions.None)[1].Split((new string[] { "]<!-- google_ad_section_end -->" }), StringSplitOptions.None)[0].Replace("v", "").Split('.');

                ushort Major = Convert.ToUInt16(Versioning[0]), Minor = 0, Build = 0;
                if (Versioning.Count() > 1)
                {
                    Minor = Convert.ToUInt16(Versioning[1]);
                    if (Versioning.Count() > 2)
                    {
                        Build = Convert.ToUInt16(Versioning[2]);
                    }
                }

                if (Major == 0 && Minor == 5 && Build == 0)
                {
                }
                else
                {
                    Out.WriteLine("New version is available. Azure DO Server " + Major + "." + Minor + "." + Build + "", "Azure.Boot", ConsoleColor.DarkGreen);
                }
            }
            catch (Exception)
            {
            }
        }
        static async Task<Dictionary<string, string>> ReadSettings(string settingsIni)
        {
            Dictionary<string, string> Settings = new Dictionary<string, string>();

            try
            {
                System.IO.StringReader strReader = new System.IO.StringReader(settingsIni);
                string line = null;

                while ((line = await strReader.ReadLineAsync()) != null)
                {
                    if (line.Length < 1 || line.StartsWith("#") || line.StartsWith("["))
                    {
                        continue;
                    }

                    int delimiterIndex = line.IndexOf("=");

                    if (delimiterIndex != -1)
                    {
                        string key = line.Substring(0, delimiterIndex);
                        string val = line.Substring(delimiterIndex + 1);

                        try
                        {
                            Settings.Add(key, val);
                        }
                        catch
                        {
                        }
                    }
                }

                strReader.Close();
            }
            catch (Exception e)
            {
                Out.WriteLine("Error #2 loading app.ini: " + e.Message, "Azure.Boot", ConsoleColor.Red);
                Console.ReadKey();
                Environment.Exit(0);
            }

            return Settings;
        }
        #endregion
    }

    static class Out
    {
        public static void WriteLine(string format, string header = "", ConsoleColor color = ConsoleColor.Black)
        {
            Console.ForegroundColor = ConsoleColor.DarkGray;
            Console.Write("[" + System.DateTime.Now + "] ");
            if (header != "")
            {
                Console.Write("[");
                Console.ForegroundColor = ConsoleColor.DarkBlue;
                Console.Write(header);
                Console.ForegroundColor = ConsoleColor.DarkGray;
                Console.Write("] ");
            }

            Console.Write(">> ");
            Console.ForegroundColor = color;
            Console.WriteLine(format);
            Console.ForegroundColor = ConsoleColor.DarkGray;
        }
    }
}
