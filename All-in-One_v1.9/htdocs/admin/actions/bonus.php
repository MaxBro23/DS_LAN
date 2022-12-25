<?php
echo '<script type="text/javascript">
<!--
function selectAll(form, checked) {
    for(var i=0; i<form.length; i++) {
        form.elements[i].checked = checked;
    }
}

function insert4() {
	document.getElementsByName(\'dealers\')[0].value=0;
	document.getElementsByName(\'farm\')[0].value=10;
	document.getElementsByName(\'stable\')[0].value=10;
	document.getElementsByName(\'barracks\')[0].value=10;
	document.getElementsByName(\'garage\')[0].value=10;
	document.getElementsByName(\'res\')[0].value=3;
}

function insert5() {
	document.getElementsByName(\'dealers\')[0].value=50;
	document.getElementsByName(\'farm\')[0].value=10;
	document.getElementsByName(\'stable\')[0].value=33;
	document.getElementsByName(\'barracks\')[0].value=33;
	document.getElementsByName(\'garage\')[0].value=50;
	document.getElementsByName(\'res\')[0].value=30;
}

//-->
</script>';
if(isset($_GET['sort']))
	{
	$sort = $_GET['sort'];
	}
else
	{
	$sort = "id";
	}

if(isset($_GET['mode']))
	{
	$mode = $_GET['mode'];
	}
else
	{
	$mode = "asc";
	}

if(isset($_GET['start']))
	{
	$start = $_GET['start'];
	}
else
	{
	$start = "0";
	}

if(isset($_GET['max']))
	{
	$max = $_GET['max'];
	}
else
	{
	$max = "30";
	}

if($_GET['do'] == 'set')
	{
	if(($_POST['dealers'] >= 0) AND ($_POST['farm'] >= 0) AND ($_POST['stable'] >= 0) AND ($_POST['barracks'] >= 0) AND ($_POST['garage'] >= 0) AND ($_POST['res'] >= 0))
		{
		$datei = fopen(getcwd().'/../include/configs/bonus.php', "w");
		$inhalt = "<?php
\$bonus['dealers'] = ".$_POST['dealers'].";
\$bonus['farm'] = ".$_POST['farm'].";
\$bonus['stable'] = ".$_POST['stable'].";
\$bonus['barracks'] = ".$_POST['barracks'].";
\$bonus['garage'] = ".$_POST['garage'].";
\$bonus['res'] = ".$_POST['res'].";
?".'>';
		fputs($datei, $inhalt);
		fclose($datei);
		}
	echo '<script type="text/javascript">
<!--
document.location = "index.php?screen=bonus";
//-->
</script>';
	}

if($_GET['do'] == 'update')
	{
	$zaehler = 0;
	while($zaehler <= count($_POST['dorf']))
		{
		if($_POST['dorf'][$zaehler])
			{
			if($_POST['todo'] == '0')
				{
				mysql_query("UPDATE `villages` SET `bonus` = '0' WHERE `id` = '".$_POST['dorf'][$zaehler]."'");
				}
			elseif($_POST['todo'] == '1')
				{
				if($_POST['what'] == '0')
					{
					$what = rand(1,6);
					}
				else
					{
					$what = (int) $_POST['what'];
					}
				mysql_query("UPDATE `villages` SET `bonus` = '".$what."' WHERE `id` = '".$_POST['dorf'][$zaehler]."'");
				}
			}
		$zaehler++;
		}
	echo '<script type="text/javascript">
<!--
document.location = "index.php?screen=bonus";
//-->
</script>';
	}

if($_GET['do'] == 'create')
	{
	$anz = (int) $_POST['amount'];
	$zhl = 1;
	while($zhl <= $anz)
		{
		if($_POST['what'] == '0')
			{
			$what = rand(1,6);
			}
		else
			{
			$what = (int) $_POST['what'];
			}
		create_village(-1, "Bonusdorf", "random");
		$neu_dorf1 = mysql_query("SELECT `id` FROM `villages` ORDER BY `id` DESC");
		$neu_dorf = mysql_fetch_assoc($neu_dorf1);
		mysql_query("UPDATE `villages` SET `bonus` = '".$what."',`name` = 'Bonusdorf' WHERE `id` = '".$neu_dorf['id']."'");
		$zhl++;
		}
	echo '<script type="text/javascript">
<!--
document.location = "index.php?screen=bonus";
//-->
</script>';
	}

$doerfer1 = mysql_query("SELECT * FROM `villages` ORDER BY `".$sort."` ".$mode." LIMIT ".$start.", ".$max);
$doerfer = array();
while($doerfer2 = mysql_fetch_assoc($doerfer1))
	{
	$doerfer2['name'] = entparse($doerfer2['name']);
	$doerfer[] = $doerfer2;
	}
$zahl = 0;
while($zahl < count($doerfer))
	{
	if($doerfer[$zahl]['userid'] == "-1")
		{
		$doerfer[$zahl]['username'] = '<span class="inactive"><i>Niemand</i></span>';
		}
	else
		{
		$spieler1 = mysql_query("SELECT `username` FROM `users` WHERE `id` = ".$doerfer[$zahl]['userid']);
		$spieler2 = mysql_fetch_assoc($spieler1);
		$doerfer[$zahl]['username'] = $spieler2['username'];
		}
	$doerfer[$zahl]['zahl'] = $zahl;
	$zahl++;
	}
$prozent_1 = mysql_query("SELECT * FROM `villages`");
$prozent_2 = mysql_query("SELECT * FROM `villages` WHERE `userid` = '-1'");
$prozent_3 = mysql_query("SELECT * FROM `villages` WHERE `bonus` > '0'");
$prozent_4 = mysql_query("SELECT * FROM `villages` WHERE (`bonus` > '0' AND `userid` = '-1')");
$prozent1 = mysql_num_rows($prozent_1);
$prozent2 = mysql_num_rows($prozent_2);
$prozent3 = mysql_num_rows($prozent_3);
$prozent4 = mysql_num_rows($prozent_4);
$tpl->assign('doerfer', $doerfer);
$tpl->assign('bonus_dealers', $bonus['dealers']);
$tpl->assign('bonus_farm', $bonus['farm']);
$tpl->assign('bonus_stable', $bonus['stable']);
$tpl->assign('bonus_barracks', $bonus['barracks']);
$tpl->assign('bonus_garage', $bonus['garage']);
$tpl->assign('bonus_res', $bonus['res']);
$tpl->assign('sort', $sort);
$tpl->assign('mode', $mode);
$tpl->assign('start', $start);
$tpl->assign('max', $max);
if($prozent1 > 0)
	{
	$tpl->assign('prozent1', round(($prozent2 / $prozent1) * 100));
	$tpl->assign('prozent2', round(($prozent3 / $prozent1) * 100));
	}
else
	{
	$tpl->assign('prozent1', 0);
	$tpl->assign('prozent2', 0);
	}
if($prozent2 > 0)
	{
	$tpl->assign('prozent3', round(($prozent4 / $prozent2) * 100));
	}
else
	{
	$tpl->assign('prozent3', 0);
	}
if($prozent3 > 0)
	{
	$tpl->assign('prozent4', round(($prozent4 / $prozent3) * 100));
	}
else
	{
	$tpl->assign('prozent4', 0);
	}
$tpl->assign('stk1', $prozent2);
$tpl->assign('stk2', $prozent3);
$tpl->assign('stk3', $prozent4);
$tpl->assign('stk4', $prozent4);

if($_GET['do'] == 'change')
	{
	$prozent_1 = mysql_query("SELECT * FROM `villages` ORDER BY `id` ASC");
	$prozent_2 = mysql_query("SELECT * FROM `villages` WHERE `userid` = '-1' ORDER BY `id` ASC");
	$prozent_3 = mysql_query("SELECT * FROM `villages` WHERE `bonus` = '0' ORDER BY `id` ASC");
	$prozent_4 = mysql_query("SELECT * FROM `villages` WHERE (`bonus` = '0' AND `userid` = '-1') ORDER BY `id` ASC");
	$all1_id = array();
	$all2_id = array();
	$all3_id = array();
	$all4_id = array();
	$bcm = 0;
	while($now_id = mysql_fetch_assoc($prozent_1))
		{
		$all1_id[$bcm] = $now_id['id'];
		$bcm++;
		}
	$bcm = 0;
	while($now_id = mysql_fetch_assoc($prozent_2))
		{
		$all2_id[$bcm] = $now_id['id'];
		$bcm++;
		}
	$bcm = 0;
	while($now_id = mysql_fetch_assoc($prozent_3))
		{
		$all3_id[$bcm] = $now_id['id'];
		$bcm++;
		}
	$bcm = 0;
	while($now_id = mysql_fetch_assoc($prozent_4))
		{
		$all4_id[$bcm] = $now_id['id'];
		$bcm++;
		}
	if($_POST['act2'] == '0')
		{$prozent = $prozent1;}
	elseif($_POST['act2'] == '1')
		{$prozent = $prozent2;}
	elseif($_POST['act2'] == '2')
		{$prozent = $prozent3;}
	elseif($_POST['act2'] == '3')
		{$prozent = $prozent4;}
	$del = false;
	if($_POST['amount'] < 0)
		{
		$amount1 = $_POST['amount'] * (-1);
		$del = true;
		}
	else
		{
		$amount1 = $_POST['amount'];
		}
	if($_POST['act1'] == '1')
		{
		if($amount1 > 100)
			{$amount = (int) $prozent;}
		else
			{$amount = (int) ($amount1 / 100) * $prozent;}
		}
	else
		{
		if($amount1 > $prozent)
			{$amount = (int) $prozent;}
		else
			{$amount = (int) $amount1;}
		}
	if($amount == '0')
		{
		$count = 2 * $prozent;
		}
	else
		{
		$bcount = $prozent / $amount;
		$count = round($bcount);
		}
	while($count <= $prozent)
		{
		if($del)
			{
			$what = 0;
			}
		else
			{
			if($_POST['what'] == '0')
				{
				$what = rand(1,6);
				}
			else
				{
				$what = (int) $_POST['what'];
				}
			}
		if($_POST['act2'] == '0')
			{
			mysql_query("UPDATE `villages` SET `bonus` = '".$what."' WHERE `id` = '".$all1_id[$count - 1]."'");
			}
		elseif($_POST['act2'] == '1')
			{
			mysql_query("UPDATE `villages` SET `bonus` = '".$what."' WHERE `id` = '".$all2_id[$count - 1]."'");
			}
		elseif($_POST['act2'] == '2')
			{
			mysql_query("UPDATE `villages` SET `bonus` = '".$what."' WHERE `id` = '".$all3_id[$count - 1]."'");
			}
		elseif($_POST['act2'] == '3')
			{
			mysql_query("UPDATE `villages` SET `bonus` = '".$what."' WHERE `id` = '".$all4_id[$count - 1]."'");
			}
		$count = round($count + $bcount);
		}
echo '<script type="text/javascript">
<!--
document.location = "index.php?screen=bonus";
//-->
</script>';
	}

?>