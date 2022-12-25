<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("wood", $village.wood)}" title="Holzfäller" alt="" />
		</td>
		<td>
			<h2>
				{$lang->get("wood")} ({$village.wood|stage})
			</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
<table class="vis">
	<tr>
		<td width="200">
			<img src="graphic/holz.png" title="Holz" alt="" />
   {$lang->get("production")}
		</td>
		<td>
			<b>{$wood_datas.wood_production}</b>
   {$lang->get("per_minute")}
		</td>
	</tr>


	{if ($wood_datas.wood_production_next)==false}
			
	{else}

		<tr>
			<td>
				<img src="graphic/holz.png" title="Holz" alt="" />
				{$lang->get("production_at")} ({$village.wood+1|stage})
			</td>

			<td>
  				<b>{$wood_datas.wood_production_next}</b> {$lang->get("per_minute")}
        	</td>
		</tr>
    {/if}

</table>