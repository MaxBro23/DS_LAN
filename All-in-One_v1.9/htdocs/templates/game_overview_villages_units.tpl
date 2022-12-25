<table class="vis">
	<tr>
		<th>{$lang->get("village")}</th>
		<th></th>
		
		{foreach from=$unit item=name key=dbname}
			<th width="35"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
		{/foreach}
	
		<th>{$lang->get("action")}</th>
	</tr>
	
	{foreach from=$villages item=id key=arr_id}
		<tr>
			<td rowspan="3" valign="top">
				<a href="game.php?village={$arr_id}&screen=overview">{$villages.$arr_id.name} ({$villages.$arr_id.x}|{$villages.$arr_id.y})</a><br> <a href="game.php?village={$arr_id}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$arr_id}&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$villages.$arr_id.x}&y={$villages.$arr_id.y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> 
			</td>
			<td>{$lang->get("own")}</td>
			
			{foreach from=$unit item=name key=dbname}
				{if $own_units.$arr_id.$dbname==0}
						<td class="hidden">{$own_units.$arr_id.$dbname}</td>
				{else}
						<td>{$own_units.$arr_id.$dbname}</td>
				{/if}
			{/foreach}
			
			<td><a href="game.php?village={$village.id}&amp;screen=place&amp;">{$lang->get("commands")}</a></td>
		</tr>
		<tr class="units_there">
			<td>{$lang->get("all")}</td>
			
			{foreach from=$unit item=name key=dbname}
				{if $all_units.$arr_id.$dbname==0}
						<td class="hidden">{$all_units.$arr_id.$dbname}</td>
				{else}
						<td>{$all_units.$arr_id.$dbname}</td>
				{/if}
			{/foreach}
		
			<td rowspan="2"><a href="game.php?village={$village.id}&amp;screen=place&amp;mode=units">{$lang->get("units")}</a></td>
		</tr>
		<tr class="units_away">
			<td>{$lang->get("outside")}</td>
			
			{foreach from=$unit item=name key=dbname}
				{if $villages.$arr_id.outward.$dbname==0}
						<td class="hidden">{$villages.$arr_id.outward.$dbname}</td>
				{else}
						<td>{$villages.$arr_id.outward.$dbname}</td>
				{/if}
			{/foreach}
			
		</tr>
	{/foreach}
	
</table>
