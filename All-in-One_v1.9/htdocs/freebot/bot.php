<html>
<head>
<title>FreeBot - Make your Own!</title>
</head>
<body bgcolor="#F0E8D0" style="font-family: verdana; font-size: 12px;">
<?php
mysql_connect("localhost", "root", NULL);
mysql_select_db("lan");

// Include File
include_once("functions/build.func.php");
include_once("functions/transfer.func.php");
include_once("functions/get_ress.func.php");
include_once("functions/r_build.func.php");
include_once("functions/reload_ress.func.php");
include_once("configs/max_build.php");
include_once("../include.inc.php");

if ($_GET["action"] == "start")
{
  // Define arrays
  $bot = array();
  $vid = array();
  $sql = array();
  
  // Der Username des Spielers der der Bot steuern soll
  $bot["username"] = "milos";
  
  // Set all user infos in a var
  $sql["user"] = mysql_query("SELECT * FROM users WHERE username = '".$bot["username"]."'");
  $user = mysql_fetch_assoc($sql["user"]);
  
  // Get all villages
  $sql["all_vills"] = mysql_query("SELECT * FROM villages WHERE userid = '".$user["id"]."'");
  
  while($villages = mysql_fetch_assoc($sql["all_vills"]))
  {
    // Set all villages in an Array
    $vid[] = $villages["id"];
  }
  
  foreach($vid AS $botvid)
  {    
    $sql["village"] = mysql_query("SELECT * FROM villages WHERE id = '".$botvid."'");
    $village = mysql_fetch_assoc($sql["village"]);
      
    $r_build = get_r_build();
     
    if ($r_build != "none")
    {
      $need_wood_b = ress_woodb($r_build);
      $need_stone_b = ress_stoneb($r_build);
      $need_iron_b = ress_ironb($r_build);
      
      if ($village["r_wood"] >= $need_wood_b AND $village["r_stone"] >= $need_stone_b AND $village["r_iron"] >= $need_iron_b)
      {
        build($r_build, $village["id"]);
        echo "<br>Im Dorf ".$village["id"]." wurde ".$r_build." eine Stufe höher gebaut!";
        mysql_query("UPDATE villages SET r_wood = r_wood - '".$need_wood_b."' WHERE id = '".$village["id"]."'");
        mysql_query("UPDATE villages SET r_stone = r_stone - '".$need_stone_b."' WHERE id = '".$village["id"]."'");
        mysql_query("UPDATE villages SET r_iron = r_iron - '".$need_iron_b."' WHERE id = '".$village["id"]."'");
      }
      else
      {
        echo "<br>Der Bot konnte beim Dorf ".$village["id"]." nichts machen!";
      }
    }
    else
    {
      echo "<br>Der Bot konnte beim Dorf ".$village["id"]." nichts machen!";
    }
    
    reload_ress($village["id"]);
  }

// Reload all Points
reload_all_village_points();
reload_all_player_points();
reload_all_ally_points();
reload_ally_rangs();
reload_player_rangs();
reload_kill_player();


// transfer("SEITE", ZEIT)
transfer("./bot.php?action=start", 5);

}
elseif ($_GET["action"] == "stop")
{
  echo "Der Bot wurde erfolgreich gestoppt!";
}
?>
</body>
</html>