namespace MySQLManager.Managers.Database
{
    using MySQLManager.Database.Database_Exceptions;
    using System;

    public class DatabaseServer
    {
        private readonly string databaseName;
        private readonly string host;
        private readonly string password;
        private readonly uint port;
        private readonly string user;

        public DatabaseServer(string host, uint port, string username, string password, string databaseName)
        {
            if ((host == null) || (host.Length == 0))
            {
                throw new DatabaseException("No host was given");
            }
            if ((username == null) || (username.Length == 0))
            {
                throw new DatabaseException("No username was given");
            }
            if ((databaseName == null) || (databaseName.Length == 0))
            {
                throw new DatabaseException("No database name was given");
            }
            this.host = host;
            this.port = port;
            this.databaseName = databaseName;
            this.user = username;
            this.password = (password != null) ? password : "";
        }

        public string getDatabaseName()
        {
            return this.databaseName;
        }

        public string getHost()
        {
            return this.host;
        }

        public string getPassword()
        {
            return this.password;
        }

        public uint getPort()
        {
            return this.port;
        }

        public string getUsername()
        {
            return this.user;
        }

        public override string ToString()
        {
            return (this.user + "@" + this.host);
        }
    }
}

