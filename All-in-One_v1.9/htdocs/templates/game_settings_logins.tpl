<h3>{$lang->grab("settings_$mode", "logins")}</h3>
<p>{$lang->grab("settings_$mode", "logins_text")}</p>

<h4>{$lang->grab("settings_$mode", "last_logins")}</h4>
<table class="vis">
<tr><th>{$lang->grab("settings_$mode", "date")}</th><th>IP</th><th>{$lang->grab("settings_$mode", "vacation_account")}</th></tr>
{foreach from=$logins item=arr key=id}
	<tr><td>{$arr.time}</td><td>{$arr.ip}</td><td>{$arr.uv}</td></tr>
{/foreach}
</table>