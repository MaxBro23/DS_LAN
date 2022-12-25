<table><tr><td valign="top">

<table class="vis" width="100%">
<tr><th colspan="2">{$lang->grab("ally_profile", "properties")}</th></tr>
<tr><td width="100">{$lang->grab("ally_profile", "name")}:</td><td>{$info.name}</td></tr>
<tr><td>{$lang->grab("ally_profile", "tag")}:</td><td>{$info.short}</td></tr>
<tr><td>{$lang->grab("ally_profile", "members")}:</td><td>{$info.members}</td></tr>
<tr><td>{$lang->grab("ally_profile", "points_40")}:</td><td>{$info.best_points|format_number}</td></tr>
<tr><td>{$lang->grab("ally_profile", "points")}:</td><td>{$info.points|format_number}</td></tr>
<tr><td>{$lang->grab("ally_profile", "points_average")}:</td><td>{$info.cutthroungt|format_number}</td></tr>
<tr><td>{$lang->grab("ally_profile", "rank")}:</td><td>{$info.rank}</td></tr>

<tr><td>{$lang->grab("ally_profile", "hp")}:</td><td><a href="{$ally.homepage}" target="_blank">{$ally.homepage}</a></td></tr>
{if !empty($ally.irc)}
    <tr><td>{$lang->grab("ally_profile", "irc")}:</td><td>{$ally.irc}</td></tr>
{/if}

{if $fusion_ally}
<tr><td colspan="2"><a href="game.php?village={$village.id}&amp;screen=info_ally&amp;id={$info.id}&action=fusion">&raquo; {$lang->grab("ally_profile", "fusion")}</a></td></tr>
{/if}
<tr><td colspan="2"><a href="game.php?village={$village.id}&amp;screen=info_member&amp;id={$info.id}">&raquo; {$lang->grab("ally_profile", "memberlist")}</a></td></tr>
</table>

</td><td valign="top">

<table class="vis" width="300">
{if !empty($info.image)}
	<tr><td align="center"><img src="./graphic/ally/{$info.image}"></td></tr>
{/if}
<tr><th>{$lang->grab("ally_profile", "desc")}</th></tr>
<tr><td align="center">{$info.description}</td></tr>
</table>

</td></tr></table>
{$error}