<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("iron", $village.iron)}" title="Eisenmine" alt="" />
		</td>
		<td>
			<h2>
				{$lang->get("iron")} ({$village.iron|stage})
			</h2>
            {$description}
		</td>
	</tr>
</table>
<br />
<table class="vis">
	<tr>
		<td width="200">
			<img src="graphic/eisen.png" title="Eisen" alt="" /> {$lang->get("actual")}
		</td>
		<td>
			<b>{$iron_datas.iron_production} </b>{$lang->get("production")}
		</td>
	</tr>

	{if ($iron_datas.iron_production_next)==false}

	{else}
		<tr>
	 		<td>
		 		<img src="graphic/eisen.png" title="Eisen" alt="" />
				 {$lang->get("production_at")} ({$village.iron+1|stage})
			</td>
			<td>
				<b>{$iron_datas.iron_production_next}</b> {$lang->get("production")}
			</td>
		</tr>
    {/if}
</table>