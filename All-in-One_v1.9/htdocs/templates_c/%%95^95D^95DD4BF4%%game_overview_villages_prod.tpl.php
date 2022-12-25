<?php /* Smarty version 2.6.14, created on 2022-12-24 01:59:08
         compiled from game_overview_villages_prod.tpl */ ?>
<table class="vis">
<tr>
<th><?php echo $this->_tpl_vars['lang']->get('village'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('points'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('ress'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('storage'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('farm'); ?>
</th>
<th><?php echo $this->_tpl_vars['lang']->get('build'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('research'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('recruit'); ?>
</th>
</tr>

<?php $_from = $this->_tpl_vars['villages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arr_id'] => $this->_tpl_vars['id']):
?>
	<tr>
		<td><?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['attacks'] != 0): ?><img src="graphic/command/attack.png"> <?php endif; ?><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&screen=overview"><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['name']; ?>
 (<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['x']; ?>
|<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['y']; ?>
)</a> <a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=place&x=<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['x']; ?>
&y=<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['y']; ?>
"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </td>
		<td><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['points']; ?>
</td>
		<td><img src="graphic/holz.png" title="Holz" alt="" /><?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_wood'] == $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']): ?><span class="warn"><?php endif;  echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_wood'];  if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_wood'] == $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']): ?></span><?php endif; ?> <img src="graphic/lehm.png" title="Lehm" alt="" /><?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_stone'] == $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']): ?><span class="warn"><?php endif;  echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_stone'];  if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_stone'] == $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']): ?></span><?php endif; ?> <img src="graphic/eisen.png" title="Eisen" alt="" /><?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_iron'] == $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']): ?><span class="warn"><?php endif;  echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_iron'];  if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_iron'] == $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']): ?></span><?php endif; ?> </td>
		<td><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_storage']; ?>
</td>
		<td><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_bh']; ?>
/<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_farm']; ?>
</td>
		<?php if (isset ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_build']['buildname'] )): ?>
			<td><b><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_build']['buildname']; ?>
</b><br /><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_build']['end_time']; ?>
</td>

		<?php else: ?>
		    <td></td>
		<?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_tec']['tecname'] )): ?>
			<td><b><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_tec']['tecname']; ?>
</b><br><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_tec']['end_time']; ?>
</td>

		<?php else: ?>
		    <td></td>
		<?php endif; ?>
		<td><?php $_from = $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['recruits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_rec'] => $this->_tpl_vars['arr_rec']):
?><img src="graphic/unit/<?php echo $this->_tpl_vars['arr_rec']['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['arr_rec']['num']; ?>
 <?php echo $this->_tpl_vars['arr_rec']['unit']; ?>
" alt=""><?php endforeach; endif; unset($_from); ?></td>
	</tr>
<?php endforeach; endif; unset($_from); ?>

</table>