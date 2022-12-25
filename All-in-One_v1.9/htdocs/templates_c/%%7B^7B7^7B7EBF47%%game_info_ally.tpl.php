<?php /* Smarty version 2.6.14, created on 2022-12-24 00:52:19
         compiled from game_info_ally.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'format_number', 'game_info_ally.tpl', 8, false),)), $this); ?>
<table><tr><td valign="top">

<table class="vis" width="100%">
<tr><th colspan="2"><?php echo $this->_tpl_vars['lang']->grab('ally_profile','properties'); ?>
</th></tr>
<tr><td width="100"><?php echo $this->_tpl_vars['lang']->grab('ally_profile','name'); ?>
:</td><td><?php echo $this->_tpl_vars['info']['name']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','tag'); ?>
:</td><td><?php echo $this->_tpl_vars['info']['short']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','members'); ?>
:</td><td><?php echo $this->_tpl_vars['info']['members']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','points_40'); ?>
:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['best_points'])) ? $this->_run_mod_handler('format_number', true, $_tmp) : format_number($_tmp)); ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','points'); ?>
:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['points'])) ? $this->_run_mod_handler('format_number', true, $_tmp) : format_number($_tmp)); ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','points_average'); ?>
:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['cutthroungt'])) ? $this->_run_mod_handler('format_number', true, $_tmp) : format_number($_tmp)); ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','rank'); ?>
:</td><td><?php echo $this->_tpl_vars['info']['rank']; ?>
</td></tr>

<tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','hp'); ?>
:</td><td><a href="<?php echo $this->_tpl_vars['ally']['homepage']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ally']['homepage']; ?>
</a></td></tr>
<?php if (! empty ( $this->_tpl_vars['ally']['irc'] )): ?>
    <tr><td><?php echo $this->_tpl_vars['lang']->grab('ally_profile','irc'); ?>
:</td><td><?php echo $this->_tpl_vars['ally']['irc']; ?>
</td></tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fusion_ally']): ?>
<tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_ally&amp;id=<?php echo $this->_tpl_vars['info']['id']; ?>
&action=fusion">&raquo; <?php echo $this->_tpl_vars['lang']->grab('ally_profile','fusion'); ?>
</a></td></tr>
<?php endif; ?>
<tr><td colspan="2"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_member&amp;id=<?php echo $this->_tpl_vars['info']['id']; ?>
">&raquo; <?php echo $this->_tpl_vars['lang']->grab('ally_profile','memberlist'); ?>
</a></td></tr>
</table>

</td><td valign="top">

<table class="vis" width="300">
<?php if (! empty ( $this->_tpl_vars['info']['image'] )): ?>
	<tr><td align="center"><img src="./graphic/ally/<?php echo $this->_tpl_vars['info']['image']; ?>
"></td></tr>
<?php endif; ?>
<tr><th><?php echo $this->_tpl_vars['lang']->grab('ally_profile','desc'); ?>
</th></tr>
<tr><td align="center"><?php echo $this->_tpl_vars['info']['description']; ?>
</td></tr>
</table>

</td></tr></table>
<?php echo $this->_tpl_vars['error']; ?>