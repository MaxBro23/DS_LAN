<?php /* Smarty version 2.6.14, created on 2022-12-24 00:52:24
         compiled from game_info_player.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'format_number', 'game_info_player.tpl', 7, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['lang']->get('player'); ?>
 <?php echo $this->_tpl_vars['info_user']['username']; ?>
</h2>

<table><tr><td valign="top">

<table class="vis" width="100%">
	<tr><th colspan="2"><?php echo $this->_tpl_vars['info_user']['username']; ?>
</th></tr>
	<tr><td width="80"><?php echo $this->_tpl_vars['lang']->get('points'); ?>
:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['info_user']['points'])) ? $this->_run_mod_handler('format_number', true, $_tmp) : format_number($_tmp)); ?>
</td></tr>
	<tr><td><?php echo $this->_tpl_vars['lang']->get('rank'); ?>
:</td><td><?php echo $this->_tpl_vars['info_user']['rang']; ?>
</td></tr>
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
&amp;screen=mail&amp;mode=new&amp;player=<?php echo $this->_tpl_vars['info_user']['id']; ?>
">&raquo; <?php echo $this->_tpl_vars['lang']->get('write_mail'); ?>
</a></td></tr>
		<?php if ($this->_tpl_vars['can_invite']): ?>
			<tr><td colspan="2"><a href="javascript:ask('<?php echo $this->_tpl_vars['invite_confirm']; ?>
', 'game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=ally&mode=invite&action=invite_id&id=<?php echo $this->_tpl_vars['info_user']['id']; ?>
&h=<?php echo $this->_tpl_vars['hkey']; ?>
')">&raquo; <?php echo $this->_tpl_vars['lang']->get('invite'); ?>
</a></td></tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['fusion']): ?>
		<tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['info_user']['id']; ?>
&action=fusion">&raquo; <?php echo $this->_tpl_vars['lang']->get('fusion'); ?>
</a></td></tr>
		<?php endif; ?>
		
	</table><br />
	
	<?php echo $this->_tpl_vars['error']; ?>





<table class="vis" width="100%">
	<tr><th width="180"><?php echo $this->_tpl_vars['lang']->get('villages'); ?>
</th><th width="80"><?php echo $this->_tpl_vars['lang']->get('coords'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('points'); ?>
</th></tr>
		<?php $_from = $this->_tpl_vars['villages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['arr']):
?>
			<tr><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['arr']['name']; ?>
</a></td><td>(<?php echo $this->_tpl_vars['arr']['x']; ?>
|<?php echo $this->_tpl_vars['arr']['y']; ?>
)</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['arr']['points'])) ? $this->_run_mod_handler('format_number', true, $_tmp) : format_number($_tmp)); ?>
</td></tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>

</td><td align="right" valign="top" width="240">

	
<table class="vis" width="100%">
	<tr><th colspan="2"><?php echo $this->_tpl_vars['lang']->get('profile'); ?>
</th></tr>
	<?php if (! empty ( $this->_tpl_vars['info_user']['image'] )): ?>
		<tr><td colspan="2" align="center"><img src="graphic/player/<?php echo $this->_tpl_vars['info_user']['image']; ?>
" alt="Profilbild" /></td></tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['age'] != -1): ?>
		<tr><td><?php echo $this->_tpl_vars['lang']->get('age'); ?>
:</td><td><?php echo $this->_tpl_vars['age']; ?>
</td></tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['sex'] != -1): ?>
		<tr><td><?php echo $this->_tpl_vars['lang']->get('sex'); ?>
:</td><td><?php echo $this->_tpl_vars['sex']; ?>
</td></tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['info_user']['home'] != ''): ?>
		<tr><td><?php echo $this->_tpl_vars['lang']->get('location'); ?>
:</td><td><?php echo $this->_tpl_vars['info_user']['home']; ?>
</td></tr>
	<?php endif; ?>
			
	</table>
	<br />
	<?php if (! empty ( $this->_tpl_vars['info_user']['personal_text'] )): ?>
		<table class="vis" width="100%">
			<tr><th><?php echo $this->_tpl_vars['lang']->get('personal_text'); ?>
</th></tr>
			<tr><td align="center"><?php echo $this->_tpl_vars['info_user']['personal_text']; ?>
</td></tr>
		</table>
	<?php endif; ?>
</td></tr></table>