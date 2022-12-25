<table width="100%">
	<tr>
		<th width="60">{$lang->grab("report_view_supportAttack", "supported_player")}:</th><th>
			{if $report.to_username==""}
    {$lang->grab("report_view_supportAttack", "left_village")}
			{else}
				<a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$report.to_user}">{$report.to_username}</a>
			{/if}
		</th>
	</tr>
	<tr>
		<td>{$lang->grab("report_view_supportAttack", "village")}:</td>
		<td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$report.to_village}">{$report.to_villagename} ({$report.to_x}|{$report.to_y})</a> <a href="game.php?village={$village.id}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=map&x={$report.to_x}&y={$report.from_y}"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$report.to_x}&y={$report.to_y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </th></tr>
<tr><td>{$lang->grab("report_view_supportAttack", "origin")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$report.from_village}">{$report.from_villagename} ({$report.from_x}|{$report.from_y})</a> <a href="game.php?village={$report.from_village}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$report.from_village}&screen=map&x={$report.from_x}&y={$report.from_y}"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$report.from_x}&y={$report.from_y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </th></tr>
</table><br />

<h4>{$lang->grab("report_view_supportAttack", "units")}:</h4>
<table class="vis">
	<tr>
		<th></th>
		{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
			<th width="35"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
		{/foreach}
	</tr>
	<tr><td>{$lang->grab("report_view_supportAttack", "amount")}:</td>{foreach from=$report_units.units_a item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>

	<tr><td>{$lang->grab("report_view_supportAttack", "wastages")}:</td>{foreach from=$report_units.units_b item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>
</table>