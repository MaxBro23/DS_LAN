<table>
	<tr>
		<td>
			<img src="graphic/big_buildings/place.png" title="Versammlungsplatz" alt="" />
		</td>
		<td>
			<h2>Versammlungsplatz ({$village.place|stage})</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
{if $show_build}

	<table width="100%"><tr><td valign="top" width="100">
	<table class="vis" width="100%">
		{foreach from=$links item=f_mode key=f_name}
			{if $f_mode==$mode}
				<tr>
					<td class="selected" width="120">
						<a href="game.php?village={$village.id}&amp;screen=place&amp;mode={$f_mode}">{$f_name}</a>
					</td>
				</tr>
			{else}
                <tr>
                    <td width="120">
						<a href="game.php?village={$village.id}&amp;screen=place&amp;mode={$f_mode}">{$f_name}</a>
					</td>
				</tr>
			{/if}
		{/foreach}<tr><td><a href="all_units.php?village={$village.id}">Alle Einheiten</a></td></tr>
	</table>	</td><td valign="top" width="*">
		{if in_array($mode,$allow_mods)}
			{include file="game_place_$mode.tpl" title=foo}
		{/if}
	</td></tr></table>


{/if}