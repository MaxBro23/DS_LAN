<?php /* Smarty version 2.6.14, created on 2022-12-24 01:25:26
         compiled from game_ranking_kill_player_att.tpl */ ?>
<table class="vis">
<tr>
	<th width="60"><?php echo $this->_tpl_vars['lang']->grab('ranking','rank'); ?>
</th>
	<th width="160"><?php echo $this->_tpl_vars['lang']->grab('ranking','name'); ?>
</th>
	<th width="100"><?php echo $this->_tpl_vars['lang']->grab('ranking','defeated'); ?>
</th>
</tr>
	<?php $_from = $this->_tpl_vars['ranks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['item']):
?>
		<tr <?php echo $this->_tpl_vars['ranks'][$this->_tpl_vars['id']]['mark']; ?>
>
			<td><?php echo $this->_tpl_vars['ranks'][$this->_tpl_vars['id']]['rang']; ?>
</td>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=info_player&id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['ranks'][$this->_tpl_vars['id']]['username']; ?>
</a></td>
			<td><?php echo $this->_tpl_vars['ranks'][$this->_tpl_vars['id']]['killed_units']; ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>

<table class="vis" width="100%"><tr>
<?php if ($this->_tpl_vars['site'] != 1): ?>
	<td align="center">
	<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=ranking&amp;mode=kill_player&amp;type=<?php echo $this->_tpl_vars['type']; ?>
&amp;site=<?php echo $this->_tpl_vars['site']-1; ?>
">&lt;&lt;&lt; <?php echo $this->_tpl_vars['lang']->grab('ranking','up'); ?>
</a></td>
<?php endif; ?>
<td align="center">
<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=ranking&amp;mode=kill_player&amp;type=<?php echo $this->_tpl_vars['type']; ?>
&amp;site=<?php echo $this->_tpl_vars['site']+1; ?>
"><?php echo $this->_tpl_vars['lang']->grab('ranking','down'); ?>
 &gt;&gt;&gt;</a></td>
</tr></table>