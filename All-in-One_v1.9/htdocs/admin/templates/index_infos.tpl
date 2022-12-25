<h2 align="center">Alle Informationen zu deiner DSLAN!</h2><br>
<h4>Alle D&ouml;rfer:</h4>
<table class="vis">
 <tr>
  <th>&nbsp;&nbsp;DorfID&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;X|Y&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Dorfname&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Punkte&nbsp;&nbsp;</th>
 </tr>
{foreach from=$villInfo item=village}
<td>
{$village.id}
</td>
<td>
&nbsp;&nbsp;{$village.x}|{$village.y}&nbsp;&nbsp;
</td>
<td>
&nbsp;&nbsp;{$village.name}&nbsp;&nbsp;
</td>
<td>
{$village.points}
</td>
</tr>
<tr>
{/foreach}
</table><br><br>

<h4>Alle Spieler und Spielerinfos:</h4>
<table class="vis">
 <tr>
  <th>&nbsp;&nbsp;UserID&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Rang&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Username&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;StammID&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;D&ouml;rfer&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Punkte&nbsp;&nbsp;</th>
 </tr>
{foreach from=$userInfo item=user}
<td>
{$user.id}
</td>
<td>
{$user.rang}
</td>
<td>
{$user.username}
</td>
<td>
{$user.ally}
</td>
<td>
{$user.villages}
</td>
<td>
{$user.points}
</td>
</tr>
<tr>
{/foreach}
</table><br><br>
<h4>Alle Stämme:</h4>
<table class="vis">
 <tr>
  <th>&nbsp;&nbsp;Rang&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;StammID&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Stammname&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Kurzname&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Mitgliederanzahl&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Dorfanzahl&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Punkte&nbsp;&nbsp;</th>
 </tr>
{foreach from=$allyInfo item=stamm}
<td>
{$stamm.rank}
</td>
<td>
{$stamm.id}
</td>
<td>
{$stamm.name}
</td>
<td>
{$stamm.short}
</td>
<td>
{$stamm.members}
</td>
<td>
{$stamm.villages}
</td>
<td>
{$stamm.points}
</td>
</tr>
<tr>
{/foreach}
</table><br><br>

<h4>Alle Einheiten, die in den einzelnen D&ouml;rfer vorhanden sind:</h4>
<table class="vis">
 <tr>
  <th>&nbsp;&nbsp;Speerträger&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Schwertkämpfer&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Axtkämpfer&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Sp&auml;her&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Leichte Kavallerie&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Schwere Kavallerie&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Rambock&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Katapult&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Adelsgeschlecht&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;DorfID&nbsp;&nbsp;</th>
 </tr>
{foreach from=$unitInfo item=trupp}
<td>
{$trupp.unit_spear}
</td>
<td>
{$trupp.unit_sword}
</td>
<td>
{$trupp.unit_axe}
</td>
<td>
{$trupp.unit_spy}
</td>
<td>
{$trupp.unit_light}
</td>
<td>
{$trupp.unit_heavy}
</td>
<td>
{$trupp.unit_ram}
</td>
<td>
{$trupp.unit_catapult}
</td>
<td>
{$trupp.unit_snob}
</td>
<td>
{$trupp.villages_from_id}
</tr>
<tr>
{/foreach}
</table><br><br>

<h4>Techlevel der Einheiten:</h4>
<table class="vis">
 <tr>
  <th>&nbsp;&nbsp;DorfID</th>
  <th>&nbsp;&nbsp;Speertr&auml;ger&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Schwertk&auml;mpfer&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Axtk&auml;mpfer&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Sp&auml;her&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Leichte Kavallerie&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Schwere Kavallerie&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Rammb&ouml;cke&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Katapulte&nbsp;&nbsp;</th>
 </tr>
{foreach from=$villInfo item=vill}
<td>
{$vill.id}
</td>
<td>
{$vill.unit_spear_tec_level}
</td>
<td>
{$vill.unit_sword_tec_level}
</td>
<td>
{$vill.unit_axe_tec_level}
</td>
<td>
{$vill.unit_spy_tec_level}
</td>
<td>
{$vill.unit_light_tec_level}
</td>
<td>
{$vill.unit_heavy_tec_level}
</td>
<td>
{$vill.unit_ram_tec_level}
</td>
<td>
{$vill.unit_catapult_tec_level}
</td>
</tr>
<tr>
{/foreach}
</table><br>

<h4>Gespeicherte Runden:</h4>
<table class="vis">
 <tr>
  <th>&nbsp;&nbsp;Name&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Geschwindigkeit&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Einheitengeschwindigkeit&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Moral&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Gestartet&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Beendet&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;Beschreibung&nbsp;&nbsp;</th>
 <tr>
{foreach from=$saveInfo item=round}
<td>
{$round.name}
</td>
<td>
{$round.speed}
</td>
<td>
{$round.speed_units}
</td>
<td>
{$round.moral}
</td>
<td>
&nbsp;&nbsp;{$round.start}&nbsp;&nbsp;
</td>
<td>
&nbsp;&nbsp;{$round.end}&nbsp;&nbsp;
</td>
<td>
&nbsp;&nbsp;{$round.description}&nbsp;
</td>
</tr>
<tr>
{/foreach}
</table><br>

<p align="right">Alle Informationen v0.2 &copy; by <a href="http://dslan.gfx-dose.de/user-6529.html">Yannici</a></p>