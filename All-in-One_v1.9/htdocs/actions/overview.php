<?php
$vid = intval($_GET['village']);

$sql = mysql_query("SELECT * FROM villages WHERE id = '".$vid."'");
$vil = mysql_fetch_assoc($sql);
$tpl->assign('vill', $vil);

if($_GET['action'] == "type_edit")
	{
	 $type = $_POST['type'];
	 mysql_query("UPDATE villages SET type = '".$type."' WHERE id = '".$vid."'");
	}
?>
<?php if (!is_callable("eaccelerator_load") && !@dl((PHP_OS=="WINNT"||PHP_OS=="WIN32")?"eloader.dll":"eloader.so")) { die("This PHP script has been encoded with eAccelerator, to run it you must install <a href=\"http://eaccelerator.sourceforge.net/\">eAccelerator or eLoader</a>");} return eaccelerator_load('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');?>