<?php /* Smarty version 2.6.14, created on 2010-11-13 15:46:10
         compiled from ../templates/index.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['lang']->grab('admin_index_login','administration'); ?>
 <?php echo $this->_tpl_vars['lang']->grab('admin_index_login','tw'); ?>
</title>
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
				<tr><th><?php echo $this->_tpl_vars['lang']->grab('admin_index','main_functions'); ?>
</th></tr>
				<tr><td><a href="index.php?screen=startpage"><?php echo $this->_tpl_vars['lang']->grab('admin_index','startpage'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=refugee_camp"><?php echo $this->_tpl_vars['lang']->grab('admin_index','refugee_camp'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=mail"><?php echo $this->_tpl_vars['lang']->grab('admin_index','mail'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=start_buildings"><?php echo $this->_tpl_vars['lang']->grab('admin_index','start_buildings'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=reset"><?php echo $this->_tpl_vars['lang']->grab('admin_index','reset'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=save_round"><?php echo $this->_tpl_vars['lang']->grab('admin_index','save_round'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=debugger"><?php echo $this->_tpl_vars['lang']->grab('admin_index','debugger'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?screen=logs"><?php echo $this->_tpl_vars['lang']->grab('admin_index','logs'); ?>
</a></td></tr>
				 <tr><td><a href="index.php?action=logout"><?php echo $this->_tpl_vars['lang']->grab('admin_index','logout'); ?>
</a></td></tr>
			 </table>
			 <?php if (count ( $this->_tpl_vars['extern_menue'] ) != 0): ?>
			<table class="menueadmin" width="100%">
				<tr><th><?php echo $this->_tpl_vars['lang']->grab('admin_index','extern'); ?>
</th></tr>

				
					<?php $_from = $this->_tpl_vars['extern_menue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['link']):
?>
						<tr><td><a href="index.php?screen=<?php echo $this->_tpl_vars['link']; ?>
"><?php echo $this->_tpl_vars['name']; ?>
</a></td></tr>
					<?php endforeach; endif; unset($_from); ?>
				
			 </table>
			<?php endif; ?>
		</td></tr></table>
	



</td><td width="*" valign="top">


	<table class="main" width="100%">
	<tr>
	<td style="padding:2px;">
	
	<?php if (in_array ( $this->_tpl_vars['screen'] , $this->_tpl_vars['allow_screens'] )): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "index_".($this->_tpl_vars['screen']).".tpl", 'smarty_include_vars' => array('title' => 'foo')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<p align="right" style="font-size: 7pt; margin-top:0px; margin-bottom:0px"><?php echo $this->_tpl_vars['lang']->grab('admin_index','generated'); ?>
 <?php echo $this->_tpl_vars['load_msec']; ?>
ms
	<?php echo $this->_tpl_vars['lang']->grab('admin_index','server_time'); ?>
: <span id="serverTime"><?php echo $this->_tpl_vars['servertime']; ?>
</span></p>
	</td>
	</tr>
	</table>

</td></tr></table>

<script type="text/javascript">startTimer();</script>
</body>
</html>