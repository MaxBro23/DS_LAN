<?php
require_once("../../include.inc.php");
//Name des Bots
$botname="killfish"
//Einstellung des Bots (devensive=false; Offensive=true)
$config["off"]=true;

//Maximale ausbaustufen des bots
//Hauptgebäude
$max_stage=array ();
$max_stage["main"]=30;
//Kaserne
$max_stage["barracks"]=25;
//Stall
$max_stage["stable"]=20;
//Werkstatt
$max_stage["garage"]=15;
//Schmiede
$max_stage["smith"]=20;
//Adelshof
//hier bitte nichts ändern
if ($config["ag_style"]=="2")
{
    //Goldmünzen
    $max_stage["snob"]=1;
}
else
{
    //Normal
    $max_stage["snob"]=3;
}
//Marktplatz
$max_stage["market"]=25;
//Holzfäller
$max_stage["wood"]=30;
//Lehmgrube
$max_stage["stone"]=30;
//Eisenmine
$max_stage["iron"]=30;
//Bauernhof
$max_stage["farm"]=30;
//Speicher
$max_stage["storage"]=30;
//Versteck
$max_stage["hide"]=10;
//Wall
$max_stage["wall"]=20;

//Truppeneinstellungen
$max_units= array ();
if ($config['off']=true)
   {
     //Axtkämpfer
     $max_units["axe"]=2000;
     //Späher
     $max_units["spy"]=250;
     //Leichte Kavallerie
     $max_units["light"]=2000;
     //Schwere Kavallerie
     $max_units["heavy"]=2000;
     //Rammböcke
     $max_units["ram"]=150;
     //Katapulte
     $max_units["catapult"]=150;
     //Adelsgeschlechter
     $max_units["snob"]=20;
   }
   else
   {
       //Speerträger
       $max_units["spear"]=2000;
       //Schwertkämpfer
       $max_units["sword"]=2000;
       //Schwere Kavallerie
       $max_units['heavy']=2000;
       //Katapulte
       $max_units['catapult']=150;
   }    
?>