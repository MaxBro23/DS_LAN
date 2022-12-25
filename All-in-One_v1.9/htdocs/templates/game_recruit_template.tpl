{if $modes == 'massrek'}
<table>
	<tr>
		<td>
			<img src="graphic/big_buildings/barracks.png" title="Kaserne" alt="" />
			<img src="graphic/big_buildings/stable.png" title="Kaserne" alt="" />
			<img src="graphic/big_buildings/garage.png" title="Kaserne" alt="" />
		</td>
		<td>
			<h2>Rekrutieren</h2>
			In dieser Übersicht kannst du jegliche Art von Einheiten produzieren, insofern du über die notwendigen Gebäude und Technologien verfügst.
		</td>
	</tr>
</table>

{if count($recruit_units)>0}
	    <table class="vis">
			<tr>
				<th width="150">Ausbildung</th>
				<th width="120">Dauer</th>
				<th width="150">Fertigstellung</th>
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
			    </tr>
				{/foreach}
		</table>
		<br>
	{/if}

{$err}
<form action="game.php?village={$village.id}&amp;screen=stable&amp;mode=massrek&amp;do=recruit" method="post" onsubmit="this.submit.disabled=false;">
<table class="vis" width="100%">
			<tr>
				<th width="150">Einheit</th>
				<th colspan="4" width="120">Bedarf</th>
				<th width="130">Zeit (hh:mm:ss)</th>
				<th>Im Dorf/Insgesamt</th>
				<th>Rekrutieren</th>
			</tr>
			
		{foreach from=$unit item=name_unit key=unit_name}
			{if $name_unit != 'unit_snob'}
				<tr>
					<td><a href="javascript:popup('popup_unit.php?unit={$name_unit}', 520, 520)"> <img src="graphic/unit/{$name_unit}.png" alt="" /> {$unit_name}</a></td>
					<td><img src="graphic/holz.png" title="Holz" alt="" /> {$cl_units->get_woodprice($name_unit)}</td>
					<td><img src="graphic/lehm.png" title="Lehm" alt="" /> {$cl_units->get_stoneprice($name_unit)}</td>
					<td><img src="graphic/eisen.png" title="Eisen" alt="" /> {$cl_units->get_ironprice($name_unit)}</td>
					<td><img src="graphic/face.png" title="Arbeiter" alt="" /> {$cl_units->get_bhprice($name_unit)}</td>
					<td>{$cl_units->get_time($village.$dbname,$name_unit)|format_time}</td>
					<td>{$units_village.$name_unit}/{$units_insgesamt.$name_unit}</td>
					
					{$cl_units->check_needed($name_unit,$village)}
					{if $cl_units->last_error==not_tec}
					    <td class="inactive">Einheit noch nicht erforscht</td>
					{elseif $cl_units->last_error==not_needed}
					    <td class="inactive">Gebäudevorraussetzungen nicht erfüllt</td>
					{elseif $cl_units->last_error==not_enough_ress}
					    <td class="inactive">Nicht genügend Rohstoffe vorhanden</td>
					{elseif $cl_units->last_error==not_enough_bh}
					    <td class="inactive">Zu wenig Bauernhöfe um zusätzliche Soldaten zu versorgen</td>
					{else}
						<td><input name="{$name_unit}" type="text" size="5" maxlength="5" /> <a href="javascript:insertUnit(document.forms[0].{$name_unit}, {$cl_units->last_error})">(max. {$cl_units->last_error})</a></td>
					{/if}
			{/if}
			{/foreach}
		<tr><td colspan="8" align="right"><input name="submit" type="submit" value="Rekrutieren" style="font-size: 10pt;" /></td></tr>
	</table>
</form>
{else}
<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic($dbname, $village.$dbname)}" title="{$dbname}" alt="" />
		</td>
		<td>
			<h2>{$buildname} ({$village.$dbname|stage})</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
{if $show_build}
	{if count($recruit_units)>0}
	    <table class="vis">
			<tr>
				<th width="150">{$lang->grab("recruit", "recruit")}</th>
				<th width="120">{$lang->grab("recruit", "time")}</th>
				<th width="150">{$lang->grab("recruit", "finished")}</th>
				<th width="100">{$lang->grab("recruit", "cancel")} *</th>
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
					<td><a href="game.php?t=129107&amp;village={$village.id}&amp;screen={$dbname}&amp;action=cancel&amp;id={$key}&amp;h={$hkey}">{$lang->grab("recruit", "do_cancel")}</a></td>
			    </tr>
			{/foreach}

		</table>
		<div style="font-size: 7pt;">* (90% {$lang->grab("recruit", "ressis_back")})</div>
		<br>
	{/if}

	{if !empty($error)}
		<font class="error">{$error}</font>
	{/if}
	<form action="game.php?village={$village.id}&amp;screen={$dbname}&amp;action=train&amp;h={$hkey}" method="post" onsubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th width="150">{$lang->grab("recruit", "unit")}</th>
				<th colspan="4" width="120">{$lang->grab("recruit", "need")}</th>
				<th width="130">{$lang->grab("recruit", "time")} (hh:mm:ss)</th>
				<th>{$lang->grab("recruit", "amount")}</th>
				<th>{$lang->grab("recruit", "do_recruit")}</th>
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
					{if $cl_units->last_error==not_tec}
					    <td class="inactive">{$lang->grab("error", "not_tec")}</td>
					{elseif $cl_units->last_error==not_needed}
					    <td class="inactive">{$lang->grab("error", "not_needed")}</td>
					{elseif $cl_units->last_error==not_enough_ress}
					    <td class="inactive">{$lang->grab("error", "not_enough_ress")}</td>
					{elseif $cl_units->last_error==not_enough_bh}
					    <td class="inactive">{$lang->grab("error", "not_enough_bh")}</td>
					{else}
						<td><input name="{$unit_dbname}" type="text" size="5" maxlength="5" /> <a href="javascript:insertUnit(document.forms[0].{$unit_dbname}, {$cl_units->last_error})">(max. {$cl_units->last_error})</a></td>
					{/if}
				</tr>
			{/foreach}

		    <tr><td colspan="8" align="right"><input name="submit" type="submit" value="{$lang->grab("recruit", "do_recruit")}" style="font-size: 10pt;" /></td></tr>
		</table>
	</form>
{/if}
{/if}