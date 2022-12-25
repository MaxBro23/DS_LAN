<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->grab("admin_index_login", "administration")} {$lang->grab("admin_index_login", "tw")}</title>
<link rel="stylesheet" type="text/css" href="../stamm.css" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script src="../script.js?1159978916" type="text/javascript"></script>
</head>
<body style="margin-top:6px;">

<table cellspacing="0" width="100%"><tr><td width="250" valign="top">

	<table class="main" width="100%"><tr><td>
		<tr>
		<td>
			<table class="menueadmin" width="100%">
				<tr><th>{$lang->grab("admin_index", "main_functions")}</th></tr>
				<tr><td><a href="index.php?screen=startpage">{$lang->grab("admin_index", "startpage")}</a></td></tr>
				 <tr><td><a href="index.php?screen=refugee_camp">{$lang->grab("admin_index", "refugee_camp")}</a></td></tr>
				 <tr><td><a href="index.php?screen=mail">{$lang->grab("admin_index", "mail")}</a></td></tr>
				 <tr><td><a href="index.php?screen=start_buildings">{$lang->grab("admin_index", "start_buildings")}</a></td></tr>
				 <tr><td><a href="index.php?screen=reset">{$lang->grab("admin_index", "reset")}</a></td></tr>
				 <tr><td><a href="index.php?screen=save_round">{$lang->grab("admin_index", "save_round")}</a></td></tr>
				 <tr><td><a href="index.php?screen=debugger">{$lang->grab("admin_index", "debugger")}</a></td></tr>
				 <tr><td><a href="index.php?screen=logs">{$lang->grab("admin_index", "logs")}</a></td></tr>
				 <tr><td><a href="index.php?action=logout">{$lang->grab("admin_index", "logout")}</a></td></tr>
			 </table>
			 {if count($extern_menue)!=0}
			<table class="menueadmin" width="100%">
				<tr><th>{$lang->grab("admin_index", "extern")}</th></tr>

				
					{foreach from=$extern_menue item=link key=name}
						<tr><td><a href="index.php?screen={$link}">{$name}</a></td></tr>
					{/foreach}
				
			 </table>
			{/if}
		</td></tr></table>
	



</td><td width="*" valign="top">


	<table class="main" width="100%">
	<tr>
	<td style="padding:2px;">
	
	{if in_array($screen,$allow_screens)}
		{include file="index_$screen.tpl" title=foo}
	{/if}
	<p align="right" style="font-size: 7pt; margin-top:0px; margin-bottom:0px">{$lang->grab("admin_index", "generated")} {$load_msec}ms
	{$lang->grab("admin_index", "server_time")}: <span id="serverTime">{$servertime}</span></p>
	</td>
	</tr>
	</table>

</td></tr></table>

<script type="text/javascript">startTimer();</script>
</body>
</html>
