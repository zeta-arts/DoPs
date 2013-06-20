<?php
$json = ['isError' => 0, 'data' => []];
$json['data']['ret']['filters']['weapons'] = [0,1,2];
$json['data']['ret']['filters']['generators'] = [3,4,5];
$json['data']['ret']['filters']['extras'] = [6,7,8,9,10,11];
$json['data']['ret']['filters']['ammunition'] = [12,13,14];
$json['data']['ret']['filters']['resources'] = [15];
$json['data']['ret']['filters']['drone_related'] = [16,17];
$json['data']['ret']['filters']['modules'] = [18];
$json['data']['ret']['filters']['pet_related'] = [19,20];

$json['data']['ret']['hangars'] = [];
$json['data']['ret']['hangars'][0]['hangarID'] = '196834';
$json['data']['ret']['hangars'][0]['name'] = '';
$json['data']['ret']['hangars'][0]['hangar_is_active'] = true;
$json['data']['ret']['hangars'][0]['hangar_is_selected'] = true;
$json['data']['ret']['hangars'][0]['general']['ship']['I'] = '1';
$json['data']['ret']['hangars'][0]['general']['ship']['HP'] = '4000';
$json['data']['ret']['hangars'][0]['general']['ship']['L'] = 0;
$json['data']['ret']['hangars'][0]['general']['ship']['SM'] = 'ship_police'; // design
$json['data']['ret']['hangars'][0]['general']['ship']['M'] = ['ship_police']; // ship
$json['data']['ret']['hangars'][0]['general']['drones'] = [];
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ'] = [];
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ'] = [];
/*
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['lasers'] = ['8742614'];
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['generators'] = ['8742613'];
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['extras'] = ['8742617'];
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['lasers'] = ['8742614'];
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['generators'] = ['8742613'];
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['extras'] = ['8742617'];

*/
$json['data']['ret']['items'] = [];
$json['data']['ret']['items'][0]['I'] = '8742613';
$json['data']['ret']['items'][0]['LV'] = 0;
$json['data']['ret']['items'][0]['L'] = 1;
$json['data']['ret']['items'][0]['S'] = 0;
$json['data']['ret']['items'][1]['I'] = '8742614';
$json['data']['ret']['items'][1]['LV'] = 0;
$json['data']['ret']['items'][1]['L'] = 2;
$json['data']['ret']['items'][1]['S'] = 1;
$json['data']['ret']['items'][2]['I'] = '8742617';
$json['data']['ret']['items'][2]['LV'] = 0;
$json['data']['ret']['items'][2]['L'] = 3;
$json['data']['ret']['items'][2]['S'] = 2;
$json['data']['ret']['items'][2]['Q'] = 2000;

$json['data']['ret']['itemInfo'] = [];
$json['data']['ret']['itemInfo'][0]['L'] = 0;
$json['data']['ret']['itemInfo'][0]['name'] = 'Phoenix';
$json['data']['ret']['itemInfo'][0]['T'] = 21;
$json['data']['ret']['itemInfo'][0]['C'] = 'ship';
$json['data']['ret']['itemInfo'][0]['levels'] = [];
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['lasers']['T'] = [0];
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['generators']['T'] = [3,4];
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['heavy_guns']['T'] = [1];
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['extras']['T'] = [11,9,7,8,10,6];
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['extras']['Q'] = 1;
$json['data']['ret']['itemInfo'][0]['levels'][0]['selling']['credits'] = 0;
$json['data']['ret']['itemInfo'][0]['levels'][0]['cdn']['63x63'] = 'cd8f64340c58ff3442bbd1e7ae715500';
$json['data']['ret']['itemInfo'][0]['levels'][0]['cdn']['100x100'] = 'c8fdab3ed091595e5a4d122ef33eee00';
$json['data']['ret']['itemInfo'][0]['levels'][0]['cdn']['top'] = 'c96f80f53d3010ddbdfa5f88ad2d4e00';

