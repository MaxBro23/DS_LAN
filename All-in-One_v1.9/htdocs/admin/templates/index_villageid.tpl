<h2>Call-Me-The-Village-Id</h2><br>
<h4>Village ID's:</h4>

<table class="vis" style=border:1px solid" border="1">
 <tr>
  <th>Dorfname</th>
  <th>DorfID</th>
  <th>UserID</th>
 </tr>
{foreach from=$villageInfo item=village}
<td>
{$village.name}
</td>
<td>
&nbsp;{$village.id}
</td>
<td>
&nbsp;&nbsp;{$village.userid}
</td>
</tr>
<tr>
{/foreach}
</table><br><br>

<h4>Hier siehst du welche ID, welchem Spieler gehört:</h4><br>

<table class="vis" style=border:1px solid" border="1">
 <tr>
  <th>UserID</th>
  <th>Username</th>
 </tr>
{foreach from=$userInfo item=user}
<td>
{$user.id}
</td>
<td>
&nbsp;{$user.username}
</td>
</tr>
<tr>
{/foreach}
</table>

<p align="right">Tool &copy; by Black Arrow und SlimShady | Admintool &copy; by <a href="http://dslan.gfx-dose.de/user-6529.html">Yannici</a></p>