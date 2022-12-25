<?php /* Smarty version 2.6.14, created on 2022-12-24 01:48:23
         compiled from game_report_view_support.tpl */ ?>
<table width="100%"> 
<tr><th width="60"><?php echo $this->_tpl_vars['lang']->grab('report_view_support','by'); ?>
:</th><th>
	<?php if (! empty ( $this->_tpl_vars['report']['from_username'] )): ?>
		<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['report']['from_user']; ?>
"><?php echo $this->_tpl_vars['report']['from_username']; ?>
</a>
	<?php else: ?>
		<b><?php echo $this->_tpl_vars['lang']->grab('report_view_support','unknown'); ?>
</b>
	<?php endif; ?>
</th></tr> 
<tr><td><?php echo $this->_tpl_vars['lang']->grab('report_view_support','village'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['report']['fromto_village']; ?>
"><?php echo $this->_tpl_vars['report']['from_villagename']; ?>
 (<?php echo $this->_tpl_vars['report']['from_x']; ?>
|<?php echo $this->_tpl_vars['report']['from_y']; ?>
)</a> <a href="game.php?village=<?php echo $this->_tpl_vars['report']['fromto_village']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['report']['from_village']; ?>
&screen=map&x=<?php echo $this->_tpl_vars['report']['from_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['from_y']; ?>
"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=place&x=<?php echo $this->_tpl_vars['report']['from_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['from_y']; ?>
"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </th></tr>
 
<tr><th><?php echo $this->_tpl_vars['lang']->grab('report_view_support','to'); ?>
:</th><th>
	<?php if (! empty ( $this->_tpl_vars['report']['to_username'] )): ?>
		<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['report']['to_user']; ?>
"><?php echo $this->_tpl_vars['report']['to_username']; ?>
</a></th></tr> 
	<?php else: ?>
		<b><?php echo $this->_tpl_vars['lang']->grab('report_view_support','unknown'); ?>
</b>
	<?php endif; ?>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('report_view_support','village'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['report']['to_village']; ?>
"><?php echo $this->_tpl_vars['report']['to_villagename']; ?>
 (<?php echo $this->_tpl_vars['report']['to_x']; ?>
|<?php echo $this->_tpl_vars['report']['to_y']; ?>
)</a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['report']['to_village']; ?>
&screen=map&x=<?php echo $this->_tpl_vars['report']['to_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['from_y']; ?>
"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=place&x=<?php echo $this->_tpl_vars['report']['to_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['to_y']; ?>
"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </th></tr>
 
</table><br> 
           
<h4><?php echo $this->_tpl_vars['lang']->grab('report_view_support','units'); ?>
:</h4>
<table class="vis"> 
	<tr> 
	    <?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?>
			<th width="35"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th>
		<?php endforeach; endif; unset($_from); ?>
	</tr> 
	<tr> 
		<?php $_from = $this->_tpl_vars['support_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
?>
			<?php if ($this->_tpl_vars['num_units'] > 0): ?>
				<td><?php echo $this->_tpl_vars['num_units']; ?>
</td>
			<?php else: ?>
				<td class="hidden">0</td>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</tr> 
</table>