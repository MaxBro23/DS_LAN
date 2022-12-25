<h3>Account löschen</h3><br>

Hier kannst du deinen Account löschen. Um es etwas sicherer zu machen, musst du zuvor dein Passwort eingeben, dass
niemand anders dein Account löschen kann.<br><br>

<form action="game.php?village={$villageid}&screen=settings&mode=userdelete&do=delete" method="post">
Passwort: <input type="password" name="passwort"><br>
<input type="submit" value="Löschen">

{$err}