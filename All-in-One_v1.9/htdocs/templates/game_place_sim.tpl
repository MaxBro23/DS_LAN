{* Simulieren *}
{if isset($simulate) && $simulate}
	<table class="vis">
		<tr>
			<td colspan="2"></td>
			{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
				<th width="35"><img src="graphic/unit/overview/{$dbname}.png" title="{$name}" alt="" /></th>
			{/foreach}
		</tr>
		<tr>
			<td rowspan="2">{$lang->get("attacker")}</td>
			<td>{$lang->get("units")}:</td>
			{foreach from=$simulate_values.att item=num key=unitname}
				{if $num=="0"}
					<td class="hidden">0</td>
				{else}
					<td>{$num}</td>
				{/if}
			{/foreach}
		</tr>
		<tr>
			<td>{$lang->get("looses")}:</td>
			{foreach from=$simulate_values.att_lose item=num key=unitname}
				{if $num=="0"}
					<td class="hidden">0</td>
				{else}
					<td>{$num}</td>
				{/if}
			{/foreach}
		</tr>
		<tr>
			<td style="display:none"></td>
		</tr>
		<tr>
			<td rowspan="2">{$lang->get("defender")}</td>
			<td>{$lang->get("units")}:</td>
			{foreach from=$simulate_values.def item=num key=unitname}
				{if $num=="0"}
					<td class="hidden">0</td>
				{else}
					<td>{$num}</td>
				{/if}
			{/foreach}
		</tr>
		<tr>
			<td>{$lang->get("looses")}:</td>
			{foreach from=$simulate_values.def_lose item=num key=unitname}
				{if $num=="0"}
					<td class="hidden">0</td>
				{else}
					<td>{$num}</td>
				{/if}
			{/foreach}
		</tr>
	</table>
	<table>
	{if $simulate_values.others.def_wall!=$simulate_values.others.new_wall}
		<tr><th>{$lang->get("ram_damage")}:</th><td>{$lang->get("wall")} <b>{$simulate_values.others.def_wall}</b> {$lang->get("on_level")} <b>{$simulate_values.others.new_wall}</b></td></tr>
	{/if}
	
	{if $simulate_values.others.def_building!=$simulate_values.others.new_building}
		<tr><th>{$lang->get("catapult_damage")}:</th><td>{$lang->get("building")} <b>{$simulate_values.others.def_building}</b> {$lang->get("on_level")} <b>{$simulate_values.others.new_building}</b></td></tr>
	{/if}
	</table>
{/if}

<form action="game.php?village={$village.id}&amp;screen=place&amp;mode=sim" method="post" name="units">
	<input name="simulate" type="hidden" />
	<table class="vis">
		<tr>
			<th></th>
			<th colspan="2">{$lang->get("attacker")}</th>
			<th colspan="2">{$lang->get("defender")}</th>
		</tr>
		<tr>
			<td></td>
			<td>{$lang->get("units")}</td>
			<td>{$lang->get("tech")}</td>
			<td>{$lang->get("units")}</td>
			<td>{$lang->get("tech")}</td>
		</tr>
		{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
			<tr>
				<td><a href="javascript:popup('popup_unit.php?unit={$dbname}', 520, 520)"><img src="graphic/unit/overview/{$dbname}.png" title="" alt="" /> {$name}</a></td>
				<td><input type="text" name="att_{$dbname}" size="5" value="{$values.att.$dbname}" /></td>
				<td><input type="text" name="att_tech_{$dbname}" size="5" value="{$values.att_tech.$dbname}" /></td>
				<td><input type="text" name="def_{$dbname}" size="5" value="{$values.def.$dbname}" /></td>
				<td><input type="text" name="def_tech_{$dbname}" size="5" value="{$values.def_tech.$dbname}" /></td>
			</tr>
		{/foreach}
		<tr>
			<td>{$lang->get("wall")}</td>
			<td colspan="2"></td>
			<td colspan="2"><input type="text" name="def_wall" value="{$values.def_wall}" size="5" /></td>
		</tr>
		<tr>
			<td>{$lang->get("target_catapult")}</td>
			<td colspan="2"></td><td colspan="2"><input type="text" name="def_building" value="{$values.def_building}" size="5" /></td>
		</tr>
		{if $moral_activ}
			<tr>
				<td>{$lang->get("moral")}</td>
				<td colspan="4"><input type="text" name="moral" value="{$values.moral}" size="5" id="moral" />%</td>
			</tr>
		{/if}
		<tr>
			<td>{$lang->get("luck")}</td>
			<td colspan="4"><input type="text" name="luck" value="{$values.luck}" size="5" />%</td>
		</tr>
	</table>
	<input type="submit" value="{$lang->get("calc")}" />
</form>