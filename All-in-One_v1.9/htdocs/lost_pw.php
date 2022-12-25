<html>
<head><title>Passwort vergessen/ändern</title>
<link rel="stylesheet" type="text/css" href="stamm.css">
<style tpye="text/css">
body{
padding-top:30px;
}
</style>
</head>
<body>

<table class="main" width="800" align="center">
 <tr>
	<td>
	  <h1>Passwort vergessen/&auml;ndern</h1><br>
	  Wenn du dein Passwort vergessen hast oder dein Passwort ändern möchtest, gib hier deinen Benutzernamen ein und du erhältst
	  dann ein automatisch erzeutgtes Passwort, das du dann Ingame ändern kannst.<br><br>
	  <form action="lost_pw.php?action=send" method="Post">
	  Dein Username: &nbsp;&nbsp;&nbsp;<input type="text" name="username"><br>
	  <input type="submit" value="Senden"><br><br>
	  </form>
	  <?php
	  $send = $_GET["action"];
	  $username = $_POST["username"];
	  if($send == "send")
	  {
	  if($username !== "")
	  {
	  $verbindung = mysql_connect("localhost", "root","");
	  mysql_select_db("lan");

	  $result = mysql_query("SELECT id FROM users WHERE username LIKE '$username'");
	  $menge = mysql_num_rows($result);

	  if($menge !== 0)
	  {
	  $zufall = rand(9999,99999);
	  echo "Dein neues Passwort ist<br>
	  <br>
	  &nbsp;&nbsp;&nbsp;<b>$zufall</b><br>
	  <br>
	  Notier dir das Passwort. Dann kannst du dich damit auf der Startseite einloggen<br>
	  und es dann <b>Ingame  &auml;ndern. (Einstellungen->Passwort &auml;ndern)</b><br>
	  <a href=\"index.php\">Zur&uuml;ck</a>";

	  $new_pw = md5($zufall);

	  $sql = "UPDATE users SET password = '$new_pw' WHERE username = '$username'";
	  $update = mysql_query($sql);
	  }
	  else
	  {
	  echo "Du hast einen ung&uuml;ltigen Benutzernamen angegeben.<br><a href=\"lost_pw.php\">Zur&uuml;ck</a>";
	  }
	  }
  	  else
	  {
	  echo "Bitte das Feld <b>\"Username\"</b> ausfüllen<br><a href=\"lost_pw.php\">Zur&uuml;ck</a>";
	  }
	  }
	  ?>
	</td>
 </tr>
</tabel>

</body>
</html>