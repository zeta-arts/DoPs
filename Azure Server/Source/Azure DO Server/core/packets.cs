using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Do.Core
{
    class parserPacket : IDisposable
    {
        private string[] packetData;
        private int count = -1;

        public parserPacket(string Packet)
        {
            packetData = Packet.Split('|');
        }

        public int getInt()
        {
            count++;
            return Convert.ToInt32(packetData[count]);
        }

        public short getShort()
        {
            count++;
            return Convert.ToInt16(packetData[count]);
        }

        public uint getUInt()
        {
            count++;
            return Convert.ToUInt32(packetData[count]);
        }

        public ulong getULong()
        {
            count++;
            return Convert.ToUInt64(packetData[count]);
        }

        public ushort getUShort()
        {
            count++;
            return Convert.ToUInt16(packetData[count]);
        }

        public string getString()
        {
            count++;
            return packetData[count];
        }

        public bool getBool()
        {
            count++;
            return Program.ToBool(packetData[count]);
        }

        public bool MoreToRead
        {
            get { return (packetData.Count() > (count + 1)) ? true : false; }
        }

        public void Dispose()
        {
            GC.SuppressFinalize(this);
        }
    }
}
