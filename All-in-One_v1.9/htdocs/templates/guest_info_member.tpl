<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gastzugang</title>
<link rel="stylesheet" type="text/css" href="/stamm.css?1222347117" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>

<body id="ds_body" >
<table class="main" width="800" align="center"><tr><td>

<table class="vis">
<tr>
<td ><a href="/guest.php?screen=ranking">Rangliste</a></td>
</tr>
</table><table width="100%"><tr>
<td><h2>Mitglieder {$allyName}</h2></td>
<td align="right" valign="top"><a href="/guest.php?screen=info_ally&id={$allyId}">&raquo; {$allyName}</a></td>
</tr></table>
<table class="vis">
<tr>

  <th width="220">Name</th>
  <th width="80">Punkte</th>
  <th width="40">D�rfer</th>
</tr>
{foreach from=$memberData item=member}
	<tr>
	 <td><a href="guest.php?screen=info_player&id={$member.id}">{$member.username}</a> {if $member.ally_titel != ''}({$member.ally_titel}){/if}</td>
	 <td>{$member.points}</td>
	 <td>{$member.villages}</td>
	</tr>
{/foreach}
</table>

<br />

</td></tr></table>
</body>
</html>