<table class="vis">
<tr>
<th>{$lang->get("village")}</th><th>{$lang->get("points")}</th><th>{$lang->get("ress")}</th><th>{$lang->get("storage")}</th><th>{$lang->get("farm")}</th>
<th>{$lang->get("build")}</th><th>{$lang->get("research")}</th><th>{$lang->get("recruit")}</th>
</tr>

{foreach from=$villages item=id key=arr_id}
	<tr>
		<td>{if $villages.$arr_id.attacks!=0}<img src="graphic/command/attack.png"> {/if}<a href="game.php?village={$arr_id}&screen=overview">{$villages.$arr_id.name} ({$villages.$arr_id.x}|{$villages.$arr_id.y})</a> <a href="game.php?village={$arr_id}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$arr_id}&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$villages.$arr_id.x}&y={$villages.$arr_id.y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </td>
		<td>{$villages.$arr_id.points}</td>
		<td><img src="graphic/holz.png" title="Holz" alt="" />{if $villages.$arr_id.r_wood==$villages.$arr_id.max_storage}<span class="warn">{/if}{$villages.$arr_id.r_wood}{if $villages.$arr_id.r_wood==$villages.$arr_id.max_storage}</span>{/if} <img src="graphic/lehm.png" title="Lehm" alt="" />{if $villages.$arr_id.r_stone==$villages.$arr_id.max_storage}<span class="warn">{/if}{$villages.$arr_id.r_stone}{if $villages.$arr_id.r_stone==$villages.$arr_id.max_storage}</span>{/if} <img src="graphic/eisen.png" title="Eisen" alt="" />{if $villages.$arr_id.r_iron==$villages.$arr_id.max_storage}<span class="warn">{/if}{$villages.$arr_id.r_iron}{if $villages.$arr_id.r_iron==$villages.$arr_id.max_storage}</span>{/if} </td>
		<td>{$villages.$arr_id.max_storage}</td>
		<td>{$villages.$arr_id.r_bh}/{$villages.$arr_id.max_farm}</td>
		{if isset($villages.$arr_id.first_build.buildname)}
			<td><b>{$villages.$arr_id.first_build.buildname}</b><br />{$villages.$arr_id.first_build.end_time}</td>

		{else}
		    <td></td>
		{/if}
		{if isset($villages.$arr_id.first_tec.tecname)}
			<td><b>{$villages.$arr_id.first_tec.tecname}</b><br>{$villages.$arr_id.first_tec.end_time}</td>

		{else}
		    <td></td>
		{/if}
		<td>{foreach from=$villages.$arr_id.recruits item=arr_rec key=id_rec}<img src="graphic/unit/{$arr_rec.dbname}.png" title="{$arr_rec.num} {$arr_rec.unit}" alt="">{/foreach}</td>
	</tr>
{/foreach}

</table>