<?php /* Smarty version 2.6.14, created on 2011-01-26 16:48:03
         compiled from index_debugger.tpl */ ?>
<h2><?php echo $this->_tpl_vars['lang']->grab('admin_debugger','debugger'); ?>
</h2>
<?php echo $this->_tpl_vars['lang']->grab('admin_debugger','info'); ?>
<br /><br />
	
<?php if ($this->_tpl_vars['done'] == 'attacks'): ?>
<?php echo $this->_tpl_vars['lang']->grab('admin_debugger','attacks_done'); ?>

<?php else: ?>
	<a href="index.php?screen=debugger&action=attacks"><?php echo $this->_tpl_vars['lang']->grab('admin_debugger','attacks'); ?>
</a><br />
    <?php echo $this->_tpl_vars['lang']->grab('admin_debugger','attacks_info'); ?>

<?php endif; ?>