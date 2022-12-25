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
</table><h2>Spieler {$userInfoName}</h2>

<table><tr><td valign="top">

<table class="vis" width="100%">
	<tr><th colspan="2">{$userInfoName}</th></tr>

	<tr><td width="80">Punkte:</td><td>{$userInfoPoints}</td></tr>
	<tr><td>Rang:</td><td>{$userInfoRang}</td></tr>
	<tr><td>Besiegte Gegner:</td><td>{$userInfoKilledUnits} ({$userInfoKilledUnitsRang}.)</td></tr>
	<tr><td>Stamm:</td><td><a href="guest.php?screen=info_ally&id={$userInfoAllyId}">{$userInfoAllyShort}</a></td>
	</tr>

	
	
	
	
	</table><br />



<table class="vis" width="100%">
	<tr><th width="180">Dörfer</th><th width="80">Koordinaten</th><th>Punkte</th></tr>
	{if $userInfoVillagesNumRows > 0}
    {foreach from=$userInfoVillages item=village}
  <tr>
    <td><a href="guest.php?screen=info_village&id={$village.id}">{$village.name}</a></td>
    <td>{$village.x}|{$village.y}</td>
    <td>{$village.points}</td>
  </tr>
  {/foreach}
  {/if}

	</table>

</td><td align="right" valign="top" width="240">

<table class="vis" width="100%">
	<tr><th colspan="2">Profil</th></tr>
    {if $userInfoHome != '' AND $userInfoSex != ''}
		{if $userInfoSex != 'x'}<tr><td>Geschlecht:</td><td>{if $userInfoSex == 'm'}m&auml;nnlich{/if}{if $userInfoSex == 'f'}weiblich{/if}</td></tr>{/if}	
    {if $userInfoHome != ''}<tr><td>Wohnort:</td><td>{$userInfoHome}</td></tr>{/if}

	{if $userInfoImage != ''}<tr><td colspan="2" align="center"><img src="graphic/player/{$userInfoImage}"></td>{/if}</tr>{/if}</table>

<br />
<table class="vis" width="100%">
	<tr><th>Persönlicher Text</th></tr>
	{if $userInfoPersonalText != ''}
	<tr><td align="center">
	{$userInfoPersonalText}
</td></tr>
{/if}
</table>

</td></tr></table></td></tr></table>
</body>
</html>