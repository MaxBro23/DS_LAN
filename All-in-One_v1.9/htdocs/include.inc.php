<?php
require('include.inc2.php');
require('include/config.php');
require('include/configs/bonus.php');

// Produktivitätskurve von Einheiten
$bonus['prod'] = 0.665;

$link=mysql_connect($config['db_host'],$config['db_user'],$config['db_pw']) or die("not");
mysql_select_db("lan") or die("not");
$sql_bonus_villages = mysql_query("SELECT * FROM villages WHERE id = '".$_GET["village"]."'");
$vill = mysql_fetch_assoc($sql_bonus_villages);
// Händler & Speicher
if ($vill["bonus"] == "1")
	{
	// Speicher erhöhen
	$bonus['factor'] = ($bonus['dealers'] / 100) + 1;
	$bonus['zahl'] = 1;
	while($bonus['zahl'] <= count($arr_maxstorage))
		{
		$arr_maxstorage[$bonus['zahl']] = round($arr_maxstorage[$bonus['zahl']] * $bonus['factor']);
		$bonus['zahl']++;
		}
	// Händler erhöhen
	$bonus['zahl'] = 0;
	while($bonus['zahl'] < count($arr_dealers))
		{
		$arr_dealers[$bonus['zahl']] = round($arr_dealers[$bonus['zahl']] * $bonus['factor']);
		$bonus['zahl']++;
		}
	}
// Mehr Bevölkerung
elseif($vill["bonus"] == "2")
	{
	$bonus['factor'] = ($bonus['farm'] / 100) + 1;
	$bonus['zahl'] = 1;
	while($bonus['zahl'] <= count($arr_farm))
		{
		$arr_farm[$bonus['zahl']] = round($arr_farm[$bonus['zahl']] * $bonus['factor']);
		$bonus['zahl']++;
		}
	}
// Mehr Stallproduktivität
elseif($vill["bonus"] == "3")
	{
	$bonus['factor'] = ($bonus['stable'] / 100) + 1;
	// Späher
	$neu_spy = $cl_units->get_time(0, "unit_spy");
	$cl_units->add_unit($lang->grab("configs_units", "spy"),"unit_spy");
	$cl_units->set_time(($neu_spy / $bonus['prod']) / $bonus['factor']);
	// LKav
	$neu_light = $cl_units->get_time(0, "unit_light");
	$cl_units->add_unit($lang->grab("configs_units", "light"),"unit_light");
	$cl_units->set_time(($neu_light / $bonus['prod']) / $bonus['factor']);
	// SKav
	$neu_heavy = $cl_units->get_time(0, "unit_heavy");
	$cl_units->add_unit($lang->grab("configs_units", "heavy"),"unit_heavy");
	$cl_units->set_time(($neu_heavy / $bonus['prod']) / $bonus['factor']);
	// Berittene Bögen
	// Zum Aktivieren die /* und */ entfernen
/*	$neu_marcher = $cl_units->get_time(0, "unit_marcher");
	$cl_units->add_unit("Berittene Bogensch&uuml;tzen","unit_marcher");
	$cl_units->set_time(($neu_marcher / $bonus['prod']) / $bonus['factor']);
*/
	}
// Mehr Kasernenproduktivität
elseif($vill["bonus"] == "4")
	{
	$bonus['factor'] = ($bonus['barracks'] / 100) + 1;
	// Speer
	$neu_spear = $cl_units->get_time(0, "unit_spear");
	$cl_units->add_unit($lang->grab("configs_units", "spear"),"unit_spear");
	$cl_units->set_time(($neu_spear / $bonus['prod']) / $bonus['factor']);
	// Schwert
	$neu_sword = $cl_units->get_time(0, "unit_sword");
	$cl_units->add_unit($lang->grab("configs_units", "sword"),"unit_sword");
	$cl_units->set_time(($neu_sword / $bonus['prod']) / $bonus['factor']);
	// Axt
	$neu_axe = $cl_units->get_time(0, "unit_axe");
	$cl_units->add_unit($lang->grab("configs_units", "axe"),"unit_axe");
	$cl_units->set_time(($neu_axe / $bonus['prod']) / $bonus['factor']);
	// Bögen
	// Zum Aktivieren die /* und */ entfernen
/*	$neu_archer = $cl_units->get_time(0, "unit_archer");
	$cl_units->add_unit("Bogensch&uuml;tzen","unit_archer");
	$cl_units->set_time(($neu_archer / $bonus['prod']) / $bonus['factor']);
*/
	}
// Mehr Werkstattproduktivität
elseif($vill["bonus"] == "5")
	{
	$bonus['factor'] = ($bonus['garage'] / 100) + 1;
	// Ramme
	$neu_ram = $cl_units->get_time(0, "unit_ram");
	$cl_units->add_unit($lang->grab("configs_units", "ram"),"unit_ram");
	$cl_units->set_time(($neu_ram / $bonus['prod']) / $bonus['factor']);
	// Katapult
	$neu_catapult = $cl_units->get_time(0, "unit_catapult");
	$cl_units->add_unit($lang->grab("configs_units", "catapult"),"unit_catapult");
	$cl_units->set_time(($neu_catapult / $bonus['prod']) / $bonus['factor']);
	}
// Mehr Rohstoffproduktion
elseif($vill["bonus"] == "6")
	{
	$bonus['factor'] = ($bonus['res'] / 100) + 1;
	$bonus['zahl'] = 0;
	while($bonus['zahl'] < count($arr_production))
		{
		$arr_production[$bonus['zahl']] = $arr_production[$bonus['zahl']] * $bonus['factor'];
		$bonus['zahl']++;
		}
	}

function get_bonus($x,$y)
{
  $sql = mysql_query("SELECT * FROM villages WHERE x = '$x' AND y = '$y'");
  $vill = mysql_fetch_assoc($sql);
  if ($vill["bonus"] > "0")
  {
    $out = true;
  }
  else
  {
    $out = false;
  }
  return $out;
}

function off_or_deff($x, $y)	{
	$sql = mysql_query("SELECT * FROM villages WHERE x = '".$x."' AND y = '".$y."'");
	$vill = mysql_fetch_assoc($sql);
	
	$vid = intval($_GET['village']);
	$sql2 = mysql_query("SELECT * FROM villages WHERE id = '".$vid."'");
	$vill2 = mysql_fetch_assoc($sql2);
	
	if($vill2['userid'] == $vill['userid'])
		{
		 if($vill['type'] != "")
			{
			 $out = $vill['type'];
			}
			else
			{
			 $out = false;
			}
		}
		else
		{
		 $out = false;
		}
	return $out;
	}
?>