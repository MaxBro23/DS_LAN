<!-- 
This ds-lan extension was written by Alexander Thiemann
Visit me: www.agrafix.net
Mail  me: mail@agrafix.net
-->
<h2>AntiCheat Script</h2>

{if !empty($action_text)}
<h3>Aktion</h3>
{$action_text}
{/if}

<h3>Multis</h3>
{if $multis_found == "Y"}
<table class="vis">
<tr>
	<th>Spieler</th>
	<th>IP</th>
	<th>Spieler mit gleicher IP</th>
	<th>Aktion</th>
</tr>

{foreach from=$users item=u}
{if $u.multi.enum == "Y"}
<tr>
	<td>{$u.username|urldecode|htmlentities} {if $u.banned == "Y"}(gesperrt){/if}</td>
	<td>Heute: {$u.ip}</td>
	<td>{$u.multi.username|urldecode|htmlentities}</td>
	<td>
		<a href="index.php?screen=anti_cheat&amp;do=ban&amp;user[0]={$u.id}&amp;user[1]={$u.multi.userid}">Beide Sperren</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=ban&amp;user[0]={$u.id}">{$u.username|urldecode|htmlentities} Sperren</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=ban&amp;user[0]={$u.multi.userid}">{$u.multi.username|urldecode|htmlentities} Sperren</a> <br />
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]={$u.id}&amp;user[1]={$u.multi.userid}">Beiden ein Dorf wegnehmen</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]={$u.id}">{$u.username|urldecode|htmlentities} ein Dorf wegnehmen</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]={$u.multi.userid}">{$u.multi.username|urldecode|htmlentities} ein Dorf wegnehmen</a>
	</td>
</tr>
{/if}
{/foreach}
</table>
{else}
<i>Keine Multis gefunden.</i>
{/if}

<h3>Spieler sperren/entsperren</h3>
<table class="vis">
<tr>
	<th>Spieler</th>
	<th>Sperrstatus</th>
	<th>Aktion</th>
</tr>
{foreach from=$users item=u}
<tr>
	<td>{$u.username|urldecode|htmlentities}</td>
	<td>
		<form action="index.php?screen=anti_cheat&amp;do=change_ban_state&amp;id={$u.id}" method="post">
		<select name="state">
			<option value="Y" {if $u.banned == "Y"}selected="selected"{/if}>gesperrt</option>
			<option value="N" {if $u.banned == "N"}selected="selected"{/if}>entsperrt</option>
		</select>
		<input type="submit" value="&auml;ndern" />
		</form>
	</td>
	<td>
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]={$u.id}">Dorf wegnehmen</a>
	</td>
</tr>
{/foreach}
</table>

{literal}
<script type="text/javascript">
/**
 * DO NOT REMOVE THIS
 */
 
window.onload = _init_agrafix;

function _init_agrafix() { 
	 var st = document.getElementById("serverTime");
	 var parentP = st.parentNode;
	 
	 parentP.innerHTML = "<a href='http://www.agrafix.net' target='_blank'>AntiCheat Erweiterung v1.1 von agrafix.net</a><br /> " + parentP.innerHTML;
}
</script>
{/literal}
<!--
End of Extension
-->