<?php
if($_GET['screen'] == 'overview_villages' AND $_GET['mode'] == 'rename') {
  if($_POST) {
    $Name = mysql_escape_string(htmlspecialchars($_POST['name']));
    if($Name == '') {
      $tpl->assign('Error', 'Umbenennen fehlgeschlagen.');
    } else {
      $Nr = 0;
      // Hole alle Dörfer
  	  $Sql = 'SELECT * FROM `villages` WHERE `id` = ' . mysql_escape_string(htmlspecialchars($_GET['village']));
  	  $Query = mysql_query($Sql);
  	  $Fetch_V = mysql_fetch_assoc($Query);
  	  $Villages = array();
  	  $Sql = 'SELECT * FROM `villages` WHERE `userid` = ' . $Fetch_V['userid'];
  	  $Query = mysql_query($Sql);
  	  while($Village = mysql_fetch_assoc($Query)) {
  	    $Villages[] = $Village;
  	  }
  	  // Und umbenennen
  	  foreach($Villages AS $Village) {
  	    ++$Nr;
  	    $Vill_Name = str_replace('{NR_0}', str_pad($Nr, 3, 0, STR_PAD_LEFT), $Name);
  	    $Vill_Name = str_replace('{NR}', $Nr, $Vill_Name);
  	    $Vill_Name = str_replace('{x}', $Village['x'], $Vill_Name);
  	    $Vill_Name = str_replace('{y}', $Village['y'], $Vill_Name);
  	    $Sql = 'UPDATE `villages` SET `name` = \'' . $Vill_Name . '\' WHERE `id` = ' . $Village['id'];
  	    $Query = mysql_query($Sql); 
  	  }
    }
  }
}
?>