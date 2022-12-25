{if !empty($error)}
	<b><div style="color:red;">{$error}</div></b><br />
{/if}

<table class="vis">
<tr><th>{$lang->get("trader")}: {$inside_dealers}/{$max_dealers}</th><th>{$lang->get("maximum")}: {math equation="x * 1000" x=$inside_dealers}</th></tr>
</table>

<form name="units" action="game.php?village={$village.id}&amp;screen=market&amp;try=confirm_send" method="post">

<table>
<tr><td valign="top">

<table class="vis">
<tr><th>{$lang->get("ressources")}</th></tr>
<tr><td><img src="graphic/holz.png" title="Holz" alt="" /><input name="wood" type="text" value="" size="5" />&nbsp;<a href="javascript:insertNumber(document.forms[0].wood, {$max.wood})">({$max.wood})</a></td></tr>

<tr><td><img src="graphic/lehm.png" title="Lehm" alt="" /><input name="stone" type="text" value="" size="5" />&nbsp;<a href="javascript:insertNumber(document.forms[0].stone, {$max.stone})">({$max.stone})</a></td></tr>

<tr><td><img src="graphic/eisen.png" title="Eisen" alt="" /><input name="iron" type="text" value="" size="5" />&nbsp;<a href="javascript:insertNumber(document.forms[0].iron, {$max.iron})">({$max.iron})</a></td></tr>

</table>

</td><td valign="top" align="center">

<table class="vis">
<tr><th colspan="1">Ziel</th></tr>
<tr>
<td>
x: <input type="text" name="x" value="{$coords.x}" size="5" />
y: <input type="text" name="y" value="{$coords.y}" size="5" />
{if count($villages)>0}
	<select name="target" size="1" onchange="insertCoord(document.forms[0], this)">
		<option>-{$lang->get("choose_village")}-</option>
		{foreach from=$villages key=id item=value}
			<option value="{$villages.$id.x}|{$villages.$id.y}">{$villages.$id.name} ({$villages.$id.x}|{$villages.$id.y}) {$villages.$id.continent}</option>
		{/foreach}
	</select>
{/if}
</td>
</tr>

</table>

<input type="submit" value="&raquo; OK &laquo;" style="font-size: 10pt;" />

</td></tr>
</table>

</form>


{* Ausgehende Transporte *}
{if count($own)>0 }
	<h3>{$lang->get("own_transports")}</h3>

	<table class="vis">
	<tr><th width="200">{$lang->get("target")}</th><th width="80">{$lang->get("ware")}</th><th>{$lang->get("trader")}</th><th width="70">{$lang->get("duration")}</th><th width="100">{$lang->get("arrival")}</th><th width="70">{$lang->get("arrival_in")}</th></tr>
		{foreach from=$own item=arr key=id}
			<tr>
			<td>{if $arr.type=='to'}{$lang->get("transport_to")}{else}{$lang->get("return_from")}{/if}<br /><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$arr.villageid}">{$arr.villagename}</a></td>
			
			<td>{if $arr.wood>0}<img src="graphic/holz.png" title="Holz" alt="" />{$arr.wood} {/if}{if $arr.stone>0}<img src="graphic/lehm.png" title="Lehm" alt="" />{$arr.stone} {/if}{if $arr.iron>0}<img src="graphic/eisen.png" title="Eisen" alt="" />{$arr.iron} {/if}</td>
		
			<td>{$arr.dealers}</td>
			<td>{$arr.duration}</td>
			<td>{$arr.arrival}</td>
			<td>{if $arr.arrival_in_sek<0}{$arr.arrival_in}{else}<span class="timer">{$arr.arrival_in}</span>{/if}</td>
			{if $arr.can_cancel}
				<td><a href="game.php?village={$village.id}&amp;screen=market&amp;mode=send&amp;action=cancel&amp;id={$id}&amp;h={$hkey}">{$lang->get("doCancel")}</a></td>
			{/if}
			</tr>
		{/foreach}
	</table>
{/if}


{* Ankommende Transporte *}
{if count($others)>0 }
	<h3>Ankommende Transporte</h3>
{/if}
{if count($others)>0}
	<table class="vis">
	<tr><th width="160">Herkunft</th>{if $others_see_ress}<th width="80">Ware</th>{/if}<th width="100">Ankunft</th><th width="70">Ankunft in</th></tr>
		{foreach from=$others item=arr key=id}
			<tr>
			<td>Lieferung von<br /><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$arr.villageid}">{$arr.villagename}</a></td>
			{if $arr.see_ress}
				<td>{if $arr.wood>0}<img src="graphic/holz.png" title="Holz" alt="" />{$arr.wood} {/if}{if $arr.stone>0}<img src="graphic/lehm.png" title="Lehm" alt="" />{$arr.stone} {/if}{if $arr.iron>0}<img src="graphic/eisen.png" title="Eisen" alt="" />{$arr.iron} {/if}</td>
			{else}
				{if $others_see_ress}
					<td></td>
				{/if}
			{/if}
			<td>{$arr.arrival}</td>
			<td>{if $arr.arrival_in_sek<0}{$arr.arrival_in}{else}<span class="timer">{$arr.arrival_in}</span>{/if}</td>
			</tr>
		{/foreach}
	</table>
{/if}