{if !empty($error)}
	<b><div style="color:red;">{$error}</div></b><br />
{/if}

<table class="vis">
<tr><th>{$lang->get("trader")}: {$inside_dealers}/{$max_dealers}</th><th>{$lang->get("maximum")}: {math equation="x * 1000" x=$inside_dealers}</th></tr>
</table>

<h3>{$lang->get("offer")}</h3>

<form action="game.php?village={$village.id}&amp;screen=market&amp;mode=other_offer&amp;action=search&amp;h={$hkey}" method="post">
<table class="vis">
<tr>
	<td>{$lang->get("search")}:</td><td>
		<select name="res_sell">
		<option value="all" {if $market.market_sell=='all'}selected="selected"{/if}>{$lang->get("all")}</option>
		<option value="wood" {if $market.market_sell=='wood'}selected="selected"{/if}>{$lang->get("wood")}</option>
		<option value="stone" {if $market.market_sell=='stone'}selected="selected"{/if}>{$lang->get("stone")}</option>
		<option value="iron" {if $market.market_sell=='iron'}selected="selected"{/if}>{$lang->get("iron")}</option>
		</select>
	</td><td width="10"></td>
	<td></td><td></td>

	<td rowspan="3"><input type="submit" value="{$lang->get("doSearch")}" /></td>
</tr>

<tr>
	<td>{$lang->get("doOffer")}:</td><td>
		<select name="res_buy">
		<option value="all" {if $market.market_buy=='all'}selected="selected"{/if}>{$lang->get("all")}</option>
		<option value="wood" {if $market.market_buy=='wood'}selected="selected"{/if}>{$lang->get("wood")}</option>
		<option value="stone" {if $market.market_buy=='stone'}selected="selected"{/if}>{$lang->get("stone")}</option>
		<option value="iron" {if $market.market_buy=='iron'}selected="selected"{/if}>{$lang->get("iron")}</option>
		</select>
	</td>
	<td></td>
	<td>{$lang->get("max_ratio")}:</td><td><input name="ratio_max" value="{$market.market_ratio_max}" type="text" size="4" /> ({$lang->get("example")})</td>
</tr>
</table>
</form>
{if $num_pages>1}
	<table class="vis" width="100%">
		<tr>
			<td align="center">
				{section name=countpage start=1 loop=$num_pages+1 step=1}
					{if $site==$smarty.section.countpage.index}
						<strong> &gt;{$smarty.section.countpage.index}&lt; </strong>
					{else}
						<a href="game.php?village={$village.id}&amp;screen=market&amp;mode=other_offer&amp;site={$smarty.section.countpage.index}"> [{$smarty.section.countpage.index}] </a>
					{/if}
				{/section}
			</td>
		</tr>
	</table>
{/if}
<table class="vis">
	<tr><th>{$lang->get("doOffer")}</th><th>{$lang->get("for")}</th><th>{$lang->get("player")}</th><th>{$lang->get("duration")}</th><th>{$lang->get("ratio")}</th><th>{$lang->get("available")}</th></tr>
	{foreach from=$offers item=arr key=id}
		<tr>
			<td>
				{if $arr.sell_ress=='wood'}<img src="graphic/holz.png" title="Holz" alt="" />{/if}{if $arr.sell_ress=='stone'}<img src="graphic/lehm.png" title="Lehm" alt="" />{/if}{if $arr.sell_ress=='iron'}<img src="graphic/eisen.png" title="Eisen" alt="" />{/if}{$arr.sell}
			</td>
			<td>
				{if $arr.buy_ress=='wood'}<img src="graphic/holz.png" title="Holz" alt="" />{/if}{if $arr.buy_ress=='stone'}<img src="graphic/lehm.png" title="Lehm" alt="" />{/if}{if $arr.buy_ress=='iron'}<img src="graphic/eisen.png" title="Eisen" alt="" />{/if}{$arr.buy}
			</td>
			<td><a href="game.php?village=820&amp;screen=info_player&amp;id={$arr.userid}">{$arr.username}</a></td>
			<td>{$arr.unit_running}</td>
			<td>
			<table width="40"><tr><td style="background-color: rgb({$arr.ratio_red}, {$arr.ratio_green}, 100)">{$arr.ratio_max}</td></tr></table>
			</td>
				
			<td>{$arr.multi} {$lang->get("times")}</td>
		
			<td>
				{if $arr.message=='not_enough_dealers'}
     {$lang->grab("error", "not_enough_dealers")}
				{elseif $arr.message=='not_enough_ress'}
     {$lang->grab("error", "market_not_enough_ress")}
				{else}
					<form action="game.php?village={$village.id}&amp;screen=market&amp;mode=other_offer&amp;action=accept_multi&amp;id={$id}&amp;site={$site}&amp;h={$hkey}" method="post">
						<input type="text" name="count" size="3" value="1" onclick="javascript:this.value=''" />
						<input type="submit" value="{$lang->get("accept")} size="5" />
					</form>						
				{/if}
			</td>
		</tr>
	{/foreach}
</table>