<h2>{$lang->get("tribe")}</h2>
{if !empty($error)}
	<div style="color:red; font-size:large">{$error}</div>
{/if}
<p>{$lang->get("text")}</p>

<form action="game.php?village={$village.id}&amp;screen=ally&amp;action=create&amp;h={$hkey}" method="post">
<table class="vis">
<tr><th colspan="2">{$lang->get("found_tribe")}</th></tr>
<tr><td>{$lang->get("name")}:</td><td><input type="text" name="name" /></td></tr>
<tr><td>{$lang->get("shortcut")}:<br />{$lang->get("short_max")}</td><td><input type="text" name="tag" maxlength="6" /></td></tr>
</table>
<input type="submit" value="{$lang->get("found")}" style="font-size:10pt;" />
</form>
<br />
	
<table class="vis">
  <tr>
    <th colspan="3" width="400">{$lang->get("invitations")}
    </th>
  </tr>
	{foreach from=$invites item=arr key=id}
		<tr>
		<td><a href="game.php?village={$village.id}&amp;screen=info_ally&amp;id={$arr.from_ally}">{$arr.tag}</a></td>
		<td align="center"><a href="game.php?village={$village.id}&amp;screen=ally&amp;action=accept&amp;id={$id}&amp;h={$hkey}">{$lang->get("accept")}</td>
		<td align="center"><a href="game.php?village={$village.id}&amp;screen=ally&amp;action=reject&amp;id={$id}&amp;h={$hkey}">{$lang->get("refuse")}</td>
		</tr>
	{/foreach}
</table><br>
{$err}