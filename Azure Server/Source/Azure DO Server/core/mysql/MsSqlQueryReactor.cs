using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using MySQLManager.Database.Database_Exceptions;
using MySQLManager.Session_Details.Interfaces;

namespace MySQLManager.Database.Session_Details.Interfaces
{
	class MsSqlQueryReactor : MSSQLQueryAdapter, IQueryAdapter, IRegularQueryAdapter, IDisposable
	{
        internal MsSqlQueryReactor(MsSQLClient client)
            : base(client)
        {
            base.command = client.getNewCommand();
        }

        public void Dispose()
        {
            base.command.Dispose();
            base.client.reportDone();
        }

        public void doCommit()
        {
            new TransactionException("Can't use rollback on a non-transactional Query reactor");
        }

        public void doRollBack()
        {
            new TransactionException("Can't use rollback on a non-transactional Query reactor");
        }

        internal bool getAutoCommit()
        {
            return true;
        }
	}
}
