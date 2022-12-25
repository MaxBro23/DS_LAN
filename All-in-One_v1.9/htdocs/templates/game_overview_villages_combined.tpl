<table class="vis">
<tr>
	<th>{$lang->get("village")}</th>
	<th><img src="graphic/overview/main.png" title="Hauptgebäude" alt="" /></th>
	<th><img src="graphic/overview/barracks.png" title="Kaserne" alt="" /></th>
	<th><img src="graphic/overview/stable.png" title="Stall" alt="" /></th>
	<th><img src="graphic/overview/garage.png" title="Werkstatt" alt="" /></th>
	<th><img src="graphic/overview/smith.png" title="Schmiede" alt="" /></th>
	<th><img src="graphic/overview/farm.png" title="Bauernhof" alt="" /></th>
	
	{foreach from=$unit item=name key=dbname}
		<th width="35"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
	{/foreach}
	
	<th><img src="graphic/overview/trader.png" title="Händler" alt="" /></th>

</tr>

{foreach from=$villages item=arr key=arr_id}
	<tr>
		<td><a href="game.php?village={$arr_id}&screen=overview">{$villages.$arr_id.name} ({$villages.$arr_id.x}|{$villages.$arr_id.y})</a> <a href="game.php?village={$arr_id}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$arr_id}&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$villages.$arr_id.x}&y={$villages.$arr_id.y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </td>

		{if isset($villages.$arr_id.first_build.buildname)}
			<td><a href="game.php?village={$arr_id}&amp;screen=main"><img src="graphic/overview/prod_running.png" title="{$villages.$arr_id.first_build.buildname}: {$villages.$arr_id.first_build.end_time}" alt="" /></a></td>
		{else}
		    <td><a href="game.php?village={$arr_id}&amp;screen=main"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		{/if}
		
		{if $villages.$arr_id.barracks==0}
        	<td><a href="game.php?village={$arr_id}&amp;screen=barracks"><img src="graphic/overview/prod_impossible.png" title="Produktion nicht möglich" alt="" /></a></td>
		{elseif !empty($villages.$arr_id.barracks_prod.unit)}
			<td><a href="game.php?village={$arr_id}&amp;screen=barracks"><img src="graphic/overview/prod_running.png" title="{$villages.$arr_id.barracks_prod.unit}: {$villages.$arr_id.barracks_prod.time}" alt="" /></a></td>
		{else}
        	<td><a href="game.php?village={$arr_id}&amp;screen=barracks"><img src="graphic/overview/prod_avail.png" title="Keine Rekrutierung" alt="" /></a></td>
		{/if}
		
		{if $villages.$arr_id.stable==0}
        	<td><a href="game.php?village={$arr_id}&amp;screen=stable"><img src="graphic/overview/prod_impossible.png" title="Produktion nicht möglich" alt="" /></a></td>
		{elseif !empty($villages.$arr_id.stable_prod.unit)}
			<td><a href="game.php?village={$arr_id}&amp;screen=stable"><img src="graphic/overview/prod_running.png" title="{$villages.$arr_id.stable_prod.unit}: {$villages.$arr_id.stable_prod.time}" alt="" /></a></td>
		{else}
		    <td><a href="game.php?village={$arr_id}&amp;screen=stable"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		{/if}

		{if $villages.$arr_id.garage==0}
			<td><a href="game.php?village={$arr_id}&amp;screen=garage"><img src="graphic/overview/prod_impossible.png" title="Produktion nicht möglich" alt="" /></a></td>
		{elseif !empty($villages.$arr_id.garage_prod.unit)}
			<td><a href="game.php?village={$arr_id}&amp;screen=garage"><img src="graphic/overview/prod_running.png" title="{$villages.$arr_id.garage_prod.unit}: {$villages.$arr_id.garage_prod.time}" alt="" /></a></td>
		{else}
			<td><a href="game.php?village={$arr_id}&amp;screen=garage"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		{/if}
		
		{if $villages.$arr_id.smith==0}
			<td><a href="game.php?village={$arr_id}&amp;screen=smith"><img src="graphic/dots/yellow.png" title="Schmiede nicht vorhanden" alt="" /></a></td>
		{elseif !empty($villages.$arr_id.first_tec.tecname)}
			<td><a href="game.php?village={$arr_id}&amp;screen=smith"><img src="graphic/overview/prod_running.png" title="{$villages.$arr_id.first_tec.tecname}: {$villages.$arr_id.first_tec.end_time}" alt="" /></a></td>
		{else}
			<td><a href="game.php?village={$arr_id}&amp;screen=smith"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		{/if}

		<td><a href="game.php?village={$arr_id}&amp;screen=farm">{$villages.$arr_id.max_farm-$villages.$arr_id.r_bh} ({$villages.$arr_id.farm})</a></td>
		
		{foreach from=$unit item=name key=dbname}
			{if $villages.$arr_id.$dbname==0}
					<td class="hidden">{$villages.$arr_id.$dbname}</td>
			{else}
					<td>{$villages.$arr_id.$dbname}</td>
			{/if}
		{/foreach}
		
		<td><a href="game.php?village={$arr_id}&amp;screen=market">{$villages.$arr_id.dealers.in_village}/{$villages.$arr_id.dealers.max_dealers}</a></td>


	
	</tr>
{/foreach}

</table>