<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->get("create_village")}</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1159978916" type="text/javascript"></script>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>

<body >
<table class="main" width="800" align="center"><tr><td>
<h3>Neues Dorf erbauen</h3>

{if !empty($ennobled_by)}
<p>{$lang->get("ennobled_by")} <strong>{$ennobled_by}</strong> {$lang->get("ennobled")} {$lang->get("citizens")}</p>
{/if}


<h4>{$lang->get("direction")}</h4>

<table class="vis"><tr><td width="200">
<form action="create_village.php?action=create" method="post">
<label><input type="radio" name="direction" value="random" checked="checked" />{$lang->get("random")}</label><br />
<label><input type="radio" name="direction" value="nw" />{$lang->get("northwest")}</label><br />
<label><input type="radio" name="direction" value="no" />{$lang->get("northeast")}</label><br />
<label><input type="radio" name="direction" value="sw" />{$lang->get("southwest")}</label><br />
<label><input type="radio" name="direction" value="so" />{$lang->get("southeast")}</label><br />
<br /><input type="submit" value="{$lang->get("confirm")}" />
</form>

</td><td>
<img src="graphic/richtung/richtung.png" alt="" />
</td></tr></table>



</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</body>
</html>
