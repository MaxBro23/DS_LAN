<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->grab("intro", "what")}</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script src="script.js?1159978916" type="text/javascript"></script>
</head>

<body>
<table class="main" width="100%" align="center"><tr><td>
<h2>{$lang->grab("intro", "tribalwars")}</h2>

<table>
<tr><td valign="top"><img src="{$graphic}" alt="" /></td><td valign="top">{$text}</td>
</tr>
</table>
<br />

<table width="100%"><tr>
{if $page>="2"}
  <td align="center"><h3><a href="intro.php?page={$page-1}">&laquo; {$lang->grab("intro", "back")}</a></h3></td>
{/if}
<td align="center"><h2><a href="register.php">&raquo; {$lang->grab("intro", "register")} &laquo;</a></h2></td>
{if $page<="3"}
<td align="center"><h3><a href="intro.php?page={$page+1}">&raquo; {$lang->grab("intro", "continue")}</a></h3></td>
{/if}
</tr></table>

</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</body>
</html>
