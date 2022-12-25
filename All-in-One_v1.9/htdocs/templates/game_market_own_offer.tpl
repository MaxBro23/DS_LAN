{if !empty($error)}
	<b><div style="color:red;">{$error}</div></b><br />
{/if}

<table class="vis">
<tr><th>{$lang->get("trader")}: {$inside_dealers}/{$max_dealers}</th><th>{$lang->get("maximum")}: {math equation="x * 1000" x=$inside_dealers}</th></tr>
</table>

<h3>{$lang->get("offer")}</h3>

<form action="game.php?village={$village.id}&amp;screen=market&amp;mode=own_offer&amp;action=new_offer&amp;h={$hkey}" method="post">
<table class="vis">

<tr><td>{$lang->get("doOffer")}:</td>
<td><input name="sell" type="text" size="5" value="" /></td><td>
<table cellspacing="0" cellpadding="0"><tr>
<td><input id="res_sell_wood" name="res_sell" type="radio" value="wood" /></td><td width="30"><label for="res_sell_wood"><img src="graphic/holz.png" title="Holz" alt="" /></label></td>
<td><input id="res_sell_stone" name="res_sell" type="radio" value="stone" /></td><td width="30"><label for="res_sell_stone"><img src="graphic/lehm.png" title="Lehm" alt="" /></label></td>
<td><input id="res_sell_iron" name="res_sell" type="radio" value="iron" /></td><td width="30"><label for="res_sell_iron"><img src="graphic/eisen.png" title="Eisen" alt="" /></label></td>
</tr></table>

</td></tr>
	
<tr><td>{$lang->get("for")}:</td>
<td><input name="buy" type="text" size="5" value="" /></td><td>
<table cellspacing="0" cellpadding="0"><tr>
<td><input id="res_buy_wood" name="res_buy" type="radio" value="wood" /></td><td width="30"><label for="res_buy_wood"><img src="graphic/holz.png" title="Holz" alt="" /></label></td>
<td><input id="res_buy_stone" name="res_buy" type="radio" value="stone" /></td><td width="30"><label for="res_buy_stone"><img src="graphic/lehm.png" title="Lehm" alt="" /></label></td>
<td><input id="res_buy_iron" name="res_buy" type="radio" value="iron" /></td><td width="30"><label for="res_buy_iron"><img src="graphic/eisen.png" title="Eisen" alt="" /></label></td>
</tr></table>

</td></tr>

<tr><td>{$lang->get("multi")}:</td>
<td><input name="multi" type="text" size="5" value="1" /></td><td>{$lang->get("times")}
</td></tr>
	
</table>
<input type="submit" value="{$lang->get("create")}" />
</form>

<h3>{$lang->get("own_offer")}</h3>
{if count($offers)>0}
	<form action="game.php?village={$village.id}&amp;screen=market&amp;mode=own_offer&amp;action=modify_offers&amp;h={$hkey}" method="post">
	<table class="vis">
	<tr><th>Biete</th><th>{$lang->get("for")}</th><th>{$lang->get("amount")}</th><th>{$lang->get("in")}</th></tr>
		{foreach from=$offers item=arr key=id}
			<tr><td><input name="id_{$id}" type="checkbox" />{if $arr.sell_ress=='wood'}<img src="graphic/holz.png" title="Holz" alt="" />{/if}{if $arr.sell_ress=='stone'}<img src="graphic/lehm.png" title="Lehm" alt="" />{/if}{if $arr.sell_ress=='iron'}<img src="graphic/eisen.png" title="Eisen" alt="" />{/if}{$arr.sell} </td>
			<td>{if $arr.buy_ress=='wood'}<img src="graphic/holz.png" title="Holz" alt="" />{/if}{if $arr.buy_ress=='stone'}<img src="graphic/lehm.png" title="Lehm" alt="" />{/if}{if $arr.buy_ress=='iron'}<img src="graphic/eisen.png" title="Eisen" alt="" />{/if}{$arr.buy} </td>
			<td>{$arr.multi}</td>	
			<td>{$arr.time}</td>
			</tr>
		{/foreach}
	<tr><th colspan="4"><input name="all" type="checkbox" onclick="selectAll(this.form, this.checked)" /> {$lang->get("sel_all")} </th></tr>
	</table>
	
	<input type="submit" value="{$lang->get("delete")}" name="delete" />
	<input type="text" size="2" name="mod_count" value="1" />
	<input type="submit" value="{$lang->get("update")}" name="increase" />
	<input type="submit" value="{$lang->get("reduce")}" name="decrease" /></form>
{/if}