<?php /* Smarty version 2.6.14, created on 2022-12-24 00:48:35
         compiled from game_info_village.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'format_number', 'game_info_village.tpl', 6, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['lang']->get('village'); ?>
 <?php echo $this->_tpl_vars['info_village']['name']; ?>
</h2>

<table class="vis">
<tr><th colspan="2"><?php echo $this->_tpl_vars['info_village']['name']; ?>
</th></tr>
<tr><td width="80"><?php echo $this->_tpl_vars['lang']->get('coords'); ?>
:</td><td><?php echo $this->_tpl_vars['info_village']['x']; ?>
|<?php echo $this->_tpl_vars['info_village']['y']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('points'); ?>
:</td><td width="180"><?php echo ((is_array($_tmp=$this->_tpl_vars['info_village']['points'])) ? $this->_run_mod_handler('format_number', true, $_tmp) : format_number($_tmp)); ?>
</td></tr>
<?php if (empty ( $this->_tpl_vars['info_user']['username'] )): ?>
	<tr><td><?php echo $this->_tpl_vars['lang']->get('player'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=0"></a></td></tr>
<?php else: ?>
	<tr><td><?php echo $this->_tpl_vars['lang']->get('player'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['info_village']['userid']; ?>
"><?php echo $this->_tpl_vars['info_user']['username']; ?>
</a></td></tr>
<?php endif; ?>

<?php if (empty ( $this->_tpl_vars['info_ally']['short'] )): ?>
	<tr><td><?php echo $this->_tpl_vars['lang']->get('tribe'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_ally&amp;id=0"></a></td></tr>
<?php else: ?>
	<tr><td><?php echo $this->_tpl_vars['lang']->get('tribe'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_ally&amp;id=<?php echo $this->_tpl_vars['info_ally']['id']; ?>
"><?php echo $this->_tpl_vars['info_ally']['short']; ?>
</a></td></tr>
<?php endif; ?>

<tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['info_village']['x']; ?>
&amp;y=<?php echo $this->_tpl_vars['info_village']['y']; ?>
">&raquo; <?php echo $this->_tpl_vars['lang']->get('map'); ?>
</a></th></tr>
<tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;mode=command&amp;target=<?php echo $this->_tpl_vars['info_village']['id']; ?>
">&raquo; <?php echo $this->_tpl_vars['lang']->get('send_troops'); ?>
</a></th></tr>
<?php if ($this->_tpl_vars['can_send_ress']): ?><tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=market&amp;mode=send&amp;target=<?php echo $this->_tpl_vars['info_village']['id']; ?>
">&raquo; <?php echo $this->_tpl_vars['lang']->get('send_ress'); ?>
</a></th></tr><?php endif; ?>
<?php if ($this->_tpl_vars['user']['id'] == $this->_tpl_vars['info_village']['userid']): ?><tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['info_village']['id']; ?>
&amp;screen=overview">&raquo; <?php echo $this->_tpl_vars['lang']->get('overview'); ?>
</a></th></tr><?php endif; ?>
</table>