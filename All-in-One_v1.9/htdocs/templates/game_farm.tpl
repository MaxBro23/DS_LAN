<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("farm", $village.farm)}" title="Bauernhof" alt="" />
		</td>
		<td>
			<h2>{$lang->get("farm")} ({$village.farm|stage})</h2>
				{$description}
			</td>
		</tr>
	</table>
	<br />
	<table class="vis">
		<tr>
			<td>
				<img src="graphic/face.png" title="Arbeiter" alt="" />
    {$lang->get("max_population")}
			</td>
			<td>
				<b>{$farm_datas.farm_size}</b>
			</td>
		</tr>

		{if ($farm_datas.farm_size_next)==false}

		{else}

			<tr>
				<td>
					<img src="graphic/face.png" title="Arbeiter" alt="" />
					{$lang->get("max_pop_at")} ({$village.farm+1|stage})
				</td>
				<td>
					<strong>{$farm_datas.farm_size_next}</strong>
				</td>
			</tr>
    	{/if}

</table>