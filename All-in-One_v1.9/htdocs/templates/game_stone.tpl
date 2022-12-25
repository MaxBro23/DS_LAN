<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("stone", $village.stone)}" title="Lehmgrube" alt="" />
		</td>
		<td>
			<h2>
				{$lang->get("stone")} ({$village.stone|stage})
			</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
	<table class="vis">
		<tr>
			<td width="200">
				<img src="graphic/lehm.png" title="Lehm" alt="" />
    {$lang->get("production")}
			</td>
			<td>
				<b>{$stone_datas.stone_production} </b>
    {$lang->get("per_minute")}
			</td>
		</tr>

		{if ($stone_datas.stone_production_next)==false}

		{else}

			<tr>
				<td>
					<img src="graphic/lehm.png" title="Lehm" alt="" />
				{$lang->get("production_at")} ({$village.stone+1|stage})
			</td>
			<td>
				<b>{$stone_datas.stone_production_next}</b>
    {$lang->get("per_minute")}
			</td>
		</tr>
    {/if}

</table>
