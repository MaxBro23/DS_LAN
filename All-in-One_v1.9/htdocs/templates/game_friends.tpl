{php}

$sql3 = "SELECT * FROM `friends`";
$exec_sql2 = mysql_query($sql3) or $none_sql=1; 

if ($none_sql==1){
	$sql3 = "CREATE TABLE  `friends` (
	 `id` INT( 20 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	 `type` ENUM(  'activ',  'pending' ) NOT NULL DEFAULT  'pending',
	 `id_from` INT( 20 ) NOT NULL DEFAULT  '-1',
	 `id_to` INT( 20 ) NOT NULL DEFAULT  '-1'
	) ENGINE = MYISAM ;";
	$exec_sql2 = mysql_query($sql3) or die(mysql_error());
}


$id_village=$this->_tpl_vars['village']['id'];
$id_player=$this->_tpl_vars['user']['id'];
$name_player=urldecode($this->_tpl_vars['user']['username']);
$_GET['action'] = addslashes($_GET['action']);
$do=$_GET['action'];
$_GET['buddy_id'] = addslashes($_GET['buddy_id']);
$buddy_id=$_GET['buddy_id'];
$timp=time();



if ($do=="cancel_buddy"){

   $sql3 = "SELECT `id`,`id_to` FROM `friends` where `id_from`='$id_player' AND `id`='$buddy_id'";
   $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
   $control_number = mysql_num_rows($exec_sql2);
   while ($array2 = mysql_fetch_array($exec_sql2)) {
      $id_to = $array2[1];
   }



   if ($control_number==1){
      $sql3 = "DELETE FROM `friends` WHERE `id`='$buddy_id'";
      $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 


      $control_number_block = 0;

      if ($control_number_block==0) {

         $title="Die Freundesanfrage von $name_player wurde zur�ckgezogen";

         $sql3 = "INSERT INTO `reports` (title, time, type, to_user, from_user, receiver_userid, is_new, in_group, from_username) VALUES ('$title', '$timp', 'invite_friend_cancel', '$id_to', '$id_player', '$id_to', '1', 'other', '$name_player')";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
          
         $sql3 = "UPDATE `users` set `new_report`='1' WHERE `id`='$id_to'";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error());
      }

      header("Location: game.php?village=$id_village&screen=friends");



   } else {
         header("Location: game.php?village=$id_village&screen=friends&error=The entry doesn't exist!");
   }

}


if ($do=="reject_buddy"){

   $sql3 = "SELECT `id`,`id_from` FROM `friends` where `id_to`='$id_player' AND `id`='$buddy_id'";
   $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
   $control_number = mysql_num_rows($exec_sql2);
   while ($array2 = mysql_fetch_array($exec_sql2)) {
      $id_from = $array2[1];
   }

   if ($control_number==1){
      $sql3 = "DELETE FROM `friends` WHERE `id`='$buddy_id'";
      $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
 
      $control_number_block = 0;

      if ($control_number_block==0) {

         $title="$name_player wurde nicht hinzugef�gt";

         $sql3 = "INSERT INTO `reports` (title, time, type, to_user, from_user, receiver_userid, is_new, in_group, from_username) VALUES ('$title', '$timp', 'decline_friend', '$id_from', '$id_player', '$id_from', '1', 'other', '$name_player')";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 

         $sql3 = "UPDATE `users` set `new_report`='1' WHERE `id`='$id_from'";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error());
      }
      header("Location: game.php?village=$id_village&screen=friends");



   } else {
         header("Location: game.php?village=$id_village&screen=friends&error=The entry doesn't exist!");
   }

}

if ($do=="approve_buddy"){

   $sql3 = "SELECT `id`,`id_from` FROM `friends` where `id_to`='$id_player' AND `id`='$buddy_id'";
   $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
   $control_number = mysql_num_rows($exec_sql2);
   while ($array2 = mysql_fetch_array($exec_sql2)) {
      $id_from = $array2[1];
   }

   if ($control_number==1){
      $sql3 = "UPDATE `friends` set `type`='activ' WHERE `id`='$buddy_id'";
      $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
      $title="$name_player hat deine Freundesanfrage akzeptiert";

      $control_number_block = 0;

      if ($control_number_block==0) {

         $sql3 = "INSERT INTO `reports` (title, time, type, to_user, from_user, receiver_userid, is_new, in_group, from_username) VALUES ('$title', '$timp', 'accept_friend', '$id_from', '$id_player', '$id_from', '1', 'other', '$name_player')";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error());

         $sql3 = "UPDATE `users` set `new_report`='1' WHERE `id`='$id_from'";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error());
      }

      header("Location: game.php?village=$id_village&screen=friends");


   } else {
         header("Location: game.php?village=$id_village&screen=friends&error=The entry doesn't exist!");
   }

}

