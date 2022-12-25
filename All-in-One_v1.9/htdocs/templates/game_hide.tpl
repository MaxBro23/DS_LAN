<table>
	<tr>
		<td style="padding:2px;">
			<table>
				<tr>
					<td>
						<img src="{$cl_builds->getGraphic("hide", $village.hide)}" title="Versteck" alt="" />
					</td>
					<td>
						<h2>{$cl_builds->get_name($building)} ({$village.hide|stage})</h2>
						{$description}
					</td>
				</tr>
			</table><br />
			<table class="vis">
				<tr>
					<td width="200">
      {$lang->get("size_now")}
					</td>
					<td>
						<b>{$hide_datas.max_hide}</b>
      {$lang->get("res")}
					</td>
				</tr>

				{if ($hide_datas.max_hide_next)==false}

				{else}


					<tr>
						<td>
							{$lang->get("size_next")} ({$village.hide+1|stage})
						</td>
						<td>
							<b>{$hide_datas.max_hide_next}</b>
       {$lang->get("res")}
						</td>
					</tr>
				<tr>
    			{/if}

					<td>
						{$lang->get("res_stolen")}:</td>
					<td>
						<img src="graphic/holz.png" title="Holz" alt="" /> {$village.r_wood-$hide_datas.max_hide}
						<img src="graphic/lehm.png" title="Lehm" alt="" />{$village.r_stone-$hide_datas.max_hide}
						<img src="graphic/eisen.png" title="Eisen" alt="" />{$village.r_iron-$hide_datas.max_hide}
					</td>
				</tr>
				<tr>
					<td colspan="2">
      {$lang->get("market_info")}
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>