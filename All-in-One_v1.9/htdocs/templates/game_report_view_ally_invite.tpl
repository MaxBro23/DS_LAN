{$invite}
{if $user.ally==-1}
	<p><a href="game.php?village={$village.id}&amp;screen=ally">&raquo; {$lang->grab("report_view_ally_invite", "show_invitations")}</a></p>
{/if}