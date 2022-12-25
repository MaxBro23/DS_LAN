<?php /* Smarty version 2.6.14, created on 2022-12-24 00:55:56
         compiled from game_ally_no_ally.tpl */ ?>
<h2><?php echo $this->_tpl_vars['lang']->get('tribe'); ?>
</h2>
<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<div style="color:red; font-size:large"><?php echo $this->_tpl_vars['error']; ?>
</div>
<?php endif; ?>
<p><?php echo $this->_tpl_vars['lang']->get('text'); ?>
</p>

<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=ally&amp;action=create&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post">
<table class="vis">
<tr><th colspan="2"><?php echo $this->_tpl_vars['lang']->get('found_tribe'); ?>
</th></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('name'); ?>
:</td><td><input type="text" name="name" /></td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('shortcut'); ?>
:<br /><?php echo $this->_tpl_vars['lang']->get('short_max'); ?>
</td><td><input type="text" name="tag" maxlength="6" /></td></tr>
</table>
<input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('found'); ?>
" style="font-size:10pt;" />
</form>
<br />
	
<table class="vis">
  <tr>
    <th colspan="3" width="400"><?php echo $this->_tpl_vars['lang']->get('invitations'); ?>

    </th>
  </tr>
	<?php $_from = $this->_tpl_vars['invites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['arr']):
?>
		<tr>
		<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_ally&amp;id=<?php echo $this->_tpl_vars['arr']['from_ally']; ?>
"><?php echo $this->_tpl_vars['arr']['tag']; ?>
</a></td>
		<td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=ally&amp;action=accept&amp;id=<?php echo $this->_tpl_vars['id']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('accept'); ?>
</td>
		<td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=ally&amp;action=reject&amp;id=<?php echo $this->_tpl_vars['id']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('refuse'); ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table><br>
<?php echo $this->_tpl_vars['err']; ?>