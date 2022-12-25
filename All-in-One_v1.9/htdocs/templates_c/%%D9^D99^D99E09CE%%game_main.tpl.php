<?php /* Smarty version 2.6.14, created on 2022-12-24 00:45:58
         compiled from game_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stage', 'game_main.tpl', 7, false),array('modifier', 'format_time', 'game_main.tpl', 30, false),array('modifier', 'format_date', 'game_main.tpl', 37, false),)), $this); ?>
<table>
	<tr>
		<td>
			<img src="<?php echo $this->_tpl_vars['cl_builds']->getGraphic('main',$this->_tpl_vars['village']['main']); ?>
" title="Hauptgebäude" alt="" />
		</td>
		<td>
			<h2><?php echo $this->_tpl_vars['cl_builds']->get_name('main'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['village']['main'])) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)</h2>
			<?php echo $this->_tpl_vars['description']; ?>

		</td>
	</tr>
</table>
<br />
<?php if ($this->_tpl_vars['mode'] == 'destroy'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'game_main_destroy.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  if ($this->_tpl_vars['num_do_build'] > 0): ?>
	<table class="vis">
	<tr><th width="250"><?php echo $this->_tpl_vars['lang']->get('doBuild'); ?>
</th><th width="100"><?php echo $this->_tpl_vars['lang']->get('duration'); ?>
</th><th width="150"><?php echo $this->_tpl_vars['lang']->get('time_finished'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('cancel'); ?>
</th></tr>
	<?php $_from = $this->_tpl_vars['do_build']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['item']):
?>
		<?php $this->assign('buildname', $this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['build']); ?>
			<?php if ($this->_tpl_vars['id'] == 0): ?>
				<tr class="lit">
			<?php else: ?>
				<tr>
			<?php endif; ?>
					<td><?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['buildname']); ?>
 (<?php echo $this->_tpl_vars['lang']->get('stage'); ?>
 <?php echo $this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['stage']; ?>
)</td>
					<?php if ($this->_tpl_vars['id'] == 0): ?>
						<?php if ($this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['finished'] < $this->_tpl_vars['time']): ?>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['dauer'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
						<?php else: ?>
							<td><span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['dauer'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span></td>
						<?php endif; ?>
					<?php else: ?>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['dauer'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
					<?php endif; ?>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['finished'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>
</td>
					<td><a href="javascript:ask('<?php echo $this->_tpl_vars['lang']->get('cancel_confirm'); ?>
', 'game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=main&amp;action=cancel&amp;id=<?php echo $this->_tpl_vars['do_build'][$this->_tpl_vars['id']]['r_id']; ?>
&amp;mode=build&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
')"><?php echo $this->_tpl_vars['lang']->get('doCancel'); ?>
</a></td>
				</tr>
	<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['num_do_build'] > 2): ?>
		<tr>
			<td colspan="4"><?php echo $this->_tpl_vars['costs_plus']; ?>
%<br />
			<small><?php echo $this->_tpl_vars['lang']->get('plus_costs_cancel'); ?>
</small></td>
		</tr>
	<?php endif; ?>
	</table>
	<br />
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<font class="error"><?php echo $this->_tpl_vars['error']; ?>
</font>
<?php endif;  if ($this->_tpl_vars['village']['main'] >= 15 && $this->_tpl_vars['village']['agreement'] == 100): ?>
<table class="vis">
<tbody>
<tr>
<?php if ($this->_tpl_vars['mode'] == 'destroy'): ?>
<td width="100">
<?php else: ?>
<td class="selected" width="100">
<?php endif; ?>
<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main"><?php echo $this->_tpl_vars['lang']->get('build'); ?>
</a>
</td>
<?php if ($this->_tpl_vars['mode'] == 'destroy'): ?>
<td class="selected" width="100">
<?php else: ?>
<td width="100">
<?php endif; ?>
<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main&mode=destroy"><?php echo $this->_tpl_vars['lang']->get('destroy'); ?>
</a>
</td>
</tr>
</tbody>
</table>
<?php endif; ?>
<table class="vis">
<tr>
<th width="220"><?php echo $this->_tpl_vars['lang']->get('building'); ?>
</th><th colspan="4"><?php echo $this->_tpl_vars['lang']->grab('main','need'); ?>
</th><th width="100"><?php echo $this->_tpl_vars['lang']->get('build_time'); ?>
<br /> (hh:mm:ss)</th><th width="200"><?php echo $this->_tpl_vars['lang']->get('build'); ?>
</th>
</tr>

		<?php $_from = $this->_tpl_vars['fulfilled_builds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dbname']):
?>
			<tr>
				<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=<?php echo $this->_tpl_vars['dbname']; ?>
"><img src="graphic/buildings/<?php echo $this->_tpl_vars['dbname']; ?>
.png"> <?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['dbname']); ?>
</a> (<?php echo ((is_array($_tmp=$this->_tpl_vars['village'][$this->_tpl_vars['dbname']])) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)</td>
				<?php if ($this->_tpl_vars['cl_builds']->get_maxstage($this->_tpl_vars['dbname']) <= $this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]): ?>
					<td colspan="6" align="center" class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','full_build'); ?>
</td>
				<?php else: ?>
					<td><img src="graphic/holz.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['cl_builds']->get_wood($this->_tpl_vars['dbname'],$this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1); ?>
</td>
					<td><img src="graphic/lehm.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['cl_builds']->get_stone($this->_tpl_vars['dbname'],$this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1); ?>
</td>
					<td><img src="graphic/eisen.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['cl_builds']->get_iron($this->_tpl_vars['dbname'],$this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1); ?>
</td>
					<td><?php if ($this->_tpl_vars['cl_builds']->get_bh($this->_tpl_vars['dbname'],$this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1) > 0): ?><img src="graphic/face.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['cl_builds']->get_bh($this->_tpl_vars['dbname'],$this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1);  endif; ?></td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['cl_builds']->get_time($this->_tpl_vars['village']['main'],$this->_tpl_vars['dbname'],$this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1))) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</td>
					<?php echo $this->_tpl_vars['cl_builds']->build($this->_tpl_vars['village'],$this->_tpl_vars['id'],$this->_tpl_vars['build_village'],$this->_tpl_vars['plus_costs']); ?>

					<?php if ($this->_tpl_vars['cl_builds']->get_build_error2() == 'not_enough_ress'): ?>
						<td class="inactive"><span><?php echo $this->_tpl_vars['lang']->grab('error','ress_available_in'); ?>
 <span class="timer_replace"><?php echo $this->_tpl_vars['cl_builds']->get_build_error(); ?>
</span></span><span style="display:none">
                            <?php if ($this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']] < 1): ?>
                                <?php if (count ( $this->_tpl_vars['do_build'] ) > 2 && $this->_tpl_vars['user']['confirm_queue'] == 1): ?>
                                    <a href="javascript:ask('<?php echo $this->_tpl_vars['lang']->get('build_confirm'); ?>
', 'game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=main&amp;action=build&amp;id=<?php echo $this->_tpl_vars['dbname']; ?>
&amp;force&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
')"><?php echo $this->_tpl_vars['lang']->get('build'); ?>
</a>
                                <?php else: ?>
                                    <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main&action=build&id=<?php echo $this->_tpl_vars['dbname']; ?>
&h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('build'); ?>

                                <?php endif; ?>
                            <?php else: ?>
                                <?php if (count ( $this->_tpl_vars['do_build'] ) > 2 && $this->_tpl_vars['user']['confirm_queue'] == 1): ?>
                                    <a href="javascript:ask('<?php echo $this->_tpl_vars['lang']->get('build_confirm'); ?>
', 'game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=main&amp;action=build&amp;id=<?php echo $this->_tpl_vars['dbname']; ?>
&amp;force&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
')"><?php echo $this->_tpl_vars['lang']->get('build_on_stage'); ?>
 <?php echo $this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1; ?>
</a>
                                <?php else: ?>
                                    <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main&action=build&id=<?php echo $this->_tpl_vars['dbname']; ?>
&h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('build_on_stage'); ?>
 <?php echo $this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1; ?>
</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </span></td>
					<?php elseif ($this->_tpl_vars['cl_builds']->get_build_error2() == 'not_enough_ress_plus'): ?>
						<td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_ress_plus'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_builds']->get_build_error2() == 'not_fulfilled'): ?>
						<td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_fulfilled'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_builds']->get_build_error2() == 'not_enough_bh'): ?>
						<td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_bh'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_builds']->get_build_error2() == 'not_enough_storage'): ?>
						<td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_storage'); ?>
</td>
					<?php else: ?>
						<?php if ($this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']] < 1): ?>
							<?php if (count ( $this->_tpl_vars['do_build'] ) > 2 && $this->_tpl_vars['user']['confirm_queue'] == 1): ?>
								<td><a href="javascript:ask('<?php echo $this->_tpl_vars['lang']->get('build_confirm'); ?>
', 'game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=main&amp;action=build&amp;id=<?php echo $this->_tpl_vars['dbname']; ?>
&amp;force&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
')"><?php echo $this->_tpl_vars['lang']->get('build'); ?>
</a></td>
							<?php else: ?>
								<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main&action=build&id=<?php echo $this->_tpl_vars['dbname']; ?>
&h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('build'); ?>
</td>
							<?php endif; ?>
						<?php else: ?>
							<?php if (count ( $this->_tpl_vars['do_build'] ) > 2 && $this->_tpl_vars['user']['confirm_queue'] == 1): ?>
								<td><a href="javascript:ask('<?php echo $this->_tpl_vars['lang']->get('build_confirm'); ?>
', 'game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=main&amp;action=build&amp;id=<?php echo $this->_tpl_vars['dbname']; ?>
&amp;force&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
')"><?php echo $this->_tpl_vars['lang']->get('build_on_stage'); ?>
 <?php echo $this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1; ?>
</a></td>
							<?php else: ?>
								<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main&action=build&id=<?php echo $this->_tpl_vars['dbname']; ?>
&h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('build_on_stage'); ?>
 <?php echo $this->_tpl_vars['build_village'][$this->_tpl_vars['dbname']]+1; ?>
</a></td>
								<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=main&action=abriss&id=<?php echo $this->_tpl_vars['dbname']; ?>
&h=<?php echo $this->_tpl_vars['hkey']; ?>
">Abriss</a>	
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</tr>
		<?php endforeach; endif; unset($_from); ?>

</table>
<?php endif; ?>

<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=main&amp;action=change_name&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post">
<table>
<tr><th colspan="3"><?php echo $this->_tpl_vars['lang']->get('change_village_name'); ?>
</th></tr>
<tr><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['village']['name']; ?>
"></td><td><input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('change'); ?>
"></tr>
</table>
</form>