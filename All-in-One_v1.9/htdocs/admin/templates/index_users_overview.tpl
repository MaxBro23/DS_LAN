<h3>Userverwaltung</h3><br />

Dieses Modul erm&ouml;glicht das einfache Bearbeiten eines Users. <br /><br />

<table class="vis" style=border:1px solid" border="1">
 <tr>
  <th>Username</th>
  <th>ID</th>
  <th>Rang</th>
  <th>Punkte</th>
  <th>D&ouml;rfer</th>
 </tr>
{foreach from=$userInfo item=user}
<td><a href="index.php?screen=users&action=edit&name={$user.username}&id={$user.id}">{$user.username}</a>
</td>
<td>
&nbsp;{$user.id}
</td>
<td>
&nbsp;&nbsp;{$user.rang}
</td>
<td>
&nbsp;&nbsp;{$user.points}
</td>
<td>
&nbsp;&nbsp;{$user.villages}
</td>
</tr>
<tr>
{/foreach}
</table>
<p align="right">&copy; by pL4n3</p>