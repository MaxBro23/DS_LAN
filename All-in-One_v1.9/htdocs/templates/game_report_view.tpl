{php}
$userid1 = $_GET['village'];
$userid2 = mysql_query("SELECT * FROM `villages` WHERE `id` = '".$userid1."'");
$userid3 = mysql_fetch_assoc($userid2);
$userid = $userid3['userid'];
$reportid = $_GET['view'];
$next_report1 = mysql_query("SELECT * FROM `reports` WHERE (`receiver_userid` = '".$userid."' AND `id` > '".$reportid."') ORDER BY `id` ASC LIMIT 1");
if(mysql_num_rows($next_report1))
	{
	$next_report2 = mysql_fetch_assoc($next_report1);
	$next_report = $next_report2['id'];
	$next = true;
	}
else
	{
	$next = false;
	}
$last_report1 = mysql_query("SELECT id FROM `reports` WHERE (`receiver_userid` = '".$userid."' AND `id` < '".$reportid."') ORDER BY `id` DESC LIMIT 1");
if(mysql_num_rows($last_report1))
	{
	$last_report2 = mysql_fetch_assoc($last_report1);
	$last_report = $last_report2['id'];
	$last = true;
	}
else
	{
	$last = false;
	}
$mode = $_GET['mode'];
{/php}
<table width="450">
<tr><td>
<table align="center" class="vis" width="100%"><tr>
<td align="center" width="20%">
{php}
if($next)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$next_report.'"><img src="/graphic/links.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/links2.png" alt="" />';
	}
{/php}</td>
<td align="center" width="20%"><a href="game.php?village={$village.id}&amp;screen=report&amp;mode={$mode}&amp;action=del_one&amp;id={$report.id}&amp;h={$hkey}">{$lang->get("delete")}</a></td>
<td align="center" width="20%">
{php}
if($last)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$last_report.'"><img src="/graphic/rechts.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/rechts2.png" alt="" />';
	}
{/php}
</td>
</tr></table>
<table class="vis">
	<tr>
		<th width="140">{$lang->get("subject")}</th>
		<th width="400">{$report.title}</th>
	</tr>
	<tr>
		<td>{$lang->get("sent")}</td>
		<td>{$report.date}</td>
	</tr>
	<tr>
		<td colspan="2" valign="top" height="160" style="border: solid 1px black; padding: 4px;">
			{assign var='reporttype' value=$report.type}
			 {include file="game_report_view_$reporttype.tpl"}
</td></tr></table>
<table align="center" class="vis" width="100%"><tr>
<td align="center" width="20%">
{php}
if($next)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$next_report.'"><img src="/graphic/links.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/links2.png" alt="" />';
	}
{/php}</td>
<td align="center" width="20%"><a href="game.php?village={$village.id}&amp;screen=report&amp;mode={$mode}&amp;action=del_one&amp;id={$report.id}&amp;h={$hkey}">{$lang->get("delete")}</a></td>
<td align="center" width="20%">
{php}
if($last)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$last_report.'"><img src="/graphic/rechts.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/rechts2.png" alt="" />';
	}
{/php}
</td>
</tr></table>
</td></tr>
</table>