<table class="vis" width="400">
<tr><th colspan="3">{$lang->grab("ally_invite", "invitations")}</th></tr>
	{foreach from=$invites item=arr key=id}
		<tr>
			<td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$arr.to_userid}">{$arr.to_username}</a></td>
			<td>{$arr.time}</td>
			<td><a href="game.php?village={$village.id}&amp;screen=ally&amp;mode=invite&amp;action=cancel_invitation&amp;id={$id}&amp;h={$hkey}">{$lang->grab("ally_invite", "cancel_invitation")}</a></td>
		</tr>
	{/foreach}
</table>
<br />
<form action="game.php?village={$village.id}&amp;screen=ally&amp;action=invite&amp;mode=invite&amp;action=invite&amp;h={$hkey}" method="post">
	<table class="vis" width="400">
	<tr><th colspan="3">{$lang->grab("ally_invite", "invite")}</th></tr>
	<tr><td>{$lang->grab("ally_invite", "name")}:</td>
	<td><input name="name" type="text" value="" /></td>
	<td><input type="submit" value=" OK " /></td></tr>
	</table>
</form>