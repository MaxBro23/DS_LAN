<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("smith", $village.smith)}" title="Schmiede" alt="" />
		</td>
		<td>
			<h2>{$lang->get("smith")} ({$village.smith|stage})</h2>
			 <a href="/alles_erforschen.php?village={$village.id}">->Alles erforschen</a><br><br>{$description}
		</td>
	</tr>
</table>
<br />
{if !empty($error)}
	<font class="error">{$error}</font>
{/if}
{if $show_build}
	{* Aktuelle Forschung *}
	{if $is_researches}
		<table class="vis">
		<tr>
			<td width="220">{$lang->get("research_application")}</td>
			<td width="100">{$lang->get("duration")}</td>
			<td width="120">{$lang->get("finish")}</td>
			<td rowspan="2"><a href="game.php?village={$village.id}&amp;screen=smith&amp;action=cancel&amp;h={$hkey}">{$lang->get("cancel")}</a></td>
		</tr>
		<tr>
		    {assign var=research_unitname value=$research.research}
			<th>{$cl_techs->get_name($research.research)} (Stufe {$techs.$research_unitname+1})</th>
			{if ($research.end_time < $time)}
			    <th>{$research.reminder_time|format_time}</th>
			{else}
			    <th><span class="timer">{$research.reminder_time|format_time}</span></th>
			{/if}
			<th>{$research.end_time|format_date}</th>
		</tr>
		</table><br />
	{/if}
	
	<table class="vis" width="100%">
		{* ALLE GRUPPEN AUSLESEN *}
		<tr>
			{foreach from=$group_techs item=item key=group_name}
				<th width="{$table_width}%">{$group_name}</th>
			{/foreach}
		</tr>
		{* EINZELNEN EINHEITEN AUSLESEN *}
		{section name=counter start=0 loop=$maxNum_groupTech step=1}
			{assign var=num value=$smarty.section.counter.index}
			<tr>
				{foreach from=$group_techs item=item key=group_name}
					{if !empty($group_techs.$group_name.$num)}
						{assign var=unitname value=$group_techs.$group_name.$num}
						<td>
							{$cl_techs->check_tech($group_techs.$group_name.$num,$village)}

							<table class="vis">
								<tr><td><a href="javascript:popup('popup_unit.php?unit=unit_{$group_techs.$group_name.$num}&amp;level=0', 520, 520)"><img src="graphic/unit_big/{$cl_techs->get_graphic()}" alt="" /></a></td>
									<td valign="top"><a href="javascript:popup('popup_unit.php?unit=unit_{$group_techs.$group_name.$num}&amp;level=0', 520, 520)">{$cl_techs->get_name($group_techs.$group_name.$num)}</a> ({$techs.$unitname|stage})
										<br />
										{if $cl_techs->get_last_error()=='not_enough_ress'}
											<br /><img src="graphic/holz.png" title="Holz" alt="" />{$cl_techs->get_wood($unitname,$techs.$unitname+1)} <img src="graphic/lehm.png" title="Lehm" alt="" />{$cl_techs->get_stone($unitname,$techs.$unitname+1)} <img src="graphic/eisen.png" title="Eisen" alt="" />{$cl_techs->get_iron($unitname,$techs.$unitname+1)}
											<br /><span class="inactive">{$lang->grab("error", "ress_available_in")} <span class="timer_replace">{$cl_techs->get_time_wait()}</span></span><span style="display:none">{$lang->grab("error", "ress_available")}</span>
										{elseif $cl_techs->get_last_error()=='not_fulfilled'}
											<span class="inactive">{$lang->grab("error", "not_fulfilled")}</span>
										{elseif $cl_techs->get_last_error()=='max_stage'}
											<span class="inactive">{$lang->grab("error", "max_stage")}</span>
										{elseif $cl_techs->get_last_error()=='not_enough_storage'}
											<br /><img src="graphic/holz.png" title="Holz" alt="" />{$cl_techs->get_wood($unitname,$techs.$unitname+1)} <img src="graphic/lehm.png" title="Lehm" alt="" />{$cl_techs->get_stone($unitname,$techs.$unitname+1)} <img src="graphic/eisen.png" title="Eisen" alt="" />{$cl_techs->get_iron($unitname,$techs.$unitname+1)}
											<br /><span class="inactive">{$lang->grab("error", "not_enough_storage_smith")}</span>
										{else}
											<br /><img src="graphic/holz.png" title="Holz" alt="" />{$cl_techs->get_wood($unitname,$techs.$unitname+1)} <img src="graphic/lehm.png" title="Lehm" alt="" />{$cl_techs->get_stone($unitname,$techs.$unitname+1)} <img src="graphic/eisen.png" title="Eisen" alt="" />{$cl_techs->get_iron($unitname,$techs.$unitname+1)}
											{if $is_researches}
											    <br /><span class="inactive">{$lang->grab("error", "already_researching")}</span> ({$cl_techs->get_time($village.smith,$unitname,$techs.$unitname+1)|format_time})
											{else}
												{if $techs.$unitname < 1}
													<br /><a href="game.php?village={$village.id}&amp;screen=smith&amp;action=research&amp;id={$unitname}&amp;h={$hkey}">&raquo; {$lang->get("research")}</a> ({$cl_techs->get_time($village.smith,$unitname,$techs.$unitname+1)|format_time})
												{else}
													<br /><a href="game.php?village={$village.id}&amp;screen=smith&amp;action=research&amp;id={$unitname}&amp;h={$hkey}">&raquo; {$lang->get("research_stage")} {$techs.$unitname+1}</a> ({$cl_techs->get_time($village.smith,$unitname,$techs.$unitname+1)|format_time})
												{/if}
											{/if}
										{/if}
									</td>
								</tr>
							</table>
						</td>
					{/if}
				{/foreach}
			</tr>
		{/section}
	</table>
{/if}
