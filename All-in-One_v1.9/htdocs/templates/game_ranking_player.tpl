<table class="vis">
<tr><th width="60">{$lang->grab("ranking", "rank")}</th><th width="180">{$lang->grab("ranking", "name")}</th><th width="100">{$lang->grab("ranking", "tribe")}</th>
<th width="60">{$lang->grab("ranking", "points")}</th><th>{$lang->grab("ranking", "villages")}</th><th>{$lang->grab("ranking", "average_village")}</th></tr>
	{foreach from=$ranks item=item key=id}
		<tr {$ranks.$id.mark}>
			<td>{$ranks.$id.rang}</td>
			<td><a href="game.php?village={$village.id}&screen=info_player&id={$id}">{$ranks.$id.username}</a></td>
			<td><a href="game.php?village={$village.id}&screen=info_ally&id={$ranks.$id.ally}">{$ranks.$id.allyname}</a></td>
			<td>{$ranks.$id.points}</td>
			<td>{$ranks.$id.villages}</td>
			<td>{$ranks.$id.cuttrought}</td>
		</tr>
	{/foreach}
</table>

<table class="vis" width="100%"><tr>
{if $site!=1}
	<td align="center">
	<a href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=player&amp;site={$site-1}">&lt;&lt;&lt; {$lang->grab("ranking", "up")}</a></td>
{/if}
<td align="center">
<a href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=player&amp;site={$site+1}">{$lang->grab("ranking", "down")} &gt;&gt;&gt;</a></td>
</tr></table>