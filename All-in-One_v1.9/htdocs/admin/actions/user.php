<?php
/**
 * Userverwaltung
 * 
 * Script by Manuel Mannhardt aka SlimShady95
 * manuel_mannhardt@web.de / 479-117-593
 */

// Mode 
$Mode = $_GET['mode'];

// Mode checken
if($Mode == '') {
  $Users = array();
  $Query = $db->query('SELECT * FROM `users`');
  while($User = $db->fetch($Query)) {
    $User['username'] = urldecode($User['username']);
    $Users[] = $User;
  }
  // Übergeben
  $tpl->assign('Users', $Users);
} elseif($Mode == 'edit') {
  $ID = mysql_escape_string($_GET['id']);
  $Query = $db->query('SELECT * FROM `users` WHERE `id` = ' . $ID);
  $Data = $db->fetch($Query);
  // Daten übergeben
  $tpl->assign('User', $Data);
  
  // Alle Dörfer aus der DB holen und übergeben
  $Query = $db->query('SELECT * FROM `villages` WHERE `userid` = ' . $ID . ' ORDER BY `id`');
  $Villages = array();
  while($Village = $db->fetch($Query)) {
    $Village['name'] = urldecode($Village['name']);
    $Villages[] = $Village;
  }
  $tpl->assign('Villages', $Villages);
  
  // Wurde etwas geändert?
  if($_POST) {
  	foreach($_POST AS $Element => $Value) {
  	  $_POST[$Element] = mysql_escape_string($Value);
  	}
  	$Sql = 'UPDATE `users` SET
  	          `home` = \'' . $_POST['location'] . '\',
  	          `sex` = \'' . $_POST['sex'] . '\',
  	          `personal_text` = \'' . htmlspecialchars($_POST['text']) . '\',
  	          `b_day` = \'' . $_POST['day'] . '\', 
              `b_month` = \'' . $_POST['month'] . '\',   	          
			  `b_year` = \'' . $_POST['year'] . '\'               
  	        WHERE `id` = ' . $ID;
    $db->query($Sql) or die(mysql_error());
    header('Location: index.php?screen=user&mode=edit&id=' . $ID . '&action=done');
    exit();
  }
  // Dorf wegnehmen
  if($_GET['take_village'] != '') {
  	$VID = mysql_escape_string($_GET['take_village']);
  	// Gibt es das Dorf bzw gehört es dem User?
  	$Query = $db->query('SELECT * FROM `villages` WHERE `id` = ' . $VID . ' AND `userid` = ' . $ID) or die('hier ist der fehler');
  	if($db->numrows($Query)) {
  	  $Query = $db->query('UPDATE `users` SET `villages` = `villages` - 1 WHERE `id` = ' . $ID);
  	  $Query = $db->query('UPDATE `villages` SET `userid` = -1, `snobed_by` = -1 WHERE `id` = ' . $VID);
  	  if($Query) {
  	    header('Location: index.php?screen=user&mode=edit&id=' . $ID . '&action=done_v');
  	    exit();  	  	
  	  }
  	} 
  }
} elseif($Mode == 'delete') {
  $ID = mysql_escape_string($_GET['id']);
  $Query = $db->query('SELECT * FROM `users` WHERE `id` = ' . $ID);
  if($db->numrows($Query)) {
  	$Query = $db->query('UPDATE `villages` SET `userid` = -1 WHERE `userid` = ' . $ID);
    $Query = $db->query('DELETE FROM `users` WHERE `id` = ' . $ID . ' LIMIT 1');    
    if($Query) {
  	  header('Location: index.php?screen=user&mode=delete&action=done');
  	  exit();
    }
  }
} elseif($Mode == 'bann_y') {
  $ID = mysql_escape_string($_GET['id']);
  $Query = $db->query('UPDATE `users` SET `banned` = \'Y\' WHERE `id` = ' . $ID);	
  header('Location: index.php?screen=user');
  exit();
} elseif($Mode == 'bann_n') {
  $ID = mysql_escape_string($_GET['id']);
  $Query = $db->query('UPDATE `users` SET `banned` = \'N\' WHERE `id` = ' . $ID);	
  header('Location: index.php?screen=user');
  exit();  
}
reload_all_village_points();
reload_all_ally_points();
reload_all_player_points();
reload_ally_rangs();
reload_player_rangs(); 
?>