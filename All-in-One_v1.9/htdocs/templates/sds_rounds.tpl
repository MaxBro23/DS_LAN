<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->grab("sds_rounds", "rounds")}</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script src="script.js?1176997364" type="text/javascript"></script>
</head>

<body >
<table class="main" width="800" align="center"><tr><td>
<h2>{$lang->grab("sds_rounds", "rounds")}</h2>

	{foreach from=$rounds item=arr key=id}
		<h3>#{$id} {$arr.name}</h3>
	
		<table cellspacing="0" cellpadding="0">
		<tr><td>
		
		<table class="vis">
		<tr><td style="width:180px">{$lang->grab("sds_rounds", "start")}:</td><td style="width:300px"><strong>{$arr.start}</strong></td></tr>
		<tr><td>{$lang->grab("sds_rounds", "end")}:</td><td><strong>{$arr.end}</strong></td></tr>
		<tr><td>{$lang->grab("sds_rounds", "description")}:</td><td>{$arr.description}</td></tr>
		<tr><td>{$lang->grab("sds_rounds", "speed")}:</td><td>{$arr.speed}</td></tr>
		<tr><td>{$lang->grab("sds_rounds", "speed_units")}:</td><td>{$arr.speed_units}</td></tr>
		<tr><td>{$lang->grab("sds_rounds", "moral")}:</td><td>{$arr.moral}</td></tr>
		<tr><td>{$lang->grab("sds_rounds", "map")}:</td><td>{$arr.map}</td></tr>
		</table>
		
		</td><td style="padding-left: 10px" valign="top">
		
		<p><a href="sds_ranking.php?round_id={$id}">&raquo; {$lang->grab("sds_rounds", "ranking")}</a></p>
		
		</td></tr></table>
	{/foreach}


</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</body>
</html>