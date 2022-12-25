<?php /* Smarty version 2.6.14, created on 2022-12-24 02:59:40
         compiled from game_overview_villages_commands.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'format_time', 'game_overview_villages_commands.tpl', 11, false),)), $this); ?>
<table class="vis">
<tr><th><?php echo $this->_tpl_vars['lang']->get('command'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('home'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('arrival'); ?>
</th>
		<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?>
			<th width="30"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th>
		<?php endforeach; endif; unset($_from); ?>
</tr>
		<?php $_from = $this->_tpl_vars['my_movements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['array']):
?>
			<tr class="row_a">
				<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_command&amp;id=<?php echo $this->_tpl_vars['array']['id']; ?>
&amp;type=own"><?php echo $this->_tpl_vars['array']['message']; ?>
</a></td>
				<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['array']['homevillageid']; ?>
"><?php echo $this->_tpl_vars['array']['homevillagename']; ?>
</a> <a href="game.php?village=<?php echo $this->_tpl_vars['array']['homevillageid']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a></td>
				<td><?php echo $this->_tpl_vars['lang']->get('in'); ?>
 <span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['arrival_in'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span></td>
				<?php $_from = $this->_tpl_vars['array']['units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num']):
?>
					<?php if ($this->_tpl_vars['num'] == 0): ?>
						<td class="hidden">0</td>
					<?php else: ?>
						<td><?php echo $this->_tpl_vars['num']; ?>
</td>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
		<?php endforeach; endif; unset($_from); ?>	
</table>