if ($do=="delete_buddy"){


   $sql3 = "SELECT `id`,`id_to`,`id_from` FROM `friends` where (`id_to`='$id_player' OR `id_from`='$id_player') AND `type`='activ' AND `id`='$buddy_id'";
   $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
   $control_number = mysql_num_rows($exec_sql2);
   while ($array2 = mysql_fetch_array($exec_sql2)) {
      $id_to = $array2[1];
      $id_from = $array2[2];
   }

   if ($control_number==1){
      $sql3 = "DELETE FROM `friends` WHERE `id`='$buddy_id'";
      $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
      if ($id_to==$id_player) {
         $id_all=$id_from;
      } elseif ($id_from==$id_player) {
         $id_all=$id_to;
      }


      $control_number_block = 0;

      if ($control_number_block==0) {

         $title="$name_player wurde von der Freundesliste entfernt";

         $sql3 = "INSERT INTO `reports` (title, time, type, to_user, from_user, receiver_userid, is_new, in_group, from_username) VALUES ('$title', '$timp', 'delete_friend', '$id_all', '$id_player', '$id_all', '1', 'other', '$name_player')";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 

         $sql3 = "UPDATE `users` set `new_report`='1' WHERE `id`='$id_all'";
         $exec_sql2 = mysql_query($sql3) or die(mysql_error());
      }

      header("Location: game.php?village=$id_village&screen=friends");

   } else {
         header("Location: game.php?village=$id_village&screen=friends&error=The entry doesn't exist!");
   }




}


if ($do=="add_buddy"){

   $_POST['name'] = addslashes($_POST['name']);
   $add_name=urlencode($_POST['name']);

   $sql7 = "SELECT `id` FROM `users` where `username`='$add_name' LIMIT 1";
   $exec_sql6 = mysql_query($sql7) or die(mysql_error());
   $nr_result = mysql_num_rows($exec_sql6);
   $add_name=htmlspecialchars($add_name);
   $error="The player $add_name doens't exist!";
   $error=urlencode($error);
   if ($nr_result<>1){ header("Location: game.php?village=$id_village&screen=friends&error=$error");}
   if ($nr_result==1){   
        while ($array2 = mysql_fetch_array($exec_sql6)) {
         $id_newfriend = $array2[0];
      }
      if ($id_newfriend<>$id_player){
         $sql7 = "SELECT `id` FROM `friends` where `id_from`='$id_player' AND `id_to`='$id_newfriend' OR `id_to`='$id_player' AND `id_from`='$id_newfriend'  LIMIT 1";
         $exec_sql6 = mysql_query($sql7) or die(mysql_error());
         $nr_result_ver = mysql_num_rows($exec_sql6);
         if ($nr_result_ver==0) {
            $sql0 = "INSERT INTO `friends` (id_from, id_to, type) VALUES ('$id_player', '$id_newfriend', 'pending')";
            $exec_sql0 = mysql_query($sql0);

            $control_number_block = 0;

            if ($control_number_block==0) {

               $title="Freundesanfrage von $name_player";
               $sql3 = "INSERT INTO `reports` (title, time, type, to_user, from_user, receiver_userid, is_new, in_group, from_username) VALUES ('$title', '$timp', 'invite_friend', '$id_newfriend', '$id_player', '$id_newfriend', '1', 'other', '$name_player')";
               $exec_sql2 = mysql_query($sql3) or die(mysql_error()); 

               $sql3 = "UPDATE `users` set `new_report`='1' WHERE `id`='$id_newfriend'";
               $exec_sql2 = mysql_query($sql3) or die(mysql_error());

            }

            header("Location: game.php?village=$id_village&screen=friends");
         } else {
             header("Location: game.php?village=$id_village&screen=friends&error=Der Spieler $add_name existiert bereits in deiner Liste!");
         }
      } else {
         header("Location: game.php?village=$id_village&screen=friends&error=Du kannst diesen Spieler nicht hinzuf�gen");
      }

   }


}

   $sql7 = "SELECT `id`,`id_to` FROM `friends` where `id_from`='$id_player' AND `type`='pending' ORDER BY ID";
   $exec_sql6 = mysql_query($sql7) or die(mysql_error());
   $nr_pending = mysql_num_rows($exec_sql6);
   if ($nr_pending<>0){   
      while ($array2 = mysql_fetch_array($exec_sql6)) {
         $id_pending[] = $array2[0];
         $id_to_pending[] = $array2[1];
      }

   }

   $sql7 = "SELECT `id`,`id_from` FROM `friends` where `id_to`='$id_player' AND `type`='pending' ORDER BY ID";
   $exec_sql6 = mysql_query($sql7) or die(mysql_error());
   $nr_pending_request = mysql_num_rows($exec_sql6);
   if ($nr_pending_request<>0){   
      while ($array2 = mysql_fetch_array($exec_sql6)) {
         $id_pending_request[] = $array2[0];
         $id_from_pending_request[] = $array2[1];
      }

   }


   $sql7 = "SELECT `id`,`id_from`, `id_to` FROM `friends` where (`id_to`='$id_player' OR `id_from`='$id_player') AND `type`='activ' ORDER BY ID";
   $exec_sql6 = mysql_query($sql7) or die(mysql_error());
   $nr_activ = mysql_num_rows($exec_sql6);
   if ($nr_activ<>0){   
      while ($array2 = mysql_fetch_array($exec_sql6)) {
         $id_activ[] = $array2[0];
         $id_from_activ[] = $array2[1];
         $id_to_activ[] = $array2[2];
         if ($array2[1]==$id_player) {
            $id_all_activ[]=$array2[2];
         } else {
            $id_all_activ[]=$array2[1];
         }
      }

   }

