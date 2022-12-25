<?php /* Smarty version 2.6.14, created on 2010-11-29 21:24:47
         compiled from index_start_buildings.tpl */ ?>
<h2><?php echo $this->_tpl_vars['lang']->grab('admin_start_buildings','start_buildings'); ?>
</h2>
<?php echo $this->_tpl_vars['lang']->grab('admin_start_buildings','info'); ?>

<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<br /><br /><font class="error"><?php echo $this->_tpl_vars['error']; ?>
</font><br />
<?php endif; ?>
<form method="post" action="index.php?screen=start_buildings&action=edit">
	<table class="vis">
		<tr>
			<th><?php echo $this->_tpl_vars['lang']->grab('admin_start_buildings','building'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->grab('admin_start_buildings','stage'); ?>
</th>
		</tr>
		<?php $_from = $this->_tpl_vars['buildings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname'] => $this->_tpl_vars['arr']):
?>
			<tr>
				<td><img src="../graphic/buildings/<?php echo $this->_tpl_vars['dbname']; ?>
.png"> <?php echo $this->_tpl_vars['arr']['name']; ?>
:</td>
				<td><input type="text" size="4" name="<?php echo $this->_tpl_vars['dbname']; ?>
" value="<?php echo $this->_tpl_vars['arr']['stage']; ?>
"></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="2" align="center"><input name="standard" type="submit" value="<?php echo $this->_tpl_vars['lang']->grab('admin_start_buildings','standard'); ?>
"> <input type="submit" value="<?php echo $this->_tpl_vars['lang']->grab('admin_start_buildings','save'); ?>
"></td>
		</tr>
	</table>
</form>