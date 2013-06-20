using MySQLManager.Database;
using MySQLManager.Session_Details.Interfaces;
using MySql.Data.MySqlClient;
using System;
using System.Data;
using Do;

namespace MySQLManager.Database.Session_Details
{
    internal class QueryAdapter : IRegularQueryAdapter
    {
        private static bool dbEnabled
        {
            get
            {
                return DatabaseManager.dbEnabled;
            }
        }
        protected MySqlClient client;
        protected MySqlCommand command;

        public DatabaseType dbType
        {
            get
            {
                return DatabaseType.MySQL;
            }
        }

        internal QueryAdapter(MySqlClient client)
        {
            this.client = client;
        }

        public void addParameter(string name, byte[] data)
        {
            this.command.Parameters.Add(new MySqlParameter(name, MySqlDbType.Blob, data.Length));
        }

        public void addParameter(string parameterName, object val)
        {
            this.command.Parameters.AddWithValue(parameterName, val);
        }

        public bool findsResult()
        {
            if (!dbEnabled)
                return false;
            DateTime now = DateTime.Now;
            bool hasRows = false;
            try
            {
                using (MySqlDataReader reader = this.command.ExecuteReader())
                {
                    hasRows = reader.HasRows;
                }
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }
            return hasRows;
        }

        public int getInteger()
        {
            if (!dbEnabled)
                return 0;
            DateTime now = DateTime.Now;
            int result = 0;
            try
            {
                object obj2 = this.command.ExecuteScalar();
                if (obj2 != null)
                {
                    int.TryParse(obj2.ToString(), out result);
                }
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }
            return result;
        }

        public DataRow getRow()
        {
            if (!dbEnabled)
                return null;
            DateTime now = DateTime.Now;
            DataRow row = null;
            try
            {
                DataSet dataSet = new DataSet();
                using (MySqlDataAdapter adapter = new MySqlDataAdapter(this.command))
                {
                    adapter.Fill(dataSet);
                }
                if ((dataSet.Tables.Count > 0) && (dataSet.Tables[0].Rows.Count == 1))
                {
                    row = dataSet.Tables[0].Rows[0];
                }
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }
            return row;
        }

        public string getString()
        {
            if (!dbEnabled)
                return string.Empty;
            DateTime now = DateTime.Now;
            string str = string.Empty;
            try
            {
                object obj2 = this.command.ExecuteScalar();
                if (obj2 != null)
                {
                    str = obj2.ToString();
                }
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }
            return str;
        }

        public DataTable getTable()
        {
            DateTime now = DateTime.Now;
            DataTable dataTable = new DataTable();
            if (!dbEnabled)
                return dataTable;
            try
            {
                using (MySqlDataAdapter adapter = new MySqlDataAdapter(this.command))
                {
                    adapter.Fill(dataTable);
                }
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }
            return dataTable;
        }

        public long insertQuery()
        {
            if (!dbEnabled)
                return 0;
            DateTime now = DateTime.Now;
            long lastInsertedId = 0L;
            try
            {
                this.command.ExecuteScalar();
                lastInsertedId = this.command.LastInsertedId;
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }

            return lastInsertedId;
        }

        public object query(string query, string[] parametersKeys = null, string[] parametersValues = null)
        {
            if (!dbEnabled)
                return 0;

            this.setQuery(query);
            if (parametersKeys != null)
            {
                uint count = 0;
                foreach (string Key in parametersKeys)
                {
                    this.addParameter(Key, parametersValues[count]);
                    ++count;
                }
            }

            if (query.StartsWith("INSERT"))
            {
                try
                {
                    return (long)command.ExecuteScalar();
                }
                catch (Exception)
                {
                    Out.WriteLine("Error [MySQL] " + this.command.CommandText);
                    return 0;
                }
            }
            else if (query.StartsWith("SELECT"))
            {
                return getTable();
            }
            else
            {
                runQuery();
            }

            return 0;
        }

        public void runQuery()
        {
            if (!dbEnabled)
                return;
            DateTime now = DateTime.Now;
            try
            {
                this.command.ExecuteNonQuery();
            }
            catch (Exception)
            {
                Out.WriteLine("Error [MySQL] " + this.command.CommandText);
            }
        }

        public void setQuery(string query)
        {
            this.command.Parameters.Clear();
            this.command.CommandText = query;
        }
    }
}

