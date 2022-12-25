<html>
<head>
<title>Alle Einheiten by knollenmax und Jonsn</title>
<link rel="stylesheet" type="text/css" href="stamm.css">
<style tpye="text/css">
body{
padding-left:30px;
padding-top:30px;
}
</style>
</head>
<body bgcolor="#f2e1bd">
<font size="6" face="Arial">Alle Einheiten:</font><br>
 <font size="2"><i>by knollenmax &amp; Jonsen</i></font><br><br>
<?php
$village_id = $_GET["village"];

$verbindung = mysql_connect("localhost","root","");
mysql_select_db("lan");

$sql = "SELECT userid FROM villages WHERE id LIKE '$village'";
$query = mysql_query($sql);
$userid = mysql_fetch_object($query);

$user_id = $userid->userid;
?>

<table width="700" border="1" bordercolor="#000000" bgcolor="#f2e2be" cellpadding="2" cellspacing="3">
 <tr>
  <th scope="col">Speertr&auml;ger</th>
  <th scope="col">Schwertk&auml;mpfer</th>
  <th scope="col">Axtk&auml;mpfer</th>
  <th scope="col">Bogensch&uuml;tzen</th>
  <th scope="col">Sp&auml;her</th>
  <th scope="col">Leichte&nbsp;Kavallerie</th>
  <th scope="col">Schwere&nbsp;Kavallerie</th>
  <th scope="col">Berittener Bogensch&uuml;tze</th>
  <th scope="col">Rammb&ouml;cke</th>
  <th scope="col">Katapulte</th>
  <th scope="col">Paladine</th>
  <th scope="col">Adelsgeschlechter</th>
 </tr>
 <tr>
  <td><?php 
$sql = "SELECT SUM(all_unit_spear) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_spear)']; ?></td>
  <td><?php 
$sql = "SELECT SUM(all_unit_sword) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_sword)']; ?></td>
  <td><?php 
$sql = "SELECT SUM(all_unit_axe) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_axe)']; ?></td>

<td><?php 
$sql = "SELECT SUM(all_unit_archer) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_archer)']; ?></td>

  <td><?php 
$sql = "SELECT SUM(all_unit_spy) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_spy)']; ?></td>
  <td><?php 
$sql = "SELECT SUM(all_unit_light) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_light)']; ?></td>
  <td><?php 
$sql = "SELECT SUM(all_unit_heavy) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_heavy)']; ?></td>

<td><?php 
$sql = "SELECT SUM(all_unit_marcher) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_marcher)']; ?></td>

  <td><?php 
$sql = "SELECT SUM(all_unit_ram) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_ram)']; ?></td>
  <td><?php 
$sql = "SELECT SUM(all_unit_catapult) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_catapult)']; ?></td>

  <td><?php 
$sql = "SELECT SUM(all_unit_knight) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_knight)']; ?></td>

  <td><?php 
$sql = "SELECT SUM(all_unit_snob) FROM villages WHERE userid LIKE '$user_id'";
$query = mysql_query($sql);
$result = mysql_fetch_assoc($query); echo $result['SUM(all_unit_snob)']; ?></td>
 </tr>
</table><br><br>

<a href="game.php?village=<?php echo "$village_id"; ?>&screen=place"><-Zur&uuml;ck</a>
</body>
</html>