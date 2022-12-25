<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->grab("stats", "stats")}</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script src="script.js?1200322785" type="text/javascript"></script>
<script src="mootools.v1.11.js" type="text/javascript"></script>
</head>

<body>
<table class="main" width="100%" align="center"><tr><td>

<h2>{$lang->grab("stats", "stats")}</h2>

<table class="vis" width="100%">
<tr><th>{$lang->grab("stats", "players")}:</th><th>{$players}</th></tr>
<tr><td>{$lang->grab("stats", "villages_all")}:</td><td>{$villages} ({$villagesPerPlayer} {$lang->grab("stats", "per_player")})</td></tr>
</table><br />

<table class="vis" width="100%">
<tr><td>{$lang->grab("stats", "sent_mails")}:</td><td>{$mails} ({$mailsPerPlayer} {$lang->grab("stats", "per_player")})</td></tr>

<tr><td>{$lang->grab("stats", "points_all")}:</td><td>{$pointsAll|format_number} ({$pointsPerPlayer|format_number} {$lang->grab("stats", "per_player")}, {$pointsPerVillage|format_number} {$lang->grab("stats", "per_village")})</td></tr>

<tr><td>{$lang->grab("stats", "resources_all")}:</td><td><img src="graphic/holz.png" title="Holz" alt="" />{$sum.wood} <img src="graphic/lehm.png" title="Lehm" alt="" />{$sum.stone} <img src="graphic/eisen.png" title="Eisen" alt="" />{$sum.iron} </td></tr>
<tr><td>{$lang->grab("stats", "population_all")}:</td><td><img src="graphic/face.png" title="Arbeiter" alt="" /> {$sum.bh}</td></tr>

<tr><td>{$lang->grab("stats", "units_all")}:</td><td>
<table>
  <tr>
   {foreach from=$units item=u}
    <th width="45">
      <img src="graphic/unit/{$u}.png" />
    </th>
   {/foreach}
  </tr>
  <tr>
    {foreach from=$unitsAll item=unit}
      <td>
      {if $unit != 0}
        {$unit|format_number}
      {else}
        <span class="grey">{$unit}</span>
      {/if}
      </td>
    {/foreach}
  </tr>
  </table>
  </td>
</tr>
<tr>
  <td>{$lang->grab("stats", "units_per_player")}:</td>
  <td>
    <table>
    <tr>
   {foreach from=$units item=u}
    <th width="45">
      <img src="graphic/unit/{$u}.png" />
    </th>
   {/foreach}
    </tr>
    <tr>
    {foreach from=$unitsPerPlayer item=unit}
      <td>
      {if $unit != 0}
        {$unit|format_number}
      {else}
        <span class="grey">{$unit}</span>
      {/if}
      </td>
    {/foreach}
    </tr>
    </table>
  </td></tr>

<tr><td>{$lang->grab("stats", "units_per_village")}:</td><td>
<table>
    <tr>
   {foreach from=$units item=u}
    <th width="45">
      <img src="graphic/unit/{$u}.png" />
    </th>
   {/foreach}
    </tr>
    <tr>
    {foreach from=$unitsPerVillage item=unit}
      <td>
      {if $unit != 0}
        {$unit|format_number}
      {else}
        <span class="grey">{$unit}</span>
      {/if}
      </td>
    {/foreach}
    </tr>
</table>

</td></tr></table>

</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</script>
</body>
</html>