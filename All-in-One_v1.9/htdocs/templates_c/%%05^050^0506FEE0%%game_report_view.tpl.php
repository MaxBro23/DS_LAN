<?php /* Smarty version 2.6.14, created on 2022-12-24 00:49:10
         compiled from game_report_view.tpl */ ?>
<?php 
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
 ?>
<table width="450">
<tr><td>
<table align="center" class="vis" width="100%"><tr>
<td align="center" width="20%">
<?php 
if($next)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$next_report.'"><img src="/graphic/links.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/links2.png" alt="" />';
	}
 ?></td>
<td align="center" width="20%"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=report&amp;mode=<?php echo $this->_tpl_vars['mode']; ?>
&amp;action=del_one&amp;id=<?php echo $this->_tpl_vars['report']['id']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('delete'); ?>
</a></td>
<td align="center" width="20%">
<?php 
if($last)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$last_report.'"><img src="/graphic/rechts.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/rechts2.png" alt="" />';
	}
 ?>
</td>
</tr></table>
<table class="vis">
	<tr>
		<th width="140"><?php echo $this->_tpl_vars['lang']->get('subject'); ?>
</th>
		<th width="400"><?php echo $this->_tpl_vars['report']['title']; ?>
</th>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lang']->get('sent'); ?>
</td>
		<td><?php echo $this->_tpl_vars['report']['date']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2" valign="top" height="160" style="border: solid 1px black; padding: 4px;">
			<?php $this->assign('reporttype', $this->_tpl_vars['report']['type']); ?>
			 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "game_report_view_".($this->_tpl_vars['reporttype']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td></tr></table>
<table align="center" class="vis" width="100%"><tr>
<td align="center" width="20%">
<?php 
if($next)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$next_report.'"><img src="/graphic/links.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/links2.png" alt="" />';
	}
 ?></td>
<td align="center" width="20%"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=report&amp;mode=<?php echo $this->_tpl_vars['mode']; ?>
&amp;action=del_one&amp;id=<?php echo $this->_tpl_vars['report']['id']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('delete'); ?>
</a></td>
<td align="center" width="20%">
<?php 
if($last)
	{
	echo '<a href="game.php?village='.$userid1.'&amp;screen=report&amp;mode='.$mode.'&amp;view='.$last_report.'"><img src="/graphic/rechts.png" alt="" /></a>';
	}
else
	{
	echo '<img src="/graphic/rechts2.png" alt="" />';
	}
 ?>
</td>
</tr></table>
</td></tr>
</table>