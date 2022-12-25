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
<td class="selected"><a href="/guest.php?screen=ranking">Rangliste</a></td>
</tr>
</table>

<h2>Rangliste</h2>

<table><tr><td valign="top">

<table class="vis">
<tr><td width="100"><a href="/guest.php?screen=ranking&amp;mode=ally">Stämme</a></td></tr>

<tr><td width="100"><a href="/guest.php?screen=ranking&amp;mode=player">Spieler</a></td></tr>
</table>

</td><td valign="top"><h3>Stammesrangliste auf dem Kontinent {if $con != ''}{$con}{else}55{/if}</h3>

<table class="vis">
<tr>

	<th width="60">Rang</th>
	<th width="160">Name</th>
	<th width="100">Punkte</th>
	<th width="60">Dörfer</th>
</tr>
<tr>
</tr>
</table><table class="vis" width="100%"><tr>
<td align="center">

</td>

<td style="padding-right:10px">
	<form action="/guest.php?screen=ranking&amp;mode=con_ally" method="post">
	Kontinent: <input name="con" type="text" value="" size="2" />
	 <input type="submit" value="OK" />
</form>
</td>
</tr>

</table></td></tr></table></td></tr></table>
</body>
</html>