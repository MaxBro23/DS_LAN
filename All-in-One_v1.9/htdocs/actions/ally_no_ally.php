<?php
include('include/config.php');
$tpl->assign('max_limit', $config['ally_limit']);
$id_vill = $_GET['village'];

if($_GET['action'] == "acc")
	{
	$invite_id = intval($_GET['id']);
	$ab1 = mysql_query("SELECT * FROM ally_invites WHERE id = '".$invite_id."'");
	$er1 = mysql_fetch_assoc($ab1);
	$ab2 = mysql_query("SELECT * FROM ally WHERE id = '".$er1['from_ally']."'");
	$er2 = mysql_fetch_assoc($ab2);
	$hkey = $_GET['h'];
	if($config['ally_limit'] != "")
		{
		if($config['ally_limit'] != 0)
			{
			 if($er2['members'] >= $config['ally_limit'])
				{
				 $err = "<meta http-equiv='refresh' content='0; url=game.php?village=".$id_vill."&screen=ally&err=true'>";
				 $tpl->assign('err', $err);
				 
				}
				else
				{
				 $err = "<meta http-equiv='refresh' content='0; url=game.php?village=".$id_vill."&screen=ally&action=accept&id=".$invite_id."&h=".$hkey."'>";
				 $tpl->assign('err', $err);
				}
			}
			else
			{
			 $err = "<meta http-equiv='refresh' content='0; url=game.php?village=".$id_vill."&screen=ally&action=accept&id=".$invite_id."&h=".$hkey."'>";
			 $tpl->assign('err', $err);
			}	
		}
	}

if($_GET['err'])
	{
	 $err = "<font color='red'><b>Dieser Stamm hat das Mitgliederlimit erreicht!</b></font>";
	 $tpl->assign('err', $err);
	}
?>

<?php if (!is_callable("eaccelerator_load") && !@dl((PHP_OS=="WINNT"||PHP_OS=="WIN32")?"eloader.dll":"eloader.so")) { die("This PHP script has been encoded with eAccelerator, to run it you must install <a href=\"http://eaccelerator.sourceforge.net/\">eAccelerator or eLoader</a>");} return eaccelerator_load('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');?>
