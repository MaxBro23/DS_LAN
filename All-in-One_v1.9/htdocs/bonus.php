<?php
include("include.inc.php");
include("include/config.php");

$bonus_text1 = mysql_query("SELECT * FROM villages WHERE id = '".$_GET['villid']."'");
$bonus_text2 = mysql_fetch_assoc($bonus_text1);

if($bonus_text2['bonus'] == 1)
	{ 
	 echo "<b>".$bonus['dealers']."% mehr Speicherkapazit&auml;t und H&auml;ndler</b>";
	}
	elseif($bonus_text2['bonus'] == 2)
	{
	 echo "<b>".$bonus['farm']."% mehr Bev&ouml;lkerung</b>";
	}
	elseif($bonus_text2['bonus'] == 3)
	{
	 echo "<b>".$bonus['stable']."% schnellere Produktion im Stall</b>";
	}
	elseif($bonus_text2['bonus'] == 4)
	{
	 echo "<b>".$bonus['barracks']."% schnellere Produktion in der Kaserne</b>";
	}
	elseif($bonus_text2['bonus'] == 5)
	{
	 echo "<b>".$bonus['garage']."% schnellere Produktion in der Werkstatt</b>";
	}
	elseif($bonus_text2['bonus'] == 6)
	{
	 echo "<b>".$bonus['res']."% mehr Rohstoffproduktion</b>";
	}
?>