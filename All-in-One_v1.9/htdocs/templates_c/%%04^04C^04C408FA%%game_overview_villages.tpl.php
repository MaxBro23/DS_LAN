<?php /* Smarty version 2.6.14, created on 2022-12-24 01:59:05
         compiled from game_overview_villages.tpl */ ?>
<table class="vis">
	<tr>
   <?php  $this->_tpl_vars['links']['Umbenennen'] = 'rename'; $this->_tpl_vars['mode'] = $_GET['mode'];  ?>
<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f_name'] => $this->_tpl_vars['f_mode']):
?>
	<?php if ($this->_tpl_vars['f_mode'] == $this->_tpl_vars['mode']): ?>
		<td class="selected" width="100"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=overview_villages&mode=<?php echo $this->_tpl_vars['f_mode']; ?>
"><?php echo $this->_tpl_vars['f_name']; ?>
</a></td>
  <?php else: ?>
		<td width="100"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=overview_villages&mode=<?php echo $this->_tpl_vars['f_mode']; ?>
"><?php echo $this->_tpl_vars['f_name']; ?>
</a></td>	
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	</tr>
</table>
<br />
<table class="vis" width="100%">
  <tbody>
    <tr>
      <td width="80">
        <a href="javascript:popup_scroll('groups.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
', 500, 500);">&raquo; <?php echo $this->_tpl_vars['lang']->grab('overview_villages','groups'); ?>
</a>
      </td>
      <td style="text-align:center;">
        <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['g']):
?>
          <?php if ($this->_tpl_vars['g']['id'] == $this->_tpl_vars['user']['group']): ?>
            <b>><?php echo $this->_tpl_vars['g']['group_name']; ?>
<</b>
          <?php else: ?>
          <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=overview_villages&mode=<?php echo $this->_tpl_vars['mode']; ?>
&group=<?php echo $this->_tpl_vars['g']['id']; ?>
">[<?php echo $this->_tpl_vars['g']['group_name']; ?>
]</a>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
          <?php if ($this->_tpl_vars['user']['group'] == 0): ?>
            <b>>alle<</b>
          <?php else: ?>
            <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=overview_villages&mode=<?php echo $this->_tpl_vars['mode']; ?>
&group=all">[alle]</a>
          <?php endif; ?>
      </td>
    </tr>
  </tbody>
</table>
<?php if ($this->_tpl_vars['mode'] != 'rename'): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "game_overview_villages_".($this->_tpl_vars['mode']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['mode'] == 'rename'): ?>
<p>Hier kannst du deine Dörfer alle gleichzeitig umbenennen.</p>
<p>
 Folgende Platzhalter gibt es:<br />
 <?php echo '
 <table>
  <tr>
   <th align=left width=100>Platzhalter</th>
   <th align=left width=300>Bedeutung</th>
   <th align=left width=100>Beispiel</th>
  </tr>
  <tr>
   <td>{NR_0}</td>
   <td>Die Zahl des Dorfes, mit vorranstehender 0.</td>
   <td>001, 002, 003</td>
  </tr>
  <tr>
   <td>{NR}</td>
   <td>Die Zahl des Dorfes.</td>
   <td>1, 2, 3</td>
  </tr>
  <tr>
   <td>{x}</td>
   <td>Die x-Koordinate des Dorfes.</td>
   <td>535, 554, 534</td>
  </tr>
  <tr>
   <td>{y}</td>
   <td>Die y-Koordinate des Dorfes.</td>
   <td>553, 545, 543</td>
  </tr>  
 </table>
 '; ?>

</p>
<?php if ($this->_tpl_vars['Error'] != ''): ?> 
 <?php echo $this->_tpl_vars['Error']; ?>
<br /><br />
<?php else: ?>
 <br /><br />
<?php endif; ?>
<form action='game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=overview_villages&mode=rename' method='post'>
 <table>
  <tr>
   <td>Name:</td>
   <td><input type=text name=name /></td>
  </tr>
  <tr>
   <td><input type='submit' value='Umbenennen' /></td>
   <td>&nbsp;</td>
  </tr>
 </table>
</form>
<?php endif; ?>