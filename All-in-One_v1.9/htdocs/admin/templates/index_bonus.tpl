<h1>Bonusd&ouml;rfer</h1>
<h3>Einstellungen</h3>
<form action="index.php?screen=bonus&do=set" method="POST">
<input size="4" type="text" name="dealers" value="{$bonus_dealers}" />% mehr Speicherkapazit&auml;t und H&auml;ndler<br />
<input size="4" type="text" name="farm" value="{$bonus_farm}" />% mehr Bev&ouml;lkerung<br />
<input size="4" type="text" name="stable" value="{$bonus_stable}" />% schnellere Produktion im Stall<br />
<input size="4" type="text" name="barracks" value="{$bonus_barracks}" />% schnellere Produktion in der Kaserne<br />
<input size="4" type="text" name="garage" value="{$bonus_garage}" />% schnellere Produktion in der Werkstatt<br />
<input size="4" type="text" name="res" value="{$bonus_res}" />% mehr Rohstoffproduktion<br />
<a href="javascript:insert4();">St&auml;mme Version 4</a><br />
<a href="javascript:insert5();">St&auml;mme Version 5</a><br />
<input type="submit" value="&Auml;ndern" />
</form>
<br /><hr />
<h3>&Uuml;bersicht</h3>
<form action="index.php" method="GET">
<input type="hidden" name="screen" value="bonus" />
<input type="hidden" name="sort" value="{$sort}" />
<input type="hidden" name="mode" value="{$mode}" />
Zeige <input type="test" size="4" name="max" value="{$max}" /> Zeilen ab Zeile <input type="text" size="4" name="start" value="{$start}" /> <input type="submit" value="Los!" /></form>
<form action="index.php?screen=bonus&do=update" method="POST">
<table class="vis" width="100%">
	<tr>
		<th>#</th>
		<th>{if $sort=='id'}<u>{/if}<a href="index.php?screen=bonus&sort=id&mode={if $mode=='asc'}desc{else}asc{/if}">ID</a>{if $sort=='id'}</u>{/if}</th>
		<th>{if $sort=='userid'}<u>{/if}<a href="index.php?screen=bonus&sort=userid&mode={if $mode=='asc'}desc{else}asc{/if}">Besitzer</a>{if $sort=='userid'}</u>{/if}</th>
		<th>{if $sort=='name'}<u>{/if}<a href="index.php?screen=bonus&sort=name&mode={if $mode=='asc'}desc{else}asc{/if}">Dorfname</a>{if $sort=='name'}</u>{/if}</th>
		<th>{if $sort=='bonus'}<u>{/if}<a href="index.php?screen=bonus&sort=bonus&mode={if $mode=='asc'}desc{else}asc{/if}">Bonusdorf</a>{if $sort=='bonus'}</u>{/if}</th>
	</tr>
	{foreach from=$doerfer item=village}
	<tr>
		<td><input type="checkbox" name="dorf[]" value="{$village.id}" /></td>
		<td>{$village.id}</td>
		<td>{$village.userid} ({$village.username})</td>
		<td>{$village.name}</td>
		<td>
{if $village.bonus > "0"}
Ja
{if $village.bonus == "1"}
(Speicher & H&auml;ndler)
{elseif $village.bonus == "2"}
(Bev&ouml;lkerung)
{elseif $village.bonus == "3"}
(Stall)
{elseif $village.bonus == "4"}
(Kaserne)
{elseif $village.bonus == "5"}
(Werkstatt)
{elseif $village.bonus == "6"}
(Ressis)
{/if}
{else}
Nein
{/if}
		</td>
	</tr>
	{/foreach}
<tr><th colspan="100%"><input name="all" type="checkbox" onclick="selectAll(this.form, this.checked)" /> alle ausw&auml;hlen </th></tr>
</table>
Ausgew&auml;hlte Boni <select name="todo">
<option value="0">l&ouml;schen</option>
<option value="1" selected="selected">hinzuf&uuml;gen</option>
</select> (falls hinzuf&uuml;gen, Typ:
<select name="what">
<option value="0">Zuf&auml;llig</option>
<option value="1">mehr Speicherkapazit&auml;t und H&auml;ndler</option>
<option value="2">mehr Bev&ouml;lkerung</option>
<option value="3">schnellere Produktion im Stall</option>
<option value="4">schnellere Produktion in der Kaserne</option>
<option value="5">schnellere Produktion in der Werkstatt</option>
<option value="6">mehr Rohstoffproduktion</option>
</select>) 
<input type="submit" value="Los!" />
</form>
<br /><hr />
<h3>Bonusd&ouml;rfer hinzuf&uuml;gen</h3>
<form action="index.php?screen=bonus&do=create" method="POST">
Anzahl: <input type="text" name="amount" size="3" maxlength="4" />
Bonus: 
<select name="what">
<option value="0">Zuf&auml;llig</option>
<option value="1">mehr Speicherkapazit&auml;t und H&auml;ndler</option>
<option value="2">mehr Bev&ouml;lkerung</option>
<option value="3">schnellere Produktion im Stall</option>
<option value="4">schnellere Produktion in der Kaserne</option>
<option value="5">schnellere Produktion in der Werkstatt</option>
<option value="6">mehr Rohstoffproduktion</option>
</select>
<input type="submit" value="Erstellen">
</form><br />
<hr />
<h3>Boni hinzuf&uuml;gen</h3>
<b>{$prozent1}%</b> ({$stk1} St&uuml;ck) aller D&ouml;rfer sind verlassen.<br />
<b>{$prozent2}%</b> ({$stk2} St&uuml;ck) aller D&ouml;rfer sind Bonusd&ouml;rfer.<br />
<b>{$prozent3}%</b> ({$stk3} St&uuml;ck) aller verlassenen D&ouml;rfer sind Bonusd&ouml;rfer.<br />
<b>{$prozent4}%</b> ({$stk4} St&uuml;ck) aller Bonusd&ouml;rfer sind verlassen.<br /><br />
<form action="index.php?screen=bonus&do=change" method="POST">
Zu <input type="text" name="amount" size="3" maxlength="4" /> 
<select name="act1">
<option value="0">St&uuml;ck</option>
<option value="1">Prozent</option>
</select>
<select name="act2">
<option value="0">aller</option>
<option value="1">aller verlassenen</option>
<option value="2">aller normalen</option>
<option value="3">aller normalen verlassenen</option>
</select>
D&ouml;rfern den Bonus
<select name="what">
<option value="0">Zuf&auml;llig</option>
<option value="1">mehr Speicherkapazit&auml;t und H&auml;ndler</option>
<option value="2">mehr Bev&ouml;lkerung</option>
<option value="3">schnellere Produktion im Stall</option>
<option value="4">schnellere Produktion in der Kaserne</option>
<option value="5">schnellere Produktion in der Werkstatt</option>
<option value="6">mehr Rohstoffproduktion</option>
</select> <input type="submit" value="hinzuf&uuml;gen">
</form><br /><u>Durch negative Angaben werden Boni gel&ouml;scht.</u><br /><br /><hr />
<span style="font-size: 10px;">&copy; by Molt</span>