<?php /* Smarty version 2.6.14, created on 2010-11-15 15:01:42
         compiled from index_reset.tpl */ ?>
<h2><?php echo $this->_tpl_vars['lang']->grab('admin_reset','restart'); ?>
</h2>

<a href='javascript:ask("<?php echo $this->_tpl_vars['lang']->grab('admin_reset','reset_confirm'); ?>
","index.php?screen=reset&amp;action=reset")'><?php echo $this->_tpl_vars['lang']->grab('admin_reset','reset'); ?>
: </a>
<br />
<?php echo $this->_tpl_vars['lang']->grab('admin_reset','reset_info'); ?>

<br /><br />

<a href='javascript:ask("<?php echo $this->_tpl_vars['lang']->grab('admin_reset','reset_confirm'); ?>
","index.php?screen=reset&amp;action=reset&amp;do=soft")'><?php echo $this->_tpl_vars['lang']->grab('admin_reset','soft'); ?>
: </a>
<br />
<?php echo $this->_tpl_vars['lang']->grab('admin_reset','soft_info'); ?>
