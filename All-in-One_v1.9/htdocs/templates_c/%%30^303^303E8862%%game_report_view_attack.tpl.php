<?php /* Smarty version 2.6.14, created on 2022-12-24 00:49:10
         compiled from game_report_view_attack.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'game_report_view_attack.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['report']['wins'] == 'att'): ?>
	<h3><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','attacker_won'); ?>
</h3>
<?php else: ?>
    <h3><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','defender_won'); ?>
</h3>
<?php endif; ?>

<h4><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','luck'); ?>
</h4>
<table>
<?php if ($this->_tpl_vars['report']['luck'] < 0): ?>
	<tr>
	<td><b><?php echo $this->_tpl_vars['report']['luck']; ?>
%</b></td>
	<td><img src="graphic/rabe.png" alt="Pech" /></td>
	<td>
		<table style="border: 1px solid black;" cellspacing="0" cellpadding="0">
		<tr>
	        <td width="<?php echo smarty_function_math(array('equation' => "a-(b*(x * y))",'b' => -1,'a' => 50,'x' => $this->_tpl_vars['report']['luck'],'y' => 2), $this);?>
" height="12"></td>
			<td width="<?php echo smarty_function_math(array('equation' => "b*(x * y)",'b' => -1,'x' => $this->_tpl_vars['report']['luck'],'y' => 2), $this);?>
" style="background-image:url(graphic/balken_pech.png);"></td>
			<td width="2" style="background-color:rgb(0, 0, 0)"></td>
			<td width="0" style="background-image:url(graphic/balken_glueck.png);"></td>
			<td width="50"></td>
		</tr>
		</table>
<?php else: ?>
	<tr>
    <td><img src="graphic/rabe.png" alt="Pech" /></td>
	<td>
		<table style="border: 1px solid black;" cellspacing="0" cellpadding="0">
		<tr>
			<td width="50"></td>
			<td width="2" style="background-color:rgb(0, 0, 0)"></td>
			<td width="<?php echo smarty_function_math(array('equation' => "x * y",'x' => $this->_tpl_vars['report']['luck'],'y' => 2), $this);?>
" style="background-image:url(graphic/balken_glueck.png);"></td>
			<td width="<?php echo smarty_function_math(array('equation' => "a-(x * y)",'a' => 50,'x' => $this->_tpl_vars['report']['luck'],'y' => 2), $this);?>
" height="12"></td>
		</tr>
		</table>
	<td><?php if ($this->_tpl_vars['report']['luck'] >= 1): ?><img src="graphic/klee.png" alt="Glück" /><?php else: ?><img src="graphic/klee_grau.png" alt="Glück" /><?php endif; ?></td>
	<td><b><?php echo $this->_tpl_vars['report']['luck']; ?>
%</b></td>
<?php endif; ?>
</td>


</tr>
</table>

<?php if ($this->_tpl_vars['moral_activ'] == 'true'): ?>
	<table>
	<tr><td><h4><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','moral'); ?>
: <?php echo $this->_tpl_vars['report']['moral']; ?>
%</h4></td></tr>
	</table>
	<br />
<?php endif; ?>


<table width="100%" style="border: 1px solid #DED3B9">
<tr><th width="100"><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','attacker'); ?>
:</th><th><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['report']['from_user']; ?>
"><?php echo $this->_tpl_vars['report']['from_username']; ?>
</a></th></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','village'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['report']['from_village']; ?>
"><?php echo $this->_tpl_vars['report']['from_villagename']; ?>
 (<?php echo $this->_tpl_vars['report']['from_x']; ?>
|<?php echo $this->_tpl_vars['report']['from_y']; ?>
)</a> <a href="game.php?village=<?php echo $this->_tpl_vars['report']['from_village']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['report']['from_village']; ?>
&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=place&x=<?php echo $this->_tpl_vars['report']['from_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['from_y']; ?>
"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </td></tr>

<tr><td colspan="2">
	<table class="vis">
	<tr class="center">
		<td></td>
		<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?>
			<td width="35"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></td>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	<tr class="center"><td><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','amount'); ?>
:</td><?php $_from = $this->_tpl_vars['report_units']['units_a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><td><?php echo $this->_tpl_vars['num_units']; ?>
</td><?php else: ?><td class="hidden">0</td><?php endif;  endforeach; endif; unset($_from); ?></tr>

	<tr class="center"><td><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','wastages'); ?>
:</td><?php $_from = $this->_tpl_vars['report_units']['units_b']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><td><?php echo $this->_tpl_vars['num_units']; ?>
</td><?php else: ?><td class="hidden">0</td><?php endif;  endforeach; endif; unset($_from); ?></tr>
	</table>

</td></tr>
</table><br />

<table width="100%" style="border: 1px solid #DED3B9">
<tr><th width="100">Verteidiger:</th><th><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['report']['to_user']; ?>
"><?php echo $this->_tpl_vars['report']['to_username']; ?>
</a></th></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','village'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['report']['to_village']; ?>
"><?php echo $this->_tpl_vars['report']['to_villagename']; ?>
 (<?php echo $this->_tpl_vars['report']['to_x']; ?>
|<?php echo $this->_tpl_vars['report']['to_y']; ?>
)</a> <a href="game.php?village=<?php echo $this->_tpl_vars['report']['to_village']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=map&x=<?php echo $this->_tpl_vars['report']['to_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['to_y']; ?>
"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=place&x=<?php echo $this->_tpl_vars['report']['to_x']; ?>
&y=<?php echo $this->_tpl_vars['report']['to_y']; ?>
"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a></td> </tr>
<tr><td colspan="2">
	<?php if ($this->_tpl_vars['see_def_units']): ?>
		<table class="vis">
		<tr class="center">
			<td></td>
			<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?>
				<td width="35"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th>
			<?php endforeach; endif; unset($_from); ?>
		</tr>
		<tr class="center"><td><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','amount'); ?>
:</td><?php $_from = $this->_tpl_vars['report_units']['units_c']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><td><?php echo $this->_tpl_vars['num_units']; ?>
</td><?php else: ?><td class="hidden">0</td><?php endif;  endforeach; endif; unset($_from); ?></tr>
	
		<tr class="center"><td><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','wastages'); ?>
:</td><?php $_from = $this->_tpl_vars['report_units']['units_d']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><td><?php echo $this->_tpl_vars['num_units']; ?>
</td><?php else: ?><td class="hidden">0</td><?php endif;  endforeach; endif; unset($_from); ?></tr>
		</table>
	<?php else: ?>
		<p><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','no_survive'); ?>
</p>
	<?php endif; ?>

</td></tr>
</table><br /><br />
<?php if (count ( $this->_tpl_vars['report_units']['units_e'] ) > 1): ?>
	<h4><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','defender_movements'); ?>
</h4>
	<table>
	<tr>
		<?php $_from = $this->_tpl_vars['cl_units']->get_array('dbname'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dbname']):
?>
			<th width="35"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	<tr><?php $_from = $this->_tpl_vars['report_units']['units_e']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num_units']):
 if ($this->_tpl_vars['num_units'] > 0): ?><td><?php echo $this->_tpl_vars['num_units']; ?>
</td><?php else: ?><td class="hidden">0</td><?php endif;  endforeach; endif; unset($_from); ?></tr>
	</table>
<?php endif;  
	//dieser kompleter php teil wurde von -superking- geschrieben
	$sql = "SELECT * FROM reports WHERE id =".$_GET[view];
	$res = mysql_query($sql);
	while($row = mysql_fetch_assoc($res))
	{
		if($row[main] != -1)
		{
			echo "<h4>Spionage</h4>";
			echo "<table style=\"border: 1px solid rgb(222, 211, 185);\">";
			echo "<tbody>";
			echo "<tr><th>Ersp&auml;hte Rohstoffe:</th><td>";
			echo "<img src=\"graphic/holz.png\" title=\"Holz\" alt=\"\">";
			echo $row[r_wood];
			echo "<img src=\"graphic/lehm.png\" title=\"Lehm\" alt=\"\">";
			echo $row[r_stone];
			echo "<img src=\"graphic/eisen.png\" title=\"Eisen\" alt=\"\">";
			echo $row[r_iron];
			echo "</td></tr>";
			echo "<tr><th>Geb&auml;ude:</th><td>";
			echo "Hauptgeb&auml;ude <b>(Stufe ".$row[main].")</b><br>";

			if($row[barracks] != 0)
			{
				echo "Kaserne <b>(Stufe ".$row[barracks].")</b><br>";
			}
			if($row[stable] != 0)
			{
				echo "Stall <b>(Stufe ".$row[stable].")</b><br>";
			}
			if($row[garage] != 0)
			{
				echo "Werkstatt <b>(Stufe ".$row[garage].")</b><br>";
			}
			if($row[snob] != 0)
			{
				echo "Adelshof <b>(Stufe ".$row[snob].")</b><br>";
			}
			if($row[smith] != 0)
			{
				echo "Schmiede <b>(Stufe ".$row[smith].")</b><br>";
			}	
			if($row[place] != 0)
			{
				echo "Versammlungsplatz <b>(Stufe ".$row[place].")</b><br>";
			}
			if($row[market] != 0)
			{
				echo "Marktplatz <b>(Stufe ".$row[market].")</b><br>";
			}	
			if($row[wood] != 0)
			{
				echo "Holzf&auml;ller <b>(Stufe ".$row[wood].")</b><br>";
			}	
			if($row[stone] != 0)
			{
				echo "Lehmgrube <b>(Stufe ".$row[stone].")</b><br>";
			}
			if($row[iron] != 0)
			{
				echo "Eisenmiene <b>(Stufe ".$row[iron].")</b><br>";
			}
			if($row[farm] != 0)
			{
				echo "Bauernhof <b>(Stufe ".$row[farm].")</b><br>";
			}
			if($row[storage] != 0)
			{
				echo "Speicher <b>(Stufe ".$row[storage].")</b><br>";
			}
			if($row[hide] != 0)
			{
				echo "Versteck <b>(Stufe ".$row[hide].")</b><br>";
			}
			if($row[wall] != 0)
			{
				echo "Wall <b>(Stufe ".$row[wall].")</b><br>";
			}
			echo "</td></tr>";
			echo "</tbody></table>";
			echo "<br>";

		}
	
			
	}
 ?>
^
<table width="100%" style="border: 1px solid #DED3B9">
	<?php if ($this->_tpl_vars['report_ress']['wood'] > 0 || $this->_tpl_vars['report_ress']['stone'] > 0 || $this->_tpl_vars['report_ress']['iron'] > 0): ?>
		<tr><th><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','booties'); ?>
:</th>
		<td width="220">
			<?php if ($this->_tpl_vars['report_ress']['wood'] > 0): ?><img src="graphic/holz.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['report_ress']['wood']; ?>
 <?php endif; ?>
			<?php if ($this->_tpl_vars['report_ress']['stone'] > 0): ?><img src="graphic/lehm.png" title="Lehm" alt="" /><?php echo $this->_tpl_vars['report_ress']['stone']; ?>
 <?php endif; ?>
			<?php if ($this->_tpl_vars['report_ress']['iron'] > 0): ?><img src="graphic/eisen.png" title="Eisen" alt="" /><?php echo $this->_tpl_vars['report_ress']['iron']; ?>
 <?php endif; ?></td>
		<td><?php echo $this->_tpl_vars['report_ress']['sum']; ?>
/<?php echo $this->_tpl_vars['report_ress']['max']; ?>
</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['report_ram']['from'] != $this->_tpl_vars['report_ram']['to']): ?>
		<tr><th><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','damage_ram'); ?>
:</th>
		<td colspan="2"><?php echo $this->_tpl_vars['damage_ram']; ?>
</td></tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['report_agreement']['from'] != $this->_tpl_vars['report_agreement']['to']): ?>
	<tr><th><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','agreement'); ?>
</th>
	<td colspan="2"><?php echo $this->_tpl_vars['agreement_change']; ?>
</td></tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['report_catapult']['from'] != $this->_tpl_vars['report_catapult']['to']): ?>
		<tr><th><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','damage_catapult'); ?>
:</th>
		<td colspan="2"><?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['report_catapult']['building']); ?>
 <?php echo $this->_tpl_vars['damage_catapult']; ?>
</b></td></tr>
	<?php endif; ?>
</table>
	<br />
	<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;mode=sim&amp;reportid=<?php echo $this->_tpl_vars['report']['id']; ?>
"><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','simulator_insert_all'); ?>
</a><br /><br />
	<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=place&amp;mode=sim&amp;reportid=<?php echo $this->_tpl_vars['report']['id']; ?>
&amp;report_live=live"><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','simulator_insert_survived'); ?>
</a>
	<?php if ($this->_tpl_vars['reporttype'] == 'attack'): ?>
		<br />
		<hr />
		<a href="game.php?village=<?php echo $this->_tpl_vars['report']['from_village']; ?>
&amp;screen=place&amp;mode=command&amp;target=<?php echo $this->_smarty_vars['capture']['dorfid']; ?>
&amp;reportid=<?php echo $this->_tpl_vars['report']['id']; ?>
&amp;molt=true"><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','attack_same'); ?>
</a><br /><br />
		<a href="game.php?village=<?php echo $this->_tpl_vars['report']['from_village']; ?>
&amp;screen=place&amp;mode=command&amp;units=all&amp;koords=<?php echo $this->_tpl_vars['report']['to_x']; ?>
;<?php echo $this->_tpl_vars['report']['to_y']; ?>
"><?php echo $this->_tpl_vars['lang']->grab('report_view_attack','attack_all'); ?>
</a><br /><br />
	<?php endif; ?>