$json['data']['ret']['itemInfo'][1]['L'] = 0;
$json['data']['ret']['itemInfo'][1]['name'] = 'SG3N-A01';
$json['data']['ret']['itemInfo'][1]['T'] = 4;
$json['data']['ret']['itemInfo'][1]['C'] = 'generator';
$json['data']['ret']['itemInfo'][1]['levels'] = [];
$json['data']['ret']['itemInfo'][1]['levels'][0]['selling']['credits'] = 4000;
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['30x30'] = '8c0b74bf0cc43c58fb39e6d48c495000';
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['63x63'] = 'd2fc1d2a80f3ef4376c9b63145b10c00';
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['100x100'] = '19228ba81b387583a63ed8c9a9465400';

$json['data']['ret']['itemInfo'][2]['L'] = 2;
$json['data']['ret']['itemInfo'][2]['name'] = 'MP-1';
$json['data']['ret']['itemInfo'][2]['T'] = 0;
$json['data']['ret']['itemInfo'][2]['C'] = 'laser';
$json['data']['ret']['itemInfo'][2]['levels'] = [];
$json['data']['ret']['itemInfo'][2]['levels'][0]['selling']['credits'] = 20000;
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['30x30'] = 'cfde29bcddbbfbcf4abccb06a1bad900';
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['63x63'] = '52eb84ef703379bc9cc9268f59ff5a00';
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['100x100'] = '23ad6cc5c949ffce0e6ff2683b16e700';

$json['data']['ret']['itemInfo'][3]['L'] = 3;
$json['data']['ret']['itemInfo'][3]['name'] = 'LCB-10';
$json['data']['ret']['itemInfo'][3]['T'] = 14;
$json['data']['ret']['itemInfo'][3]['C'] = 'battery';
$json['data']['ret']['itemInfo'][3]['levels'] = [];
$json['data']['ret']['itemInfo'][3]['levels'][0]['selling']['credits'] = 5;
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['30x30'] = 'dae4f308e45cc4a93ac36451afabc700';
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['63x63'] = 'c02154d2ce135d660f647631dbbfbc00';
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['100x100'] = 'd8db5c48fe907c65a74b77b7206a5e00';

$json['data']['ret']['itemInfo'][4]['L'] = 4;
$json['data']['ret']['itemInfo'][4]['name'] = 'R-310';
$json['data']['ret']['itemInfo'][4]['T'] = 14;
$json['data']['ret']['itemInfo'][4]['C'] = 'battery';
$json['data']['ret']['itemInfo'][4]['levels'] = [];
$json['data']['ret']['itemInfo'][4]['levels'][0]['selling']['credits'] = 50;
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['30x30'] = '68af73bca9114add674a573fee166200';
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['63x63'] = 'bd4b785081ad98c8a38efd38c1443b00';
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['100x100'] = '9d29b47ca17ee0316f80a4bee39c9600';

$json['data']['ret']['itemInfo'][5]['L'] = 5;
$json['data']['ret']['itemInfo'][5]['name'] = 'Repair Robot Basic';
$json['data']['ret']['itemInfo'][5]['T'] = 9;
$json['data']['ret']['itemInfo'][5]['C'] = 'special';
$json['data']['ret']['itemInfo'][5]['levels'] = [];
$json['data']['ret']['itemInfo'][5]['levels'][0]['selling']['credits'] = 3750;
$json['data']['ret']['itemInfo'][5]['levels'][0]['cdn']['30x30'] = '6512f6cf8e8d40ff25c73b0c225e5500';
$json['data']['ret']['itemInfo'][5]['levels'][0]['cdn']['63x63'] = 'c82f70710b97fc05410bb53b6b8e7400';
$json['data']['ret']['itemInfo'][5]['levels'][0]['cdn']['100x100'] = 'd474477ba5d66d7f3255fb1068eeea00';

$json['data']['ret']['itemInfo'][6]['L'] = 6;
$json['data']['ret']['itemInfo'][6]['name'] = 'Booty Key';
$json['data']['ret']['itemInfo'][6]['T'] = 22;
$json['data']['ret']['itemInfo'][6]['C'] = 'special';
$json['data']['ret']['itemInfo'][6]['levels'] = [];
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['30x30'] = 'ffbc72514edc29adbcb69b1da2c23a00';
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['63x63'] = '2c2649217fac98e086c9cd8fcec30300';
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['100x100'] = 'ef618aff20a6e2bcc88d806284cfcb00';

