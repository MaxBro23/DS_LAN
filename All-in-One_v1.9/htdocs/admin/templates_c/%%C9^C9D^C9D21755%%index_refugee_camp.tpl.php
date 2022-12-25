<?php /* Smarty version 2.6.14, created on 2010-11-13 23:25:57
         compiled from index_refugee_camp.tpl */ ?>
<h2><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','create'); ?>
</h2>

<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<font class="error"><?php echo $this->_tpl_vars['error']; ?>
</font><br /><br />
<?php endif;  if ($this->_tpl_vars['success']): ?>
  <?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','create_success'); ?>

<?php else: ?>
	<form method="post" action="index.php?screen=refugee_camp&amp;action=create" onSubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th colspan="2"><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','create'); ?>
</th>
			</tr>
			<tr>
				<td width="350"><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','amount'); ?>
</td>
				<td><input type="text" name="num" value="0"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','do_create'); ?>
" onload="this.disabled=false;"> <?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','info'); ?>
</td>
			</tr>

		</table>
	</form>

<h2><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','delete'); ?>
</h2>

<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
  <font class="error"><?php echo $this->_tpl_vars['error']; ?>
</font><br /><br />
<?php endif; ?>

<form method="post" action="index.php?screen=refugee_camp&action=delete">
  <table class="vis">
    <th colspan="2" width="200"><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','delete'); ?>
</th>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','amount_refugee'); ?>
</td>
      <td width="50" align="center"><b><?php echo $this->_tpl_vars['camps']; ?>
</b></td>
    </tr>
    <tr>
      <td colspan="2"><input type="checkbox" name="deleteAll" /> <?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','del_all'); ?>
</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="<?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','do_delete'); ?>
" /></td>
    </tr>
  </table>
</form>
<?php if (! $this->_tpl_vars['filled']): ?>
<h2><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','fill'); ?>
</h2>
<form method="post" action="index.php?screen=refugee_camp&action=fill">
  <table class="vis">
    <th width="100"><?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','units'); ?>
</th>
      <?php $_from = $this->_tpl_vars['units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?>
        <tr>
          <td><img src="../graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" /> <input type="text" name="<?php echo $this->_tpl_vars['dbname']; ?>
" size="5" /></td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
        <tr>
          <td colspan="2"><input type="submit" value="<?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','fill_villages'); ?>
" /></td>
        </tr>
  </table>
</form>
<?php else: ?>
  <?php echo $this->_tpl_vars['lang']->grab('admin_refugee_camp','fill_success'); ?>

<?php endif;  endif; ?>