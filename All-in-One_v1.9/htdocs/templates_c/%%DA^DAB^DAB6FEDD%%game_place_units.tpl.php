<?php /* Smarty version 2.6.14, created on 2022-12-24 00:58:27
         compiled from game_place_units.tpl */ ?>
<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<div style="color:red; font-size:large"><?php echo $this->_tpl_vars['error']; ?>
</div>
<?php endif; ?>

<h3><?php echo $this->_tpl_vars['lang']->get('defense'); ?>
</h3>

<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;mode=units&amp;action=command_other&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post">

<table class="vis" width="100%">
<tr><th><?php echo $this->_tpl_vars['lang']->get('origin'); ?>
</th><?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?><th width="40"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th><?php endforeach; endif; unset($_from); ?></tr>

<tr>
	<td><?php echo $this->_tpl_vars['lang']->get('this_village'); ?>
</td>
	<?php $_from = $this->_tpl_vars['own_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><td><?php echo $this->_tpl_vars['num_units']; ?>
</td><?php else: ?><td class="hidden">0</td><?php endif;  endforeach; endif; unset($_from); ?>
</tr>

<?php $_from = $this->_tpl_vars['in_my_village_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['arr']):
?>
	<tr>
		<td><input name="id_<?php echo $this->_tpl_vars['id']; ?>
" type="checkbox" />  <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=info_village&id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['in_my_village_units'][$this->_tpl_vars['id']]['villagename']; ?>
 (<?php echo $this->_tpl_vars['in_my_village_units'][$this->_tpl_vars['id']]['x']; ?>
|<?php echo $this->_tpl_vars['in_my_village_units'][$this->_tpl_vars['id']]['y']; ?>
)</a></td>
		<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname']):
?>
			<?php if ($this->_tpl_vars['in_my_village_units'][$this->_tpl_vars['id']][$this->_tpl_vars['dbname']] > 0): ?>
				<td><?php echo $this->_tpl_vars['in_my_village_units'][$this->_tpl_vars['id']][$this->_tpl_vars['dbname']]; ?>
</td>
			<?php else: ?>
				<td class="hidden">0</td>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
<?php endforeach; endif; unset($_from); ?>

<tr>
	<th><?php echo $this->_tpl_vars['lang']->get('all_together'); ?>
</th>
	<?php $_from = $this->_tpl_vars['all_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><th><?php echo $this->_tpl_vars['num_units']; ?>
</th><?php else: ?><th class="hidden">0</th><?php endif;  endforeach; endif; unset($_from); ?>

</tr>
</table>

<?php if (count ( $this->_tpl_vars['in_my_village_units'] ) > 0): ?>
	<table align="left">
	<tr><td><input type="submit" name="back" value="<?php echo $this->_tpl_vars['lang']->get('send_back'); ?>
" /></td></tr>
	</table>
<?php endif; ?>
</form>

<?php if (count ( $this->_tpl_vars['outside_village_units'] ) > 0): ?>
	<br style="clear:both;" />
	<h3><?php echo $this->_tpl_vars['lang']->get('units_other_villages'); ?>
</h3>
	
	<table class="vis">
	<tr><th width="320"><?php echo $this->_tpl_vars['lang']->get('village'); ?>
</th>
	<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?><th width="40"><img src="graphic/unit/overview/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th><?php endforeach; endif; unset($_from); ?>
	<th><?php echo $this->_tpl_vars['lang']->get('call_back'); ?>
</th></tr>
	
		<?php $_from = $this->_tpl_vars['outside_village_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['arr']):
?>
			<tr>
	            <td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['outside_village_units'][$this->_tpl_vars['id']]['villagename']; ?>
 (<?php echo $this->_tpl_vars['outside_village_units'][$this->_tpl_vars['id']]['x']; ?>
|<?php echo $this->_tpl_vars['outside_village_units'][$this->_tpl_vars['id']]['y']; ?>
)</a></td>
				<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname']):
?>
					<?php if ($this->_tpl_vars['outside_village_units'][$this->_tpl_vars['id']][$this->_tpl_vars['dbname']] > 0): ?>
						<td><?php echo $this->_tpl_vars['outside_village_units'][$this->_tpl_vars['id']][$this->_tpl_vars['dbname']]; ?>
</td>
					<?php else: ?>
						<td class="hidden">0</td>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				
				<td>
					<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;mode=units&amp;try=back&amp;unit_id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['lang']->get('some'); ?>
</a> -
					<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;mode=units&amp;action=all_back&amp;unit_id=<?php echo $this->_tpl_vars['id']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('all'); ?>
</a>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		
	</table>
<?php endif; ?>