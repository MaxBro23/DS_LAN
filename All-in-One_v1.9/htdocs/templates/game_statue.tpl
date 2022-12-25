{if $lang == 'de'}

<table>
<tr>
<td>
<img src="/graphic/big_buildings/statue1.png" title="Statue" alt="" />
</td>
<td>
<h2>Statue (Stufe {$level})</h2>
An der Statue huldigen die Dorfbewohner deinem Paladin. Sollte dein Paladin einmal fallen, kannst du hier einen deiner K&auml;mpfer zum neuen Paladin ernennen.</td>
	</tr>
</table>
<br />

{if $invalid_hkey}<div class='error'><b>hkey ungültig.</b></div>{/if}
{if $pdeployon}<div class='error'><b>Der Paladin ist unterwegs!</b></div>{/if}
{if $pala_edit}<div class='error'><b>Der Name muss zwischen 1 und 154 Zeichen haben!</b></div>{/if}

{if $recruit}
Fertigstellung des Paladins: <b>{$time_finish}</b><br />
{/if}
<table class="vis">
<tr>
<th width="150">Paladin</th>
<th colspan="4" width="120">Bedarf</th>
<th width="130">Zeit (hh:mm:ss)</th>
<th>Aktion</th>
</tr>
<tr>
<td><a href="javascript:popup('popup_unit.php?unit=unit_knight', 520, 520)"> <img src="graphic/unit/unit_knight.png" alt="" />{$name}</a></td>
<td><img src="graphic/holz.png" title="Holz" alt="" />{$wood}</td>
<td><img src="graphic/lehm.png" title="Lehm" alt="" /> {$stone}</td>
<td><img src="graphic/eisen.png" title="Eisen" alt="" /> {$iron}</td>
<td><img src="graphic/face.png" title="Arbeiter" alt="" /> {$pop}</td>
<td>{$time}</td>

{if ($wood2 > $r_wood) OR ($stone2 > $r_stone) OR ($iron2 > $r_iron)}
<td class="inactive">Nicht gen&uuml;gend Rohstoffe vorhanden.</td>
{elseif $pop2 > $rtsfarm}
<td class="inactive">Zu wenig Bauernh&ouml;fe.</td>
{elseif $paladin}
<td class="inactive">Jeder Spieler kann nur einen Paladin haven.</td>
{else}
<td><a href="game.php?village={$villageid}&amp;screen=statue&amp;action=train&amp;h={$hkey}">Paladin ernennen</a></td>
{/if}
</tr>
</table>
{if ($paladin == 1) AND ($pala_wo != $villageid)}
<br><a href="game.php?village={$villageid}&amp;screen=statue&amp;action=deploy&amp;h={$hkey}">&raquo; Paladin hierher umstationieren</a>
{/if}
<br />
<form action="game.php?village={$villageid}&amp;screen=statue&amp;action=rename&amp;h={$hkey}" method="POST">
<b>Name:</b> <input type="text" name="palaname" value="{$name}" /> 
<input type="submit" value="Umbenennen">
</form>

{else}

<table>
<tr>
<td>
<img src="/graphic/big_buildings/statue1.png" title="Statue" alt="" />
</td>
<td>
<h2>Statue (Level {$level})</h2>
At the statue the villagers render homage to your paladin. If your paladin dies you can appoint one of your fighters to become the new paladin.</td>
	</tr>
</table>
<br />

{if $invalid_hkey}<div class='error'><b>Invalid HKEY.</b></div>{/if}
{if $pdeployon}<div class='error'><b>The paladin is on his way!</b></div>{/if}
{if $pala_edit}<div class='error'><b>The name must be at least 1 char, and maximum 154!</b></div>{/if}

{if $recruit}
The palladin will be done at: <b>{$time_finish}</b><br />
{/if}
<table class="vis">
<tr>
<th width="150">Paladin</th>
<th colspan="4" width="120">Requirements</th>
<th width="130">Duration (hh:mm:ss)</th>
<th>Action</th>
</tr>
<tr>
<td><a href="javascript:popup('popup_unit.php?unit=unit_knight', 520, 520)"> <img src="graphic/unit/unit_knight.png" alt="" />{$name}</a></td>
<td><img src="graphic/holz.png" title="Holz" alt="" />{$wood}</td>
<td><img src="graphic/lehm.png" title="Lehm" alt="" /> {$stone}</td>
<td><img src="graphic/eisen.png" title="Eisen" alt="" /> {$iron}</td>
<td><img src="graphic/face.png" title="Arbeiter" alt="" /> {$pop}</td>
<td>{$time}</td>

{if ($wood2 > $r_wood) OR ($stone2 > $r_stone) OR ($iron2 > $r_iron)}
<td class="inactive">You don't have enough resources.</td>
{elseif $pop2 > $rtsfarm}
<td class="inactive">Too few free farm places.</td>
{elseif $paladin}
<td class="inactive">Every player can only have one Paladin.</td>
{else}
<td><a href="game.php?village={$villageid}&amp;screen=statue&amp;action=train&amp;h={$hkey}">Train a Paladin</a></td>
{/if}
</tr>
</table>
{if ($paladin == 1) AND ($pala_wo != $villageid)}
<br><a href="game.php?village={$villageid}&amp;screen=statue&amp;action=deploy&amp;h={$hkey}">&raquo; Move the Paladin here</a>
{/if}
<br />
<form action="game.php?village={$villageid}&amp;screen=statue&amp;action=rename&amp;h={$hkey}" method="POST">
<b>Name:</b> <input type="text" name="palaname" value="{$name}" /> 
<input type="submit" value="Rename">
</form>
{/if}