<?php /* Smarty version 2.6.14, created on 2010-11-13 23:25:52
         compiled from ../templates/index_login.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['lang']->grab('admin_index_login','administration'); ?>
 <?php echo $this->_tpl_vars['lang']->grab('admin_index_login','tw'); ?>
</title>
<link rel="stylesheet" type="text/css" href="../stamm.css" />
<script src="../script.js?1159978916" type="text/javascript"></script>
</head>
<body style="margin-top:6px;">
<table class="main" width="840" align="center">
<tr>
<td style="padding:2px;">
	<h2><?php echo $this->_tpl_vars['lang']->grab('admin_index_login','administration'); ?>
 <?php echo $this->_tpl_vars['lang']->grab('admin_index_login','login'); ?>
</h2>
	<form method="POST" action="index.php?action=login">
		<?php echo $this->_tpl_vars['lang']->grab('admin_index_login','password'); ?>
: <input type="password" name="pw" value=""><br /><input type="submit" value="<?php echo $this->_tpl_vars['lang']->grab('admin_index_login','login'); ?>
">
	</form><br /><br />
	<?php if ($this->_tpl_vars['config']['master_pw'] == 'editme'): ?>
		<h4><?php echo $this->_tpl_vars['lang']->grab('admin_index_login','pw_to_login'); ?>
</h4>
      <?php echo $this->_tpl_vars['lang']->grab('admin_index_login','info'); ?>

	<?php endif; ?>
</td></tr></table>
</body>
</html>