{if !empty($error)}
	{$error}
{else}
	<h2>{$mov.message}</h2>
	{if $type=='own'}
		<table class="vis" width="300">
		<tr>
			<th colspan="2">{$lang->get("command")}</th>
		</tr>
		<tr><td>{$lang->get("village")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$mov.to_village}">{$mov.to_villagename} ({$mov.to_x}|{$mov.to_y})</a></td></tr>
		<tr><td>{$lang->get("player")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$mov.to_userid}">{$mov.to_username}</a></td></tr>
		<tr><td>{$lang->get("duration")}:</td><td>{$mov.duration}</td></tr>
		<tr><td>{$lang->get("arrival")}:</td><td>{$mov.arrival}</td></tr>
		<tr><td>{$lang->get("arrival_time")}:</td><td><span class="timer">{$mov.arrival_in}</span></td></tr>
		<tr><td>{$lang->get("from")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$mov.from_village}">{$mov.from_villagename} ({$mov.from_x}|{$mov.from_y})</a></td></tr>
		
			
		<tr><td colspan="2"><a href="game.php?village={$village.id}&amp;&amp;screen=place">&raquo; {$lang->get("place")}</a></td></tr>
		{if $mov.cancel}
			<tr><td colspan="2"><a href="game.php?village={$village.id}&screen=place&action=cancel&id={$mov.id}&h={$hkey}">&raquo; {$lang->get("cancel")}</a></td></tr>
		{/if}	
			
		</table><br />
		
		
		<table class="vis">
		<tr>
			{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
				<th width="50"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
			{/foreach}
		</tr>
		<tr>
			{foreach from=$mov.units item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}
		</tr>
		</table>
		{if $mov.wood!=0 || $mov.stone!=0 || $mov.iron!=0}
			<table class="vis"><tr>
			<td>Beute:</td><td>{if $mov.wood>0}<img src="graphic/holz.png" title="Holz" alt="" />{$mov.wood} {/if}{if $mov.stone>0}<img src="graphic/lehm.png" title="Lehm" alt="" />{$mov.stone} {/if}{if $mov.iron>0}<img src="graphic/eisen.png" title="Eisen" alt="" />{$mov.iron} {/if}</td>
			</tr></table>
		{/if}
	{else}
		<table class="vis" width="300">
		<tr><th colspan="2">Befehl</th></tr>
		<tr><td>{$lang->get("from")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$mov.from_village}">{$mov.from_villagename} ({$mov.from_x}|{$mov.from_y})</a></td></tr>
		<tr><td>{$lang->get("player")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$mov.from_userid}">{$mov.from_username}</a></td></tr>
		<tr><td>{$lang->get("arrival")}:</td><td>{$mov.arrival}</td></tr>
		<tr><td>{$lang->get("arrival_time")}:</td><td><span class="timer">{$mov.arrival_in}</span></td></tr>
		</table>	
	{/if}
{/if}