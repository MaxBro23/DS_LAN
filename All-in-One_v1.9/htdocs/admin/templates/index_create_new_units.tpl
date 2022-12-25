<h2>Neue Einheiten erstellen</h2>
Hier kann man neue Einheiten erstellen<br>
Made by Vorcers (alias Mighty/spam4ms)<br>
Version 1.1d<br><br>

Das Programm ben&ouml;tigt schreibzugriff auf folgende Dateien<br><br>
include/configs/units.php<br>
include/configs/techs.php<br>
und folgende Ordner:<br>
graphic/unit/<br><br>

Klicken sie <a href="http://localhost/admin/actions/create_new_units.php?action=install">Hier</a> um diesen Schreibzugriff Anzulegen.<br>


<form name="form1" method="post" enctype="multipart/form-data" action="actions/create_new_units.php?action=edit">
<table>
<tr>
<td algin=left valgin=top>

<table class="main">
<br>
<h3>Grundlegende Einheiten Optionen</h1>
<tr>
	<td>kurzen Namen der Einheit</td>
	<td><input name="unit_name" type="text" value="axe"></td>
</tr>
<tr>
	<td>Normaler Name</td>
	<td><input name="unit_descr" type="text" value="Axtk&auml;mpfer"></td>
</tr>
<tr>
	<td><img src="../graphic/holz.png"> Holz</td>
	<td><input name="unit_wood" type="text" value="60"></td>
</tr>
<tr>
	<td><img src="../graphic/lehm.png"> Lehm</td>
	<td><input name="unit_stone" type="text" value="30"></td>
</tr>
<tr>
	<td><img src="../graphic/eisen.png"> Eisen</td>
	<td><input name="unit_iron" type="text" value="40"></td>
</tr>
<tr>
	<td><img src="../graphic/face.png"> Bauernhof</td>
	<td><input name="unit_bh" type="text" value="1"></td>
</tr>
<tr>
	<td>Bauzeit<br>(Sekunden, bei Speed von 1)</td>
	<td><input name="unit_time" type="text" value="1250"></td>
</tr>
<tr>
	<td><img src="../graphic/unit/att.png"> Angriffsst&auml;rke</td>
	<td><input name="unit_att" type="text" value="40"></td>
</tr>
<tr>
	<td><img src="../graphic/unit/def.png"> Verteidigung allgemein</td>
	<td><input name="unit_def" type="text" value="10"></td>
</tr>
<tr>
	<td><img src="../graphic/unit/def_cav.png"> Verteidigung Kavallerie</td>
	<td><input name="unit_defcav" type="text" value="5"></td>
</tr>
<tr>
	<td><img src="../graphic/unit/def_archer.png"> Verteidigung Bogensch&uuml;tzen</td>
	<td><input name="unit_defarcher" type="text" value="10"></td>
</tr>
<tr>
	<td><img src="../graphic/unit/speed.png"> Geschwindigkeit<br>(Sekunden, bei Speed von 1)</td>
	<td><input name="unit_speed" type="text" value="720"></td><tr>
</tr>
</tr>
<tr>
	<td><img src="../graphic/res.png"> Beute</td>
	<td><input name="unit_booty" type="text" value="10"></td>
</tr>
<tr>
	<td COLSPAN=2>
		<strong>Vorraussetzungen</strong>
		<table>
		<tr><td><img src="../graphic/buildings/main.png"> Hauptgeb&auml;ude:</td><td><input name="unit_needed_main" type="text" size="1" value="0"></td></tr>
		<tr><td><img src="../graphic/buildings/barracks.png"> Kaserne:</td><td><input name="unit_needed_barracks" type="text" size="1" value="0"></td></tr>
		<tr><td><img src="../graphic/buildings/stable.png"> Stall:</td><td><input name="unit_needed_stable" type="text" size="1" value="0"></td></tr>
		<tr><td><img src="../graphic/buildings/garage.png"> Werkstatt:</td><td><input name="unit_needed_garage" type="text" size="1" value="0"></td></tr>
		<tr><td><img src="../graphic/buildings/smith.png"> Schmiede:</td><td><input name="unit_needed_smith" type="text" size="1" value="2"></td></tr>
		</table>
	</td>
</tr>
<tr>
	<td>Wird erstellt in:<br>(Achtung! "Adelshof" f&uuml;hrt zu Fehlern!)</td>
	<td>
	<select name="unit_recruit_in" size="1">
		<option value="0" selected>Kaserne</option>
		<option value="1">Stall</option>
		<option value="2">Werkstatt</option>
		<option value="3">Adelshof</option>
	</select>
	</td>
</tr>
<tr>
	<td>Spezielles: (Noch ohne Doku)</td>
	<td><input name="unit_specials" type="text" value=""></td>
</tr>
<tr>
	<td>Art:</td>
	<td>
	<select name="unit_group" size="1">
		<option value="0" selected>Infantrie</option>
		<option value="1">Kavalarie</option>
		<option value="2">Belagerungswaffen</option>
	</select>
	</td>
</tr>
</table>

</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<TD ALIGN=LEFT VALIGN=TOP>
<br>
<h3>Forschungs Optionen (Schmiede)</h3>
<table class="main">
<tr>
	<td>Name<br>(Erscheint in der Schmiede<br>als "&Uuml;berschrift"):</td>
	<td><input name="unit_tech_name" type="text" value="Axt"></td>
</tr>
<tr>
	<td><img src="../graphic/holz.png"> Holz</td>
	<td><input name="unit_tech_wood" type="text" value="280"></td>
</tr>
<tr>
	<td><img src="../graphic/lehm.png"> Lehm</td>
	<td><input name="unit_tech_stone" type="text" value="336"></td>
</tr>
<tr>
	<td><img src="../graphic/eisen.png"> Eisen</td>
	<td><input name="unit_tech_iron" type="text" value="228"></td>
</tr>
<tr>
	<td>Forschungszeit<br>(Sekunden, bei Speed von 1)</td>
	<td><input name="unit_tech_time" type="text" value="3085"></td>
</tr>
<tr>
	<td>Max. Erforschungslevel:</td>
	<td><input name="unit_tech_maxstage" type="text" value="1"></td>
</tr>
</table>
<br><br>
Hier k&ouml;nnen sie das große <strong>PNG</strong> Bild (am besten 60x60) mit Anh&auml;ngen,<br>
welches dann z.B. in den Berichten mit erscheint.<br>
<input name="userfile" TYPE="file"><br>
Hier k&ouml;nnen sie das kleine <strong>PNG</strong> Bild (am besten 16x16) mit Anh&auml;ngen,<br>
welches dann z.B. in den Berichten mit erscheint.<br>
<input name="userfile2" TYPE="file"><br>
Als letztes k&ouml;nnen sie hier noch eine kleine Beschreibung eingeben.<br>
<input type="text" name="unit_extdescr" size="80"><br><br>
<input name="unit_add" type="submit" value="Einheit Erstellen">
</td>
</tr>

</table>
</form>