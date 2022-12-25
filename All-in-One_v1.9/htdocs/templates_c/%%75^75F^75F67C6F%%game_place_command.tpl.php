<?php /* Smarty version 2.6.14, created on 2022-12-24 00:48:37
         compiled from game_place_command.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'game_place_command.tpl', 16, false),array('modifier', 'format_date', 'game_place_command.tpl', 100, false),array('modifier', 'format_time', 'game_place_command.tpl', 102, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<div style="color:red; font-size:large"><?php echo $this->_tpl_vars['error']; ?>
</div>
<?php endif; ?>

<h3><?php echo $this->_tpl_vars['lang']->get('do_command'); ?>
</h3>

<form name="units" action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;try=confirm" method="post">
	<table>
		<tr>
			<?php $this->assign('counter', 0); ?>
			<?php $_from = $this->_tpl_vars['group_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_name'] => $this->_tpl_vars['value']):
?>
				<td width="150" valign="top">
					<table class="vis" width="100%">
						<?php $_from = $this->_tpl_vars['group_units'][$this->_tpl_vars['group_name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname']):
?>
														<?php echo smarty_function_math(array('assign' => 'counter','equation' => "x + y",'x' => $this->_tpl_vars['counter'],'y' => 1), $this);?>

							<tr>
								<td>
									<a href="javascript:popup('popup_unit.php?unit=<?php echo $this->_tpl_vars['dbname']; ?>
', 520, 520)"><img src="graphic/unit/overview/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['dbname']); ?>
" alt="" /></a> <input name="<?php echo $this->_tpl_vars['dbname']; ?>
" type="text" size="5" tabindex="<?php echo $this->_tpl_vars['counter']; ?>
" value="<?php echo $this->_tpl_vars['values'][$this->_tpl_vars['dbname']]; ?>
" /> <a href="javascript:<?php ob_start(); ?>insertUnit(document.forms[0].<?php echo $this->_tpl_vars['dbname']; ?>
, <?php echo $this->_tpl_vars['units'][$this->_tpl_vars['dbname']]; ?>
)<?php $this->_smarty_vars['capture']["alletruppen.".($this->_tpl_vars['counter'])] = ob_get_contents(); ob_end_clean(); ?>insertUnit(document.forms[0].<?php echo $this->_tpl_vars['dbname']; ?>
, <?php echo $this->_tpl_vars['units'][$this->_tpl_vars['dbname']]; ?>
)">(<?php echo $this->_tpl_vars['units'][$this->_tpl_vars['dbname']]; ?>
)</a>
								</td>
							</tr>
						
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</td>
			<?php endforeach; endif; unset($_from); ?>
		</tr>
	</table>
	
	<table>
		<tr>
			<td colspan="100%">
			<a href="javascript:
<?php $_from = $this->_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alletruppen'] => $this->_tpl_vars['truppen']):
 echo $this->_tpl_vars['truppen']; ?>
;
<?php endforeach; endif; unset($_from); ?>">&raquo; Alle Truppen</a><?php echo $this->_tpl_vars['blubb']; ?>

			</td>
		</tr>
		<tr>
			<td rowspan="2">
				x: <input type="text" name="x" value="<?php echo $this->_tpl_vars['values']['x']; ?>
" size="5" />
				y: <input type="text" name="y" value="<?php echo $this->_tpl_vars['values']['y']; ?>
" size="5" />
				
				<?php 
$userid_query = mysql_query("SELECT `userid` FROM `sessions` WHERE `sid` = '".$_COOKIE['session']."'");
$userid_get = mysql_fetch_assoc($userid_query);
$userid = $userid_get['userid'];
$select_query = mysql_query("SELECT * FROM `villages` WHERE (`userid` = '".$userid."' AND `id` != '".$_GET['village']."') ORDER BY `name` ASC");
$select_count = mysql_num_rows($select_query);
if($select_count > 1)
    {
    $villages = array();
    while($select_get = mysql_fetch_assoc($select_query))
        {
        $villages[] = $select_get;
        }
    $this->assign('villages', $villages);
    }
  if (count ( $this->_tpl_vars['villages'] ) > 0): ?>
    <select name="target" size="1" onchange="insertCoord(document.forms[0], this)">
        <option>-Dorf w&auml;hlen-</option>
        <?php $_from = $this->_tpl_vars['villages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
            <option value="<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['id']]['x']; ?>
|<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['id']]['y']; ?>
"><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['id']]['name']; ?>
 (<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['id']]['x']; ?>
|<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['id']]['y']; ?>
) <?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['id']]['continent']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
    </select>
<?php endif; ?>

			</td>
			<td valign="top"></td>
			<td valign="top"></td>
			<td rowspan="2"><input class="attack" name="attack" type="submit" value="<?php echo $this->_tpl_vars['lang']->get('do_attack'); ?>
" style="font-size: 10pt;" /></td>
			<td rowspan="2"><input class="support" name="support" type="submit" value="<?php echo $this->_tpl_vars['lang']->get('do_support'); ?>
" style="font-size: 10pt;" /></td>
		</tr>
	</table>
</form>

<?php 
if($_GET['molt']) echo '<script type="text/javascript">
document.getElementsByName("attack")[0].click();
</script>';
 ?>

<h3><?php echo $this->_tpl_vars['lang']->get('movements'); ?>
</h3>
<?php if (count ( $this->_tpl_vars['my_movements'] ) > 0): ?>
<table class="vis">
	<tr>
		<th width="250"><?php echo $this->_tpl_vars['lang']->get('own_troops'); ?>
</th>
		<th width="160"><?php echo $this->_tpl_vars['lang']->get('arrival'); ?>
</th>
		<th width="80"><?php echo $this->_tpl_vars['lang']->get('arrival_in'); ?>
</th>
	</tr>
	<?php $_from = $this->_tpl_vars['my_movements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['array']):
?>
	    <tr>
	        <td>
	            <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_command&amp;id=<?php echo $this->_tpl_vars['array']['id']; ?>
&amp;type=own">
	            <img src="graphic/command/<?php echo $this->_tpl_vars['array']['type']; ?>
.png"> <?php echo $this->_tpl_vars['array']['message']; ?>

	            </a>
	        </td>
	        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['end_time'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>
</td>
	        <?php if ($this->_tpl_vars['array']['arrival_in'] < 0): ?>
	        	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['arrival_in'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
	        <?php else: ?>
	        	<td><span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['arrival_in'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span></td>
	        <?php endif; ?>
	        <?php if ($this->_tpl_vars['array']['can_cancel']): ?>
	        	<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;action=cancel&amp;id=<?php echo $this->_tpl_vars['array']['id']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('doCancel'); ?>
</a></td>
	        <?php endif; ?>
	    </tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>


<?php if (count ( $this->_tpl_vars['other_movements'] ) > 0): ?>
<table class="vis">
	<tr>
		<th width="250"><?php echo $this->_tpl_vars['lang']->get('troops_incoming'); ?>
</th>
		<th width="160"><?php echo $this->_tpl_vars['lang']->get('arrival'); ?>
</th>
		<th width="80"><?php echo $this->_tpl_vars['lang']->get('arrival_in'); ?>
</th>
	</tr>
	<?php $_from = $this->_tpl_vars['other_movements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['array']):
?>
	    <tr>
	        <td>
	            <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_command&amp;id=<?php echo $this->_tpl_vars['array']['id']; ?>
&amp;type=other">
	            <img src="graphic/command/<?php echo $this->_tpl_vars['array']['type']; ?>
.png"> <?php echo $this->_tpl_vars['array']['message']; ?>

	            </a>
	        </td>
	        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['end_time'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>
</td>
	        <?php if ($this->_tpl_vars['array']['arrival_in'] < 0): ?>
	        	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['arrival_in'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
	        <?php else: ?>
	        	<td><span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['array']['arrival_in'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span></td>
	        <?php endif; ?>
	    </tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>