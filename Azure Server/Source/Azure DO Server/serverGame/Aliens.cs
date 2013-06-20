using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Do.serverGame
{
    class Alien
    {
        public uint Id, shield, HP, selectedUserId = 0;
        public ushort typeId, mapId;
        public string x { get; set; }
        public string y { get; set; }
        public bool IsAttacking = false;

        public Alien(uint ID, ushort typeID, ushort mapId)
        {
            this.Id = ID;
            this.typeId = typeID;
            this.x = Program.Random.Next(5, 200).ToString() + "00";
            this.y = Program.Random.Next(5, 128).ToString() + "00";
            this.mapId = mapId;
            this.shield = Program.NPCS[typeID].Shield;
            this.HP = Program.NPCS[typeID].HP;

            Attack();
        }

        public void Regenerate()
        {
            this.x = Program.Random.Next(5, 200).ToString() + "00";
            this.y = Program.Random.Next(5, 128).ToString() + "00";
            this.shield = Program.NPCS[this.typeId].Shield;
            this.HP = Program.NPCS[this.typeId].HP;
            this.selectedUserId = 0;
            this.IsAttacking = false;
        }

        public void receivedAttack(uint userId)
        {
            this.selectedUserId = userId;
            this.IsAttacking = true;
        }

        private async void Move()
        {
            if (selectedUserId != 0)
            {
            }
            else
            {
            }
        }

        private async void Attack(bool AvisedO = false)
        {
            try
            {
                if (this.selectedUserId > 999 && this.IsAttacking && Program.Maps[this.mapId].Users.ContainsKey(this.selectedUserId))
                {
                    string eX = Program.GetPosWithOutZ(Program.Users[this.selectedUserId].Ship.x), eY = Program.GetPosWithOutZ(Program.Users[this.selectedUserId].Ship.y),
        uX = Program.GetPosWithOutZ(x), uY = Program.GetPosWithOutZ(y);

                    if (Program.Users[this.selectedUserId].Ship.isAttacking == false && Program.Users[this.selectedUserId].Ship.InSecureArea == true)
                    {
                    }
                    if (!(Convert.ToInt32(eX) - Convert.ToInt32(uX) < 7 && Convert.ToInt32(eX) - Convert.ToInt32(uX) > -7) || !(Convert.ToInt32(eY) - Convert.ToInt32(uY) < 7 && Convert.ToInt32(eY) - Convert.ToInt32(eY) > -7))
                    {
                        if (!AvisedO)
                        {
                            AvisedO = true;
                            Program.Users[this.selectedUserId].Send("0|V");
                        }
                    }
                    else
                    {
                        if (AvisedO)
                        {
                            Program.Users[this.selectedUserId].Send("0|X");
                        }

                        AvisedO = false;
                        int power = Convert.ToInt32(Program.NPCS[this.typeId].Damage * 1);

                        int minPower = (power / 10);
                        power = power + new Random().Next(-minPower, minPower);

                        int realDamage = power;
                        if (Program.Users[this.selectedUserId].Ship.shield > 0)
                        {
                            if (Program.Users[this.selectedUserId].Ship.shield - realDamage > 0)
                            {
                                Program.Users[this.selectedUserId].Ship.shield -= Convert.ToUInt32(realDamage);
                            }
                            else
                            {
                                if (Program.Users[this.selectedUserId].Ship.shield - realDamage < 0)
                                {
                                    realDamage += +(Convert.ToInt32(Program.Users[this.selectedUserId].Ship.shield) - realDamage);
                                }

                                Program.Users[this.selectedUserId].Ship.shield = 0;
                            }

                            realDamage = power - Convert.ToInt32(power * (Program.Users[this.selectedUserId].Ship.shieldAbsorb / 100m));
                        }

                        realDamage = Math.Abs(realDamage);
                        if (Program.Users[this.selectedUserId].Ship.HP - realDamage < 1)
                        {
                            Program.Users[this.selectedUserId].Ship.HP = 0;

                            foreach (var Pair in Program.Maps[this.mapId].Users)
                            {
                                Pair.Value.Send("0|K|" + this.selectedUserId);
                            }

                            Program.Maps[this.mapId].RemoveUser(this.selectedUserId);
                            Program.Users[this.selectedUserId].discconectUser(1);
                            this.selectedUserId = 0;
                            this.IsAttacking = false;
                        }
                        else
                        {
                            try
                            {
                                Program.Users[this.selectedUserId].Ship.HP -= Convert.ToUInt32(realDamage);

                                string packet = "0|a|" + this.Id + "|" + this.selectedUserId + "|" + Program.NPCS[this.typeId].LaserId + "|1|1";
                                string packet2 = "0|Y|" + this.Id + "|" + this.selectedUserId + "|L|" + Program.Users[this.selectedUserId].Ship.HP + "|" + Program.Users[this.selectedUserId].Ship.shield + "|" + power + "|100|1";
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
            }
            catch (Exception e)
            {
                Console.WriteLine(e.ToString());
            }
            await Task.Delay(1000);
            Attack();
        }
    }
}