$json['data']['ret']['userInfo']['factionRelated'] = 'eic';
$json['data']['money']['uridium'] = '10,000';
$json['data']['money']['credits'] = '30,000';

$json['data']['map']['types'] = ['Weapon_LaserType','Weapon_HellstormLauncherType','Weapon_WeaponType','Generator_EngineType','Generator_ShieldType','Generator_GeneratorType','Extra_BoosterType','Extra_Cpu_CPUType','Extra_ModuleType','Extra_RobotType','Extra_UpgradeType','Extra_ExtraType','Weapon_Ammo_LaserType','Weapon_Ammo_RocketType','Weapon_Ammo_AmmunitionType','Resource_OreType','Drone_Design_DroneDesignType','Drone_Formation_DroneFormationType','Module_StationModuleType','Pet_PetGearType','Pet_AIProtocolType','Ship_ShipType','Item_ItemType'];
$json['data']['map']['lootIds'] = ["ship_police","equipment_generator_shield_sg3n-a01","equipment_weapon_laser_mp-1","ammunition_laser_lcb-10","ammunition_rocket_r-310","equipment_extra_repbot_rep-s","resource_booty-key"];

echo base64_encode(json_encode($json));
//                    {"isError":0,"data":{"ret":{"filters":{"weapons":[0,1,2],"generators":[3,4,5],"extras":[6,7,8,9,10,11],"ammunition":[12,13,14],"resources":[15],"drone_related":[16,17],"modules":[18],"pet_related":[19,20]},"hangars":[{"hangarID":"196834","name":"","hangar_is_active":true,"hangar_is_selected":true,"general":{"ship":{"I":"5","HP":"16000","L":0,"SM":"ship_liberator","M":["ship_liberator"]},"drones":[]},"config":{"1":{"ship":{"EQ":[]}},"2":{"ship":{"EQ":[]}}}}],"items":[{"I":"8742616","LV":0,"L":1,"S":3,"Q":18},{"I":"8742618","LV":0,"L":2,"S":5,"Q":1},{"I":"8751138","LV":0,"L":3,"S":0,"Q":54},{"I":"8755299","LV":0,"L":4,"S":1,"Q":300}],"itemInfo":[{"L":0,"name":"Liberator","T":21,"C":"ship","levels":[{"slotsets":{"lasers":{"T":[0],"Q":4},"generators":{"T":[3,4],"Q":6},"heavy_guns":{"T":[1],"Q":1},"extras":{"T":[11,9,7,8,10,6],"Q":2}},"selling":{"credits":32000},"cdn":{"63x63":"1fd1699b162b315e7d7097c79019e700","100x100":"12811c57da5f73380b089c37aebde700","top":"4d48488a8ca0d9946c12ab1241d46c00"}}]},{"L":1,"name":"R-310","T":14,"C":"battery","levels":[{"selling":{"credits":50},"cdn":{"30x30":"68af73bca9114add674a573fee166200","63x63":"bd4b785081ad98c8a38efd38c1443b00","100x100":"9d29b47ca17ee0316f80a4bee39c9600"}}]},{"L":2,"name":"Booty Key","T":22,"C":"special","levels":[{"cdn":{"30x30":"ffbc72514edc29adbcb69b1da2c23a00","63x63":"2c2649217fac98e086c9cd8fcec30300","100x100":"ef618aff20a6e2bcc88d806284cfcb00"}}]},{"L":3,"name":"PLT-2026","T":14,"C":"battery","levels":[{"selling":{"credits":250},"cdn":{"30x30":"0eb7d727d0e8d7c05ad9121573a6b200","63x63":"c6bfdcd09949f7b61b98ead3c6773500","100x100":"58fdf543bd4fbd7bfd7bcb011c9d1100"}}]},{"L":4,"name":"MCB-25","T":14,"C":"battery","levels":[{"selling":{"credits":1},"cdn":{"30x30":"becac3718527c5212ffbaef4de6beb00","63x63":"86c2c2d261ef196310b34fb3f92c6800","100x100":"fa407a1644e0563e5138b0499c682100"}}]}],"userInfo":{"factionRelated":"eic"}},"money":{"uridium":"10,003","credits":"68,950"},"map":{"types":["Weapon_LaserType","Weapon_HellstormLauncherType","Weapon_WeaponType","Generator_EngineType","Generator_ShieldType","Generator_GeneratorType","Extra_BoosterType","Extra_Cpu_CPUType","Extra_ModuleType","Extra_RobotType","Extra_UpgradeType","Extra_ExtraType","Weapon_Ammo_LaserType","Weapon_Ammo_RocketType","Weapon_Ammo_AmmunitionType","Resource_OreType","Drone_Design_DroneDesignType","Drone_Formation_DroneFormationType","Module_StationModuleType","Pet_PetGearType","Pet_AIProtocolType","Ship_ShipType","Item_ItemType"],"lootIds":["ship_liberator","ammunition_rocket_r-310","resource_booty-key","ammunition_rocket_plt-2026","ammunition_laser_mcb-25"]}}}
//                    {"isError":0,"data":{"ret":{"filters":{"weapons":[0,1,2],"generators":[3,4,5],"extras":[6,7,8,9,10,11],"ammunition":[12,13,14],"resources":[15],"drone_related":[16,17],"modules":[18],"pet_related":[19,20]},"hangars":[{"hangarID":"196834","name":"","hangar_is_active":true,"hangar_is_selected":true,"general":{"ship":{"I":"1","HP":"4000","L":0,"SM":"ship_phoenix","M":["ship_phoenix"]},"drones":[]},"config":{"1":{"ship":{"EQ":[]}},"2":{"ship":{"EQ":[]}}}}],"items":[{"I":"8742613","LV":0,"L":1,"S":0},{"I":"8742614","LV":0,"L":2,"S":1},{"I":"8742617","LV":0,"L":3,"S":2,"Q":2000}],"itemInfo":[{"L":0,"name":"Phoenix","T":21,"C":"ship","levels":[{"slotsets":{"lasers":{"T":[0],"Q":1},"generators":{"T":[3,4],"Q":1},"heavy_guns":{"T":[1],"Q":1},"extras":{"T":[11,9,7,8,10,6],"Q":1}},"selling":{"credits":0},"cdn":{"63x63":"cd8f64340c58ff3442bbd1e7ae715500","100x100":"c8fdab3ed091595e5a4d122ef33eee00","top":"c96f80f53d3010ddbdfa5f88ad2d4e00"}}]},{"L":0,"name":"SG3N-A01","T":4,"C":"generator","levels":[{"selling":{"credits":4000},"cdn":{"30x30":"8c0b74bf0cc43c58fb39e6d48c495000","63x63":"d2fc1d2a80f3ef4376c9b63145b10c00","100x100":"19228ba81b387583a63ed8c9a9465400"}}]},{"L":2,"name":"MP-1","T":0,"C":"laser","levels":[{"selling":{"credits":20000},"cdn":{"30x30":"cfde29bcddbbfbcf4abccb06a1bad900","63x63":"52eb84ef703379bc9cc9268f59ff5a00","100x100":"23ad6cc5c949ffce0e6ff2683b16e700"}}]},{"L":3,"name":"LCB-10","T":14,"C":"battery","levels":[{"selling":{"credits":5},"cdn":{"30x30":"dae4f308e45cc4a93ac36451afabc700","63x63":"c02154d2ce135d660f647631dbbfbc00","100x100":"d8db5c48fe907c65a74b77b7206a5e00"}}]},{"L":4,"name":"R-310","T":14,"C":"battery","levels":[{"selling":{"credits":50},"cdn":{"30x30":"68af73bca9114add674a573fee166200","63x63":"bd4b785081ad98c8a38efd38c1443b00","100x100":"9d29b47ca17ee0316f80a4bee39c9600"}}]},{"L":5,"name":"Repair Robot Basic","T":9,"C":"special","levels":[{"selling":{"credits":3750},"cdn":{"30x30":"6512f6cf8e8d40ff25c73b0c225e5500","63x63":"c82f70710b97fc05410bb53b6b8e7400","100x100":"d474477ba5d66d7f3255fb1068eeea00"}}]},{"L":6,"name":"Booty Key","T":22,"C":"special","levels":[{"cdn":{"30x30":"ffbc72514edc29adbcb69b1da2c23a00","63x63":"2c2649217fac98e086c9cd8fcec30300","100x100":"ef618aff20a6e2bcc88d806284cfcb00"}}]}],"userInfo":{"factionRelated":"eic"}},"money":{"uridium":"10,000","credits":"30,000"},"map":{"types":["Weapon_LaserType","Weapon_HellstormLauncherType","Weapon_WeaponType","Generator_EngineType","Generator_ShieldType","Generator_GeneratorType","Extra_BoosterType","Extra_Cpu_CPUType","Extra_ModuleType","Extra_RobotType","Extra_UpgradeType","Extra_ExtraType","Weapon_Ammo_LaserType","Weapon_Ammo_RocketType","Weapon_Ammo_AmmunitionType","Resource_OreType","Drone_Design_DroneDesignType","Drone_Formation_DroneFormationType","Module_StationModuleType","Pet_PetGearType","Pet_AIProtocolType","Ship_ShipType","Item_ItemType"],"lootIds":["ship_phoenix","equipment_generator_shield_sg3n-a01","equipment_weapon_laser_mp-1","ammunition_laser_lcb-10","ammunition_rocket_r-310","equipment_extra_repbot_rep-s","resource_booty-key"]}}}
//echo base64_encode('{"isError":0,"data":{"ret":{"filters":{"weapons":[0,1,2],"generators":[3,4,5],"extras":[6,7,8,9,10,11],"ammunition":[12,13,14],"resources":[15],"drone_related":[16,17],"modules":[18],"pet_related":[19,20]},"hangars":[{"hangarID":"196834","name":"","hangar_is_active":true,"hangar_is_selected":true,"general":{"ship":{"I":"1","HP":"4000","L":0,"SM":"ship_phoenix","M":["ship_phoenix"]},"drones":[]},"config":{"1":{"ship":{"EQ":[]}},"2":{"ship":{"EQ":[]}}}}],"items":[{"I":"8742618","LV":0,"L":1,"S":5,"Q":1}],"itemInfo":[{"L":0,"name":"Phoenix","T":21,"C":"ship","levels":[{"slotsets":{"lasers":{"T":[0],"Q":1},"generators":{"T":[3,4],"Q":1},"heavy_guns":{"T":[1],"Q":1},"extras":{"T":[11,9,7,8,10,6],"Q":1}},"selling":{"credits":0},"cdn":{"63x63":"cd8f64340c58ff3442bbd1e7ae715500","100x100":"c8fdab3ed091595e5a4d122ef33eee00","top":"c96f80f53d3010ddbdfa5f88ad2d4e00"}}]},{"L":1,"name":"Booty Key","T":22,"C":"special","levels":[{"cdn":{"30x30":"ffbc72514edc29adbcb69b1da2c23a00","63x63":"2c2649217fac98e086c9cd8fcec30300","100x100":"ef618aff20a6e2bcc88d806284cfcb00"}}]}],"userInfo":{"factionRelated":"eic"}},"money":{"uridium":"10,000","credits":"72,750"},"map":{"types":["Weapon_LaserType","Weapon_HellstormLauncherType","Weapon_WeaponType","Generator_EngineType","Generator_ShieldType","Generator_GeneratorType","Extra_BoosterType","Extra_Cpu_CPUType","Extra_ModuleType","Extra_RobotType","Extra_UpgradeType","Extra_ExtraType","Weapon_Ammo_LaserType","Weapon_Ammo_RocketType","Weapon_Ammo_AmmunitionType","Resource_OreType","Drone_Design_DroneDesignType","Drone_Formation_DroneFormationType","Module_StationModuleType","Pet_PetGearType","Pet_AIProtocolType","Ship_ShipType","Item_ItemType"],"lootIds":["ship_phoenix","resource_booty-key"]}}}');
?>