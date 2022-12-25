<h3>{$lang->grab("settings_$mode", "vacation")}</h3>
<p>{$lang->grab("settings_$mode", "vacation_text")}</p>

<p>{$lang->grab("settings_$mode", "information")}</p>
<ul>
<li>{$lang->grab("settings_$mode", "resources")}</li>
<li>{$lang->grab("settings_$mode", "farm")}</li>

<li>{$lang->grab("settings_$mode", "attacks")}</li>
<li>{$lang->grab("settings_$mode", "support")}</li>
</ul>
{if empty($user.vacation_name)}
	<form action="game.php?village={$village.id}&amp;screen=settings&amp;mode=vacation&amp;action=sitter_offer&amp;h={$hkey}" method="post">
		<table class="vis">
		<tr>
			<th>{$lang->grab("settings_$mode", "vacation_name")}</th>
			<td><input name="sitter" type="text" /> <input type="submit" value="OK" /></td>
	
		</tr>
	    </table>
	</form>
{else}
	{if $sid->is_vacation()}
		<p>
		<a href="javascript:ask('{$lang->get("cancel_vacation_confirm")}', 'game.php?village={$village.id}&amp;screen=settings&amp;mode=vacation&amp;action=end_vacation&amp;h={$hkey}')">{$lang->get("cancel_vacation")}</a>
		</p>
	{else}
		<table class="vis">
		<tr>
			<td>{$lang->get("request_to")}:</td>
			<td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$user.vacation_id}">{$user.vacation_name}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=vacation&amp;action=sitter_offer_cancel&amp;h={$hkey}">&raquo; {$lang->get("request_refuse")}</a></td>
		</tr>
		</table>
	{/if}
{/if}

{if count($vacation_accept)>0 && !$sid->is_vacation()}
	<h3>{$lang->get("own_vacations")}</h3>
	<p>{$lang->get("info")}:</p>
	<table class="vis">
	<tr><th width="200">{$lang->get("player")}</th></tr>
	{foreach from=$vacation_accept item=arr key=id}
		<tr><td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$id}">{$arr.username}</a></td>
		<td><a href="login_uv.php?id={$id}" target="_blank">&raquo; {$lang->get("login")}</a></td>	</tr>
	{/foreach}
	</table>
{/if}

{if count($vacation)>0 && !$sid->is_vacation()}
	<h3>{$lang->get("requests")}</h3>
	<p>{$lang->get("info2")}</p>
	<table class="vis">
	<tr><th>{$lang->get("player")}</th><th colspan="2">{$lang->get("action")}</th></tr>
	{foreach from=$vacation item=arr key=id}
		<tr>
		<td width="200"><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$id}">{$arr.username}</a></td>
		<td width="100"><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=vacation&amp;action=sitter_accept&amp;player_id={$id}&amp;h={$hkey}">{$lang->get("accept")}</a></td>
		<td width="100"><a href="javascript:ask('{$lang->get("refuse_confirm")}', 'game.php?village={$village.id}&amp;screen=settings&amp;mode=vacation&amp;action=sitter_reject&amp;player_id={$id}&amp;h={$hkey}')">{$lang->get("refuse")}</a></td>
		</tr>
	{/foreach}
{/if}