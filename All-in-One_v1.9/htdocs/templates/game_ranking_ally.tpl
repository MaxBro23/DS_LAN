<table class="vis">
<tr>
	<th width="60">Rang</th><th width="60">{$lang->grab("ranking", "name")}</th><th width="120">{$lang->grab("ranking", "ranking_40")}</th><th width="60">{$lang->grab("ranking", "ranking_all")}</th><th width="100">{$lang->grab("ranking", "members")}</th><th width="100">{$lang->grab("ranking", "average_player")}</th><th width="60">{$lang->grab("ranking", "villages")}</th><th width="100">{$lang->grab("ranking", "average_village")}</th>
</tr>
	{foreach from=$ranks item=item key=id}
		<tr {$ranks.$id.mark}>
			<td>{$ranks.$id.rank}</td>
			<td><a href="game.php?village={$village.id}&screen=info_ally&id={$id}">{$ranks.$id.short}</a></td>
			<td>{$ranks.$id.best_points}</td>
			<td>{$ranks.$id.points}</td>
			<td>{$ranks.$id.members}</td>
			<td>{$ranks.$id.cuttrought_members|format_number}</td>
			<td>{$ranks.$id.villages}</td>
			<td>{$ranks.$id.cuttrought_villages|format_number}</td>
		</tr>
	{/foreach}
</table>

<table class="vis" width="100%"><tr>
{if $site!=1}
	<td align="center">
	<a href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=ally&amp;site={$site-1}">&lt;&lt;&lt; {$lang->grab("ranking", "up")}</a></td>
{/if}
<td align="center">
<a href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=ally&amp;site={$site+1}">{$lang->grab("ranking", "down")} &gt;&gt;&gt;</a></td>
</tr></table>