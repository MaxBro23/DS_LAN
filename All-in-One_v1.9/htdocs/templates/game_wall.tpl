<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("wall", $village.wall)}" title="Wall" alt="" />
		</td>
		<td>
			<h2>
				{$lang->get("wall")} ({$village.wall|stage})
			</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
<table class="vis">
	<tr>
		<td width="200">
   {$lang->get("current")}
		</td>
		<td width="200">
			<strong>{$wall_datas.Basic_defense}</strong>
   {$lang->get("basic_defense")}
		</td>
		<td width="200">
			<strong>{$wall_datas.wall_bonus}%</strong>
   {$lang->get("wall_bonus")}
		</td>
	</tr>

	{if !$wall_datas.basic_defense_next}

	{else}

		<tr>
			<td>
				{$lang->get("on_stage")} ({$village.wall+1|stage})
			</td>
			<td>
				<strong>{$wall_datas.Basic_defense_next}</strong>
    {$lang->get("basic_defense")}
			</td>
			<td>
				<strong>{$wall_datas.wall_bonus_next}%</strong>
    {$lang->get("wall_bonus")}
			</td>
		</tr>

    {/if}
    
</table>
