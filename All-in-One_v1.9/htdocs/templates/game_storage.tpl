<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("storage", $village.storage)}" title="Speicher" alt="" />
		</td>
		<td>
			<h2>{$lang->get("storage")} ({$village.storage|stage})</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
<table>
	<tr>
		<td width="220">
			{$lang->get("capacity")}:
		</td>
		<td>
			<b>{$store_datas.storage_size}</b> {$lang->get("units_per_resource")}
		</td>
	</tr>
	
	{if ($store_datas.storage_size_next)==false}

	{else}

		<tr>
			<td>
				{$lang->get("capacity_at")} ({$village.storage+1|stage})
			</td>
			<td>
				<b>{$store_datas.storage_size_next}</b> {$lang->get("units_per_resource")}
			</td>
		</tr>

    {/if}

</table>
<br />

<table class="vis">
	<tr>
		<th width="150">
   {$lang->get("storage_full")}
		</th>
		<th>
			{$lang->get("time")} (hh:mm:ss)
		</th>
	</tr>
	{if $wood_sec!=0}
		<tr>
			<td width="250">
				<img src="graphic/holz.png" title="Holz" alt="" />
				{$wood_sec_date|format_date}
			</td>
			<td>
				<span class="timer">{$wood_sec|format_time}</span>
			</td>
		</tr>
	{else}
		<tr>
			<td width="250" colspan="2" class="error">
				<img src="graphic/holz.png" title="Holz" alt="" />
        {$lang->grab("error", "storage_is_full")}
			</td>
		</tr>
	{/if}
	{if $stone_sec!=0}
		<tr>
			<td width="250">
				<img src="graphic/lehm.png" title="Lehm" alt="" />
				{$stone_sec_date|format_date}
			</td>
			<td>
				<span class="timer">{$stone_sec|format_time}</span>
			</td>
		</tr>
	{else}
		<tr>
			<td width="250" colspan="2" class="error">
				<img src="graphic/lehm.png" title="Lehm" alt="" />
    {$lang->grab("error", "storage_is_full")}
			</td>
		</tr>
	{/if}
	{if $iron_sec!=0}
		<tr>
			<td width="250">
				<img src="graphic/eisen.png" title="Eisen" alt="" />
				{$iron_sec_date|format_date}
			</td>
			<td>
				<span class="timer">{$iron_sec|format_time}</span>
			</td>
		</tr>
	{else}
		<tr>
			<td width="250" colspan="2" class="error">
				<img src="graphic/eisen.png" title="Eisen" alt="" />
    {$lang->grab("error", "storage_is_full")}
			</td>
		</tr>
	{/if}
</table>