{/php}

{php}
$error1=$_GET['error'];
if ($error1<>""){
   echo "<h2 class=\"error\">$error1</h2>";
}
{/php}

<h2>Freunde</h2> 
<p>Hier kannst du deine Freundesliste verwalten und sehen, welche Freunde gerade online sind. Nimm nur Spieler in deine Freundesliste auf,
denen du sehr gut vertrauen kannst, da diese deinen Onlinestatus sehen k�nnen. Dieser w�re eine zu wertvolle Information f�r deine Feinde.</b></p> 

{php}
if ($nr_activ<>0){   
{/php}

<h3>Meine Freunde</h3> 
<table class="vis"> 
<tr><th>Spieler</th><th>Status</th> 
<th>&#160;</th></tr> 

{php}
foreach ($id_activ as $key => $value) {

$sql3 = "select `username`,`last_activity` from `users` where `id`='$id_all_activ[$key]'";
$exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
while ($array2 = mysql_fetch_array($exec_sql2)) {
     $nume_user_pending = urldecode($array2[0]);
     $last_activity_user_pending = $array2[1];
}

$timp_ver=$timp-180;
if ($last_activity_user_pending>=$timp_ver) {
   $online=y;
} else {
   $online=n;
}


{/php}
<tr> 
	<td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={php}echo $id_all_activ[$key];{/php}">{php}echo $nume_user_pending{/php}</a></td> 
	<td>{php}if ($online=='y') { echo '<center><img src="graphic/user_online.gif" alt="online" title="online"></center>'; } elseif ($online=='n') { echo '<center><img src="graphic/user_offline.gif" alt="offline" title="offline"></center>';}{/php}</td>
        <td><a href="game.php?village={$village.id}&amp;screen=friends&amp;action=delete_buddy&amp;buddy_id={php}echo $value{/php}" onclick="return confirm('Bist du sicher das du diesen Spieler von deiner Freundesliste entfernen willst?')">L�schen</a></td> 
</tr> 
{php}}{/php}
</table> 
{php}}{/php}






{php}
if ($nr_pending<>0){ 
{/php}

<h3>Meine Freunde</h3> 
<table class="vis"> 
<tr><th>Spieler</th><th colspan="2">Aktion</th></tr> 
{php}
foreach ($id_pending as $key => $value) {

$sql3 = "select `username` from `users` where `id`='$id_to_pending[$key]'";
$exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
while ($array2 = mysql_fetch_array($exec_sql2)) {
     $nume_user_pending = urldecode($array2[0]);
}
{/php}
<tr> 
	<td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={php}echo $id_to_pending[$key]{/php}">{php}echo $nume_user_pending{/php}</a></td> 
	<td><a href="game.php?village={$village.id}&amp;screen=friends&amp;action=cancel_buddy&amp;buddy_id={php}echo $value{/php}" onclick="return confirm('Bist du sicher das du diesen Freund l�schen willst?')">Freunde l&ouml;schen</a></td> 
</tr> 
{php}}{/php}
</table> 
{php}}{/php}


{php}
if ($nr_pending_request<>0){ 
{/php}

 
<h3>Meine Freunde</h3> 
<table class="vis"> 
<tr><th>Spieler</th><th colspan="2">Aktion</th></tr> 
{php}
foreach ($id_pending_request as $key => $value) {

$sql3 = "select `username` from `users` where `id`='$id_from_pending_request[$key]'";
$exec_sql2 = mysql_query($sql3) or die(mysql_error()); 
while ($array2 = mysql_fetch_array($exec_sql2)) {
     $nume_user_pending = urldecode($array2[0]);
}
{/php}

<tr> 
	<td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={php}echo $id_from_pending_request[$key];{/php}">{php}echo $nume_user_pending{/php}</a></td> 
	<td><a href="game.php?village={$village.id}&amp;screen=friends&amp;action=approve_buddy&amp;buddy_id={php}echo $value{/php}" onclick="return confirm('Bist du sicher das du diese Freundesanfrage annehmen m�chtest?')">Annehmen</a></td> 
	<td><a href="game.php?village={$village.id}&amp;screen=friends&amp;action=reject_buddy&amp;buddy_id={php}echo $value{/php}" onclick="return confirm('Bist du sicher das du diese Freundanfrage ablehnen m�chtest?')">Ablehnen</a></td> 
</tr> 
{php}}{/php}
</table> 
{php}}{/php}










 
 
<h4>Freund hinzuf�gen</h4> 
<form action="game.php?village={$village.id}&amp;screen=friends&amp;action=add_buddy" method="post"> 
<input name="name" type="text" /><input type="submit" value="OK" /> 
</form>