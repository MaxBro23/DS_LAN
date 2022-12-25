<table class="vis">
<tr><th>{$lang->get("command")}</th><th>{$lang->get("home")}</th><th>{$lang->get("arrival")}</th>
		{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
			<th width="30"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
		{/foreach}
</tr>
		{foreach from=$my_movements item=array}
			<tr class="row_a">
				<td><a href="game.php?village={$village.id}&amp;screen=info_command&amp;id={$array.id}&amp;type=own">{$array.message}</a></td>
				<td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$array.homevillageid}">{$array.homevillagename}</a> <a href="game.php?village={$array.homevillageid}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a></td>
				<td>{$lang->get("in")} <span class="timer">{$array.arrival_in|format_time}</span></td>
				{foreach from=$array.units item=num}
					{if $num==0}
						<td class="hidden">0</td>
					{else}
						<td>{$num}</td>
					{/if}
				{/foreach}
			</tr>
		{/foreach}	
</table>