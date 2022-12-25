<center>
<h2>Barbarendörfer Extra</h2>
<h4>Einfach alles ausfüllen und unten auf "Erstellen" klicken ;-)</h4><br><br>
</center>

<form action="?screen=bbdorf_extra&do=create" method="post">
<table>
<tr>
<td>
Anzahl Barbarendörfer:
</td>
<td>
<input type="text" size="1" maxlength="3" name="bbanzahl"> (Max. 100)
</td>
</tr>
<tr>
<td>
Zufall Techlevel:
</td>
<td>
<input type="checkbox" name="techlevel">
</td>
</tr>
</table><br>

<table cellpadding="10" valign="top" class="vis" cellspacing="10">
<tr>
<th>Dorfeigenschaften</th>
<th>Truppeneigenschaften</th>
</tr>
<tr>
<td>
<table class="vis" border="0" valign="top" cellpadding="2" cellspacing="2">
{foreach from=$buildings item=dbname key=number}
{if $dbname != 'farm'}
<tr valign="top">
<td>
{$cl_builds->get_name($dbname)}
</td>
<td>
Min. <input type="text" size="1" maxlength="2" name="{$dbname}_min"> Max. <input type="text" size="1" maxlength="2" name="{$dbname}_max">
</td>
</tr>
{/if}
{/foreach}
</table>
</td>
<td>
<table class="vis" border="0" valign="top" cellpadding="2" cellspacing="2">
{foreach from=$units item=dbname key=gername}
{if $dbname != 'unit_snob' && $dbname != 'unit_knight'}
<tr valign="top">
<td style="padding-right: 95px;" valign="top">
{$gername}
</td>
<td valign="top">
<input type="checkbox" name="units[{$dbname}]"> Max. <input type="text" size="3" maxlength="5" name="units_anzahl[{$dbname}]">
</td>
</tr>
{/if}
{/foreach}
</table>
</td>
</tr>
</table><br>

<input type="submit" value="Erstellen!">
</form><br>

{if $done}
<font color='green'>Erfolgreich erstellt!</font>
{else}
{$err}
{/if}
<p align="right">&copy 2011 by <a target="_blank" href="http://www.twlan.org/de/member.php?action=profile&uid=6529">Yannici</a></p>