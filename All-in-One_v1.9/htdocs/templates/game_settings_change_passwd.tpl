<h3>{$lang->grab("settings_$mode", "change_passwd")}</h3>
{if $changed}
	<b>{$lang->grab("settings_$mode", "pw_changed")}</b><br />
{/if}
<p>{$lang->grab("settings_$mode", "text")}</p>
<p>{$lang->grab("settings_$mode", "info")}</p>

<form method="post" action="game.php?village={$village.id}&amp;screen=settings&amp;mode=change_passwd&amp;action=change_passwd&amp;h={$hkey}">
<table class="vis">
	<tr>
		<td><label for="old_passwd">{$lang->grab("settings_$mode", "old_pw")} </label></td>
		<td><input type="password" name="old_passwd" id="old_passwd" /></td>
	</tr>
	<tr>
		<td><label for="new_passwd">{$lang->grab("settings_$mode", "new_pw")} </label></td>
		<td><input type="password" name="new_passwd" id="new_passwd" /></td>

	</tr>
	<tr>
		<td><label for="new_passwd_rpt">{$lang->grab("settings_$mode", "repeat")} </label></td>
		<td><input type="password" name="new_passwd_rpt" id="new_passwd_rpt" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="{$lang->grab("settings_$mode", "change_passwd")}"/></td>

	</tr>
</table>
</form>