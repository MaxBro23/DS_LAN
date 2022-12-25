<?php
$mysql->connect('localhost', 'root', '', 'lan');
if ($GET["action"]=="start_bot")


{
    echo "Der Bot wurde gestartet!";
    require_once("./include/functions.inc.php");
    require_once("./include/config.inc.php");
    $id= $db->query('SELECT id FROM users WHERE username=$botname');
}
elseif($GET['action']=="stop_bot")
{
    echo "Der Bot wurde beendet!";
}
 ?>