<html>
<head>
<title>
Das Erforschungs-Tool!
</title>
</head>
<body>
<div align="center">
<?php
$village_id = $_GET["village"];

$verbindung = mysql_connect("localhost","root","");

mysql_select_db("lan");

$sql = mysql_query("SELECT * FROM villages WHERE id = $village_id");
$information = mysql_fetch_object($sql);

$spear = $information->unit_spear_tec_level;
$sword = $information->unit_sword_tec_level;
$axe = $information->unit_axe_tec_level;
$archer = $information->unit_archer_tec_level;
$light = $information->unit_light_tec_level;
$heavy = $information->unit_heavy_tec_level;
$marcher = $information->unit_marcher_tec_level;
$ram = $information->unit_ram_tec_level;
$catapult = $information->unit_catapult_tec_level;

$i=$_POST['tech'];


if ($i=$stufe==1)
{
     if($spear == "3" AND $sword == "3" AND $axe == "3"  AND $archer == "3"AND $light == "3" AND $heavy == "3" AND $marcher == "3" AND $ram == "3" AND $catapult == "3")
{
echo "Es wurde bereits alles auf Stufe 3 erforscht!
         <html>
         <head>
         <meta http-equiv=\"refresh\" content=\"1; URL=/game.php?village=$village_id&screen=smith\">
         </head>
         </html>" ;
exit;
}
elseif($information->smith < "15")
{
$echo = 'Du ben&ouml;tigst die Schmiede mindestens auf Stufe 15.<br>';
}
elseif($information->stable < "10")
{
$echo = $echo . 'Du ben&ouml;tigst den Stall mindestens auf 10.<br>';
}
elseif($information->garage < "2")
{
$echo = $echo . 'Du ben&ouml;tigst die Werkstatt mindestens auf 2.<br>';
}
elseif($information->storage < "16")
{
$echo = $echo . 'Dein Speicher ist zu klein. Du ben&ouml;tigst ihn mindestens auf Stufe 16.<br>';
}
elseif($information->r_wood < "16182" AND $information->r_stone < "18846" AND $information->r_iron < "12490")
{
$echo = $echo . 'Du hast nicht gen&uuml;gend Rohstoffe! Du brauchst mindestens 16.182 Holz, 18.846 Lehm und 12.490 Eisen.';
}
else
{
$aendern = "UPDATE villages Set unit_spear_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_sword_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_axe_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_archer_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_spy_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_light_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_heavy_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_marcher_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_ram_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_catapult_tec_level='3' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

echo "Es wurde alles erfolgreich erforscht!
         <html>
         <head>
         <meta http-equiv=\"refresh\" content=\"1; URL=/game.php?village=$village_id&screen=smith\">
         </head>
         </html>";

$wood = $information->r_wood - 16182;
$stone = $information->r_stone - 18846;
$iron = $information->r_iron - 12490;

$update = mysql_query("UPDATE villages Set r_wood='$wood', r_stone='$stone', r_iron='$iron' WHERE id = '$village_id'");
}
echo $echo;
}
elseif ($i=$stufe==0)
{
if($spear == "1" AND $sword == "1" AND $axe == "1"  AND $archer == "1"AND $light == "1" AND $heavy == "1" AND $marcher == "1" AND $ram == "1" AND $catapult == "1")
{
echo "Es wurde bereits alles auf Stufe 1 erforscht!
         <html>
         <head>
         <meta http-equiv=\"refresh\" content=\"1; URL=/game.php?village=$village_id&screen=smith\">
         </head>
         </html>" ;
exit;
}
elseif($information->smith < "15")
{
$echo = 'Du ben&ouml;tigst die Schmiede mindestens auf Stufe 15.<br>';
}
elseif($information->stable < "10")
{
$echo = $echo . 'Du ben&ouml;tigst den Stall mindestens auf 10.<br>';
}
elseif($information->garage < "2")
{
$echo = $echo . 'Du ben&ouml;tigst die Werkstatt mindestens auf 2.<br>';
}
elseif($information->storage < "16")
{
$echo = $echo . 'Dein Speicher ist zu klein. Du ben&ouml;tigst ihn mindestens auf Stufe 16.<br>';
}
elseif($information->r_wood < "16182" AND $information->r_stone < "18846" AND $information->r_iron < "12490")
{
$echo = $echo . 'Du hast nicht gen&uuml;gend Rohstoffe! Du brauchst mindestens 16.182 Holz, 18.846 Lehm und 12.490 Eisen.';
}
else
{
$aendern = "UPDATE villages Set unit_spear_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_sword_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_axe_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_archer_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_spy_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_light_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_heavy_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_marcher_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_ram_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_catapult_tec_level='1' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

echo "Es wurde alles erfolgreich erforscht!
         <html>
         <head>
         <meta http-equiv=\"refresh\" content=\"1; URL=/game.php?village=$village_id&screen=smith\">
         </head>
         </html>";

$wood = $information->r_wood - 16182;
$stone = $information->r_stone - 18846;
$iron = $information->r_iron - 12490;

$update = mysql_query("UPDATE villages Set r_wood='$wood', r_stone='$stone', r_iron='$iron' WHERE id = '$village_id'");
}
echo $echo;

}
else
{
if($spear == "10" AND $sword == "10" AND $axe == "10"  AND $archer == "10"AND $light == "10" AND $heavy == "10" AND $marcher == "10" AND $ram == "10" AND $catapult == "10")
{
echo "Es wurde bereits alles auf Stufe 10 erforscht!
         <html>
         <head>
         <meta http-equiv=\"refresh\" content=\"1; URL=/game.php?village=$village_id&screen=smith\">
         </head>
         </html>" ;
exit;
}

elseif($information->smith < "15")
{
$echo = 'Du ben&ouml;tigst die Schmiede mindestens auf Stufe 15.<br>';
}
elseif($information->stable < "10")
{
$echo = $echo . 'Du ben&ouml;tigst den Stall mindestens auf 10.<br>';
}
elseif($information->garage < "2")
{
$echo = $echo . 'Du ben&ouml;tigst die Werkstatt mindestens auf 2.<br>';
}
elseif($information->storage < "16")
{
$echo = $echo . 'Dein Speicher ist zu klein. Du ben&ouml;tigst ihn mindestens auf Stufe 16.<br>';
}
elseif($information->r_wood < "16182" AND $information->r_stone < "18846" AND $information->r_iron < "12490")
{
$echo = $echo . 'Du hast nicht gen&uuml;gend Rohstoffe! Du brauchst mindestens 16.182 Holz, 18.846 Lehm und 12.490 Eisen.';
}
else
{
$aendern = "UPDATE villages Set unit_spear_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_sword_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_axe_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_archer_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_spy_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_light_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_heavy_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_marcher_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_ram_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

$aendern = "UPDATE villages Set unit_catapult_tec_level='10' WHERE id LIKE $village_id";
$update = mysql_query($aendern);

echo "Es wurde alles erfolgreich erforscht!
         <html>
         <head>
         <meta http-equiv=\"refresh\" content=\"1; URL=/game.php?village=$village_id&screen=smith\">
         </head>
         </html>";

$wood = $information->r_wood - 16182;
$stone = $information->r_stone - 18846;
$iron = $information->r_iron - 12490;

$update = mysql_query("UPDATE villages Set r_wood='$wood', r_stone='$stone', r_iron='$iron' WHERE id = '$village_id'");
}
echo $echo;
}
?>
<br /></a>
</div>
</body>
</html>