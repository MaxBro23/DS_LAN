<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("snob", $village.snob)}" title="Adelshof" alt="" />
		</td>
		<td>
			<h2>{$buildname} ({$village.$dbname|stage})</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
{if $show_build}
	{if $mode == "mass_muenze"}
		{include file="game_snob_$mode.tpl" title=foo}
	{else}
	
	{if count($recruit_units)>0}
	    <table class="vis">
			<tr>
				<th width="150">{$lang->get("recruit")}</th>
				<th width="120">{$lang->get("duration")}</th>
				<th width="150">{$lang->get("finish")}</th>
				<th width="100">{$lang->get("cancel")}*</th>
			</tr>

			{foreach from=$recruit_units key=key item=value}
			    <tr {if $recruit_units.$key.lit}class="lit"{/if}>
					<td>{$recruit_units.$key.num_unit} {$cl_units->get_name($recruit_units.$key.unit)}</td>
	                {if $recruit_units.$key.lit && $recruit_units.$key.countdown>-1}
						<td><span class="timer">{$recruit_units.$key.countdown|format_time}</span></td>
					{else}
					   	<td>{$recruit_units.$key.countdown|format_time}</td>
					{/if}
					<td>{$recruit_units.$key.time_finished|format_date}</td>
					<td><a href="game.php?t=129107&amp;village={$village.id}&amp;screen={$dbname}&amp;action=cancel&amp;id={$key}&amp;h={$hkey}">{$lang->get("do_cancel")}</a></td>
			    </tr>
			{/foreach}

		</table>
		<div style="font-size: 7pt;">* ({$lang->get("cancel_info")})</div>
		<br>
	{/if}

	{if !empty($error)}
		<font class="error">{$error}</font>
	{/if}
	<form action="game.php?village={$village.id}&amp;screen={$dbname}&amp;action=train&amp;h={$hkey}" method="post" onsubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th width="150">{$lang->get("unit")}</th>
				<th colspan="4" width="120">{$lang->get("need")}</th>
				<th width="130">{$lang->get("time")} (hh:mm:ss)</th>
				<th>{$lang->get("amount")}</th>
				<th>{$lang->get("do_recruit")}</th>
			</tr>

			{foreach from=$units key=unit_dbname item=name}
				<tr>
					<td><a href="javascript:popup('popup_unit.php?unit={$unit_dbname}', 520, 520)"> <img src="graphic/unit/{$unit_dbname}.png" alt="" /> {$name}</a></td>
					<td><img src="graphic/holz.png" title="Holz" alt="" /> {$cl_units->get_woodprice($unit_dbname)}</td>
					<td><img src="graphic/lehm.png" title="Lehm" alt="" /> {$cl_units->get_stoneprice($unit_dbname)}</td>
					<td><img src="graphic/eisen.png" title="Eisen" alt="" /> {$cl_units->get_ironprice($unit_dbname)}</td>
					<td><img src="graphic/face.png" title="Arbeiter" alt="" /> {$cl_units->get_bhprice($unit_dbname)}</td>
					<td>{$cl_units->get_time($village.$dbname,$unit_dbname)|format_time}</td>
					<td>{$units_in_village.$unit_dbname}/{$units_all.$unit_dbname}</td>

					{$cl_units->check_needed($unit_dbname,$village)}
					{if $amountSnobsCanBeRecruited == 0 AND $ag_style == 2}
					    <td class="inactive">{$lang->grab("error", "no_more_snobs")}</td>
					{elseif $cl_units->last_error==not_tec}
					    <td class="inactive">{$lang->grab("error", "not_tec")}</td>
					{elseif $cl_units->last_error==not_needed}
					    <td class="inactive">{$lang->grab("error", "not_fulfilled")}</td>
					{elseif $cl_units->last_error==build_ah}
					    <td class="inactive">{$lang->grab("error", "build_ah")}</td>
					{elseif $cl_units->last_error==not_enough_ress}
					    <td class="inactive">{$lang->grab("error", "not_enough_ress")}</td>
					{elseif $cl_units->last_error==not_enough_bh}
					    <td class="inactive">{$lang->grab("error", "not_enough_bh")}</td>
					{else}
						<td><a href="game.php?h={$hkey}&amp;action=train_snob&amp;screen=snob&amp;village={$village.id}">{$lang->get("create")}</a></td>
					{/if}
				</tr>
			{/foreach}


		</table>
		<br />
		{if $ag_style==0}
			<h4>{$lang->get("amount_recruit_this_village")}</h4>
			<table class="vis">
			<tr><td>{$lang->get("snob_stage")}:</td><td>{$village.snob}</td></tr>
			<tr><td>- {$lang->get("this_village_controlled")}:</td><td>{$village.control_villages}</td></tr>
			<tr><td>- {$lang->get("available_snobs")}:</td><td>{$village.recruited_snobs}</td></tr>
			<tr><th>{$lang->get("amount_can_be_recruited")}:</th><th>{$village.snob-$village.control_villages-$village.recruited_snobs}</th></tr>
			</table>
		{elseif $ag_style==1}
			<h4>{$lang->get("amount_recruit")}</h4>
			<table class="vis">
			<tr><td>{$lang->get("snob_stage")}:</td><td>{$village.snob_info.stage_snobs}</td></tr>
			<tr><td>- {$lang->get("snobs_available")}:</td><td>{$village.snob_info.all_snobs}</td></tr>
			<tr><td>- {$lang->get("snobs_production")}:</td><td>{$village.snob_info.ags_in_prod}</td></tr>
			<tr><td>- {$lang->get("amount_conquered")}:</td><td>{$village.snob_info.control_villages}</td></tr>
			<tr><th>{$lang->get("amount_can_be_recruited")}:</th><th>{$village.snob_info.can_prod}</th></tr>
			</table>
		{elseif $ag_style==2}
		  <h4>{$lang->get("amount_recruit")}</h4>
		  <table class="vis">
        <tbody>
        <tr>
          <td>{$lang->get("limit")}:</td>
          <td>{$snobLimit}</td>
        </tr>
        <tr>
          <td>- {$lang->get("snobs_available")}:</td>
          <td>{$snobsNow}</td>
        </tr>
        <tr>
          <td>- {$lang->get("snobs_production")}:</td>
          <td>{$inRecruit}</td>
        </tr>
        <tr>
          <td>- {$lang->get("amount_conquered")}:</td>
          <td>{if $enobled != 0}{$enobled}{else}0{/if}</td>
        </tr>
        <tr>
          <th>{$lang->get("amount_can_be_recruited")}:</th>
          <th>{$amountSnobsCanBeRecruited}</th>
        </tr>
        </tbody>
      </table>
      <br/>
      <table>
        <tbody>
          <tr>
            <td>
              <img alt="Goldmünzen" src="graphic/gold_big.png" />
            </td>
            <td>
              <h4>{$lang->get("coins")}</h4>
                <p>{$lang->get("coins_info")}</p>
            </td>
          </tr>
      </tbody>
    </table>
