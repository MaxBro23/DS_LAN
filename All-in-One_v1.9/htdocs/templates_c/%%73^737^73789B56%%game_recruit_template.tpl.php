<?php /* Smarty version 2.6.14, created on 2022-12-24 00:49:01
         compiled from game_recruit_template.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'format_time', 'game_recruit_template.tpl', 27, false),array('modifier', 'format_date', 'game_recruit_template.tpl', 31, false),array('modifier', 'stage', 'game_recruit_template.tpl', 84, false),)), $this); ?>
<?php if ($this->_tpl_vars['modes'] == 'massrek'): ?>
<table>
	<tr>
		<td>
			<img src="graphic/big_buildings/barracks.png" title="Kaserne" alt="" />
			<img src="graphic/big_buildings/stable.png" title="Kaserne" alt="" />
			<img src="graphic/big_buildings/garage.png" title="Kaserne" alt="" />
		</td>
		<td>
			<h2>Rekrutieren</h2>
			In dieser Übersicht kannst du jegliche Art von Einheiten produzieren, insofern du über die notwendigen Gebäude und Technologien verfügst.
		</td>
	</tr>
</table>

<?php if (count ( $this->_tpl_vars['recruit_units'] ) > 0): ?>
	    <table class="vis">
			<tr>
				<th width="150">Ausbildung</th>
				<th width="120">Dauer</th>
				<th width="150">Fertigstellung</th>
			</tr>
				<?php $_from = $this->_tpl_vars['recruit_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
			    <tr <?php if ($this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['lit']): ?>class="lit"<?php endif; ?>>
					<td><?php echo $this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['num_unit']; ?>
 <?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['unit']); ?>
</td>
	                <?php if ($this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['lit'] && $this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['countdown'] > -1): ?>
						<td><span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['countdown'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span></td>
					<?php else: ?>
					   	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['countdown'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
					<?php endif; ?>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['time_finished'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>
</td>
			    </tr>
				<?php endforeach; endif; unset($_from); ?>
		</table>
		<br>
	<?php endif; ?>

<?php echo $this->_tpl_vars['err']; ?>

<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=stable&amp;mode=massrek&amp;do=recruit" method="post" onsubmit="this.submit.disabled=false;">
<table class="vis" width="100%">
			<tr>
				<th width="150">Einheit</th>
				<th colspan="4" width="120">Bedarf</th>
				<th width="130">Zeit (hh:mm:ss)</th>
				<th>Im Dorf/Insgesamt</th>
				<th>Rekrutieren</th>
			</tr>
			
		<?php $_from = $this->_tpl_vars['unit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['unit_name'] => $this->_tpl_vars['name_unit']):
?>
			<?php if ($this->_tpl_vars['name_unit'] != 'unit_snob'): ?>
				<tr>
					<td><a href="javascript:popup('popup_unit.php?unit=<?php echo $this->_tpl_vars['name_unit']; ?>
', 520, 520)"> <img src="graphic/unit/<?php echo $this->_tpl_vars['name_unit']; ?>
.png" alt="" /> <?php echo $this->_tpl_vars['unit_name']; ?>
</a></td>
					<td><img src="graphic/holz.png" title="Holz" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_woodprice($this->_tpl_vars['name_unit']); ?>
</td>
					<td><img src="graphic/lehm.png" title="Lehm" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_stoneprice($this->_tpl_vars['name_unit']); ?>
</td>
					<td><img src="graphic/eisen.png" title="Eisen" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_ironprice($this->_tpl_vars['name_unit']); ?>
</td>
					<td><img src="graphic/face.png" title="Arbeiter" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_bhprice($this->_tpl_vars['name_unit']); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['cl_units']->get_time($this->_tpl_vars['village'][$this->_tpl_vars['dbname']],$this->_tpl_vars['name_unit']))) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
					<td><?php echo $this->_tpl_vars['units_village'][$this->_tpl_vars['name_unit']]; ?>
/<?php echo $this->_tpl_vars['units_insgesamt'][$this->_tpl_vars['name_unit']]; ?>
</td>
					
					<?php echo $this->_tpl_vars['cl_units']->check_needed($this->_tpl_vars['name_unit'],$this->_tpl_vars['village']); ?>

					<?php if ($this->_tpl_vars['cl_units']->last_error == not_tec): ?>
					    <td class="inactive">Einheit noch nicht erforscht</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_needed): ?>
					    <td class="inactive">Gebäudevorraussetzungen nicht erfüllt</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_enough_ress): ?>
					    <td class="inactive">Nicht genügend Rohstoffe vorhanden</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_enough_bh): ?>
					    <td class="inactive">Zu wenig Bauernhöfe um zusätzliche Soldaten zu versorgen</td>
					<?php else: ?>
						<td><input name="<?php echo $this->_tpl_vars['name_unit']; ?>
" type="text" size="5" maxlength="5" /> <a href="javascript:insertUnit(document.forms[0].<?php echo $this->_tpl_vars['name_unit']; ?>
, <?php echo $this->_tpl_vars['cl_units']->last_error; ?>
)">(max. <?php echo $this->_tpl_vars['cl_units']->last_error; ?>
)</a></td>
					<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<tr><td colspan="8" align="right"><input name="submit" type="submit" value="Rekrutieren" style="font-size: 10pt;" /></td></tr>
	</table>
</form>
<?php else: ?>
<table>
	<tr>
		<td>
			<img src="<?php echo $this->_tpl_vars['cl_builds']->getGraphic($this->_tpl_vars['dbname'],$this->_tpl_vars['village'][$this->_tpl_vars['dbname']]); ?>
" title="<?php echo $this->_tpl_vars['dbname']; ?>
" alt="" />
		</td>
		<td>
			<h2><?php echo $this->_tpl_vars['buildname']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['village'][$this->_tpl_vars['dbname']])) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)</h2>
			<?php echo $this->_tpl_vars['description']; ?>

		</td>
	</tr>
</table>
<br />
<?php if ($this->_tpl_vars['show_build']): ?>
	<?php if (count ( $this->_tpl_vars['recruit_units'] ) > 0): ?>
	    <table class="vis">
			<tr>
				<th width="150"><?php echo $this->_tpl_vars['lang']->grab('recruit','recruit'); ?>
</th>
				<th width="120"><?php echo $this->_tpl_vars['lang']->grab('recruit','time'); ?>
</th>
				<th width="150"><?php echo $this->_tpl_vars['lang']->grab('recruit','finished'); ?>
</th>
				<th width="100"><?php echo $this->_tpl_vars['lang']->grab('recruit','cancel'); ?>
 *</th>
			</tr>

			<?php $_from = $this->_tpl_vars['recruit_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
			    <tr <?php if ($this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['lit']): ?>class="lit"<?php endif; ?>>
					<td><?php echo $this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['num_unit']; ?>
 <?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['unit']); ?>
</td>
	                <?php if ($this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['lit'] && $this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['countdown'] > -1): ?>
						<td><span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['countdown'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span></td>
					<?php else: ?>
					   	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['countdown'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
					<?php endif; ?>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['recruit_units'][$this->_tpl_vars['key']]['time_finished'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>
</td>
					<td><a href="game.php?t=129107&amp;village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=<?php echo $this->_tpl_vars['dbname']; ?>
&amp;action=cancel&amp;id=<?php echo $this->_tpl_vars['key']; ?>
&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->grab('recruit','do_cancel'); ?>
</a></td>
			    </tr>
			<?php endforeach; endif; unset($_from); ?>

		</table>
		<div style="font-size: 7pt;">* (90% <?php echo $this->_tpl_vars['lang']->grab('recruit','ressis_back'); ?>
)</div>
		<br>
	<?php endif; ?>

	<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
		<font class="error"><?php echo $this->_tpl_vars['error']; ?>
</font>
	<?php endif; ?>
	<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=<?php echo $this->_tpl_vars['dbname']; ?>
&amp;action=train&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post" onsubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th width="150"><?php echo $this->_tpl_vars['lang']->grab('recruit','unit'); ?>
</th>
				<th colspan="4" width="120"><?php echo $this->_tpl_vars['lang']->grab('recruit','need'); ?>
</th>
				<th width="130"><?php echo $this->_tpl_vars['lang']->grab('recruit','time'); ?>
 (hh:mm:ss)</th>
				<th><?php echo $this->_tpl_vars['lang']->grab('recruit','amount'); ?>
</th>
				<th><?php echo $this->_tpl_vars['lang']->grab('recruit','do_recruit'); ?>
</th>
			</tr>

			<?php $_from = $this->_tpl_vars['units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['unit_dbname'] => $this->_tpl_vars['name']):
?>
				<tr>
					<td><a href="javascript:popup('popup_unit.php?unit=<?php echo $this->_tpl_vars['unit_dbname']; ?>
', 520, 520)"> <img src="graphic/unit/<?php echo $this->_tpl_vars['unit_dbname']; ?>
.png" alt="" /> <?php echo $this->_tpl_vars['name']; ?>
</a></td>
					<td><img src="graphic/holz.png" title="Holz" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_woodprice($this->_tpl_vars['unit_dbname']); ?>
</td>
					<td><img src="graphic/lehm.png" title="Lehm" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_stoneprice($this->_tpl_vars['unit_dbname']); ?>
</td>
					<td><img src="graphic/eisen.png" title="Eisen" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_ironprice($this->_tpl_vars['unit_dbname']); ?>
</td>
					<td><img src="graphic/face.png" title="Arbeiter" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_bhprice($this->_tpl_vars['unit_dbname']); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['cl_units']->get_time($this->_tpl_vars['village'][$this->_tpl_vars['dbname']],$this->_tpl_vars['unit_dbname']))) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
					<td><?php echo $this->_tpl_vars['units_in_village'][$this->_tpl_vars['unit_dbname']]; ?>
/<?php echo $this->_tpl_vars['units_all'][$this->_tpl_vars['unit_dbname']]; ?>
</td>

					<?php echo $this->_tpl_vars['cl_units']->check_needed($this->_tpl_vars['unit_dbname'],$this->_tpl_vars['village']); ?>

					<?php if ($this->_tpl_vars['cl_units']->last_error == not_tec): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_tec'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_needed): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_needed'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_enough_ress): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_ress'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_enough_bh): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_bh'); ?>
</td>
					<?php else: ?>
						<td><input name="<?php echo $this->_tpl_vars['unit_dbname']; ?>
" type="text" size="5" maxlength="5" /> <a href="javascript:insertUnit(document.forms[0].<?php echo $this->_tpl_vars['unit_dbname']; ?>
, <?php echo $this->_tpl_vars['cl_units']->last_error; ?>
)">(max. <?php echo $this->_tpl_vars['cl_units']->last_error; ?>
)</a></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; endif; unset($_from); ?>

		    <tr><td colspan="8" align="right"><input name="submit" type="submit" value="<?php echo $this->_tpl_vars['lang']->grab('recruit','do_recruit'); ?>
" style="font-size: 10pt;" /></td></tr>
		</table>
	</form>
<?php endif;  endif; ?>