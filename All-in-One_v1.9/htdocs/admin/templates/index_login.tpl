<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->grab("admin_index_login", "administration")} {$lang->grab("admin_index_login", "tw")}</title>
<link rel="stylesheet" type="text/css" href="../stamm.css" />
<script src="../script.js?1159978916" type="text/javascript"></script>
</head>
<body style="margin-top:6px;">
<table class="main" width="840" align="center">
<tr>
<td style="padding:2px;">
	<h2>{$lang->grab("admin_index_login", "administration")} {$lang->grab("admin_index_login", "login")}</h2>
	<form method="POST" action="index.php?action=login">
		{$lang->grab("admin_index_login", "password")}: <input type="password" name="pw" value=""><br /><input type="submit" value="{$lang->grab("admin_index_login", "login")}">
	</form><br /><br />
	{if $config.master_pw=='editme'}
		<h4>{$lang->grab("admin_index_login", "pw_to_login")}</h4>
      {$lang->grab("admin_index_login", "info")}
	{/if}
</td></tr></table>
</body>
</html>