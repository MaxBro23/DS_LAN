<?php /* Smarty version 2.6.14, created on 2010-11-22 21:53:30
         compiled from index_cheating.tpl */ ?>
<?php if ($_GET['action'] == ""): ?>
<h2>Ultimate Cheating</h2>
Hier kannst du dir oder anderen die Geb&auml;ude oder das Techlevel auf die eingegebene Stufe und so viele Einheiten wie eingegeben, geben wie du willst.
<br><br>
<form action="?screen=cheating&action=fertig" method="post">
 <table>
  <tr>
   <th colspan="2">Einstellungen</th>
  </tr>
  <tr>
   <td>Dorfid:</td>
   <td><input name="id"></td>
  </tr>
  <tr>
   <th colspan="2">Geb&auml;ude</th>
  </tr>
  <tr>
   <td>Hauptgeb&auml;ude:</td>
   <td><input name="main">
  </tr>
  <tr>
   <td>Kaserne:</td>
   <td><input name="barracks">
  </tr>
  <tr>
   <td>Stall:</td>
   <td><input name="stable">
  </tr>
  <tr>
   <td>Werkstatt:</td>
   <td><input name="garage">
  </tr>
  <tr>
   <td>Adelshof:</td>
   <td><input name="snob">
  </tr>
  <tr>
   <td>Schmiede:</td>
   <td><input name="smith">
  </tr>
  <tr>
   <td>Versammlungsplatz:</td>
   <td><input name="place">
  </tr>
  <tr>
   <td>Marktplatz:</td>
   <td><input name="market">
  </tr>
  <tr>
   <td>Holzf&auml;ller:</td>
   <td><input name="wood">
  </tr>
  <tr>
   <td>Lehmgrube:</td>
   <td><input name="stone">
  </tr>
  <tr>
   <td>Eisenmiene:</td>
   <td><input name="iron">
  </tr>
  <tr>
   <td>Speicher:</td>
   <td><input name="storage">
  </tr>
  <tr>
   <td>Bauernhof:</td>
   <td><input name="farm">
  </tr>
  <tr>
   <td>Versteck:</td>
   <td><input name="hide">
  </tr>
  <tr>
   <td>Wall:</td>
   <td><input name="wall">
  </tr>
  <tr>
   <td colspan="2"><small><a href="javascript: max_build()">Alles Maximal</a></small></td>
  </tr>
  <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <th colspan="2">Einheiten</th>
  </tr>
  <tr>
   <td>Speertr&auml;ger:</td>
   <td><input name="spear"></td>
  </tr>
  <tr>
   <td>Schwertk&auml;mpfer:</td>
   <td><input name="sword"></td>
  </tr>
  <tr>
   <td>Axtk&auml;mpfer:</td>
   <td><input name="axe"></td>
  </tr>
  <tr>
   <td>Sp&auml;her:</td>
   <td><input name="spy"></td>
  </tr>
  <tr>
   <td>Leichte Kavalerie:</td>
   <td><input name="light"></td>
  </tr>
  <tr>
   <td>Schwere Kavalerie:</td>
   <td><input name="heavy"></td>
  </tr>
  <tr>
   <td>Ramme:</td>
   <td><input name="ram"></td>
  </tr>
  <tr>
   <td>Katapulte:</td>
   <td><input name="catapult"></td>
  </tr>
  <tr>
   <td>Adelsgeschlecht:</td>
   <td><input name="snob1"></td>
  </tr>
  <tr>
   <th colspan="2">Einheitenforschung</th>
  </tr>
  <tr>
   <td>Speertr&auml;ger:</td>
   <td><input name="tech_spear"></td>
  </tr>
  <tr>
   <td>Schwertk&auml;mpfer:</td>
   <td><input name="tech_sword"></td>
  </tr>
  <tr>
   <td>Axtk&auml;mpfer:</td>
   <td><input name="tech_axe"></td>
  </tr>
  <tr>
   <td>Leichte Kavalerie:</td>
   <td><input name="tech_light"></td>
  </tr>
  <tr>
   <td>Schwere Kavalerie:</td>
   <td><input name="tech_heavy"></td>
  </tr>
  <tr>
   <td>Ramme:</td>
   <td><input name="tech_ram"></td>
  </tr>
  <tr>
   <td>Katapulte:</td>
   <td><input name="tech_catapult"></td>
  </tr>
  <tr>
   <td colspan="2"><small><a href="javascript: max_tech()">Alles Maximal</a></small></td>
  </tr>
  <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <th colspan="2">Sonstiges</th>
  </tr>
  <tr>
   <td>Dorfname:</td>
   <td><input name="name"></td>
  </tr>
  <tr>
   <td>X-Koordinate:</td>
   <td><input name="x"></td>
  </tr>
  <tr>
   <td>Y-Koordinate:</td>
   <td><input name="y"></td>
  </tr>
  <tr>
   <td>Zustimmung:</td>
   <td><input name="agree"></td>
  </tr>
  <tr>
   <td>Userid (Dem geh&ouml;rt das Dorf dann):</td>
   <td><input name="userid"></td>
  </tr>
  <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Holz:</td>
   <td><input name="wood1"></td>
  </tr>
  <tr>
   <td>Lehm:</td>
   <td><input name="stone1"></td>
  </tr>
  <tr>
   <td>Eisen:</td>
   <td><input name="iron1"></td>
  </tr>
  <tr>
   <td>Benutzte Bauern:</td>
   <td><input name="farm1"></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" value="Cheat ;)"></td>
  </tr>
 </table>
</form>
<?php elseif ($_GET['action'] == 'fertig'): ?>
Fertig, du Cheater ;]<br>
<a href="?screen=cheating">Zur&uuml;ck</a>
<?php endif; ?>