<table class="vis">
  <tbody>
    <tr>
      <td>{$lang->get("coins_all")}:</td>
      <td>{$coinsAll}</td>
    </tr>
    <tr>
      <td>{$lang->get("coins_next_snob")}:</td>
      <td>{$coinsNext}</td>
    </tr>
    <tr>
      <td>{$lang->get("limit")}:</td>
      <td>{$snobLimit}</td>
    </tr>
  </tbody>
</table>
<table class="vis">
  <tbody>
    <tr>
      <th>{$lang->get("need")}</th>
      <th>{$lang->get("coinage")}</th>
    </tr>
    <tr>
      <td>
        <img alt="" title="Holz" src="graphic/holz.png?1"/> {$coinPrice.wood}
        <img alt="" title="Lehm" src="graphic/lehm.png?1"/> {$coinPrice.stone}
        <img alt="" title="Eisen" src="graphic/eisen.png?1"/> {$coinPrice.iron}
      </td>
      <td class="inactive">
        {if $makeCoin}
        <a href="game.php?village={$village.id}&screen=snob&action=coin&h={$hkey}">&raquo; {$lang->get("do_coinage")}</a>
        {else}
        <span>{$lang->grab("error", "ress_available_in")} <span class="timer_replace">{$coinError}</span></span><span style="display:none">{$lang->grab("error", "ress_available")}</span>
        {/if}
      </td>
    </tr>
  </tbody>
</table><br>

<a href="game.php?village={$village.id}&screen=snob&mode=mass_muenze">Massenprägen &raquo;</a>
		{/if}
{/if}
{if $ag_style != 2}
{* Beherschte Dörfer *}
{if count($snobed_villages)>0}
	<br /><br />
	<table class="vis" width="300">
		<tr>
			<th>{$lang->get("controlled")}</th>
		</tr>
		{foreach from=$snobed_villages key=id item=villagename}
			<tr>
				<td>
					<a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$id}">{$villagename}</a>
				</td>
			</tr>
		{/foreach}
	</table>
{/if}
{/if}
{/if}