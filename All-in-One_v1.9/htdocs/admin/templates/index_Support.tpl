<table border="0" width="100%">
	<tr>
		<td>
		<p align="center"><font size="7">Supportanfragen</font></td>
	</tr>
	<tr>
		<td>{if $smarty.get.destroy}{if 
		$smarty.get.destroy == "all"}Alle ID's{/if}ID: <b>{$smarty.get.destroy}</b> wurde erfolgreich 
gelöscht!{/if}<p>{if $smarty.get.destroy == "all"}Alle ID's wurde erfolgreich 
		gelöscht!{/if}</p>
<table bgcolor="#F1EBDD" style="border-collapse: collapse" border="2" bordercolor="#804000">
{foreach from=$ergebnisse item=support}
<tr>
  <td width="25" bgcolor="#DED3B9">ID:</td>
  <td width="93" bgcolor="#DED3B9">
	&nbsp;<a href="http://localhost/admin/index.php?screen=Support&read={$support.ID}">{$support.ID}</a></td>
  <td>Name:</td>
  <td>&nbsp;{$support.Nick}</td>
  <td bgcolor="#DED3B9">{$support.Grund} </td>
  <td>
	<a href="http://localhost/admin/index.php?screen=Support&destroy={$support.ID}">Löschen</a></td>
</tr>
{/foreach}
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</table>
<table border="2" width="82" bgcolor="#F1EBDD" bordercolor="#804000" style="border-collapse: collapse">
	<tr>
		<td width="76"><font face="Arial" size="2">
		<a href="http://localhost/admin/index.php?screen=Support&destroy=all">
		Alle löschen</a></font></td>
	</tr>
</table>
		<p>{if $smarty.get.read}</p>
<p>{foreach from=$reading item=read} </p>
<p>ID: {$support.ID}</p>
	<table border="1" width="100%" bgcolor="#FFFFFF" style="border-

collapse: collapse" bordercolor="#000000">
		<tr>
			<td height="23"><b>Grund: </b>{$read.Grund}</td>
		</tr>
		<tr>
			<td height="23"><b>Absender: </b>{$read.Nick}</td>
		</tr>
		<tr>
			<td><b>Nachricht: </b>{$read.Message}</td>
		</tr>
	</table>
<p>{/foreach}<p>{/if}<p>&nbsp;</td>
	</tr>
</table>
