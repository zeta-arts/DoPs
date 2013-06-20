using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Do.game.usersClass
{
    class Ship
    {
        public uint Id, HP, maxHP, speed, shield, maxShield, damage, selectedUserId, UCB100, taskMovingId = 0;
        public string x, y, Name;
        public bool InSecureArea = false, isAttacking = false;
        public ushort factionId = 0, shieldAbsorb;

        public Ship(uint shipId, string Name, ushort factionId, string x, string y)
        {
            this.Id = shipId;
            this.Name = Name;
            this.HP = Program.NPCS[Convert.ToUInt16(shipId)].HP;
            this.maxHP = Program.NPCS[Convert.ToUInt16(shipId)].HP;
            this.speed = Program.NPCS[Convert.ToUInt16(shipId)].Speed;
            this.x = x;
            this.y = y;
            this.shield = 100000;
            this.shieldAbsorb = 80;
            this.maxShield = 100000;
            this.damage = 1000;
            this.UCB100 = 0;
            this.factionId = factionId;
        }
    }
}
