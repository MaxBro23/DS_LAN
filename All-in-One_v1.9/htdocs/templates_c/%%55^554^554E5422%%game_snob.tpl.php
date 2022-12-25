<?php /* Smarty version 2.6.14, created on 2022-12-24 01:39:35
         compiled from game_snob.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stage', 'game_snob.tpl', 7, false),array('modifier', 'format_time', 'game_snob.tpl', 31, false),array('modifier', 'format_date', 'game_snob.tpl', 35, false),)), $this); ?>
<table>
	<tr>
		<td>
			<img src="<?php echo $this->_tpl_vars['cl_builds']->getGraphic('snob',$this->_tpl_vars['village']['snob']); ?>
" title="Adelshof" alt="" />
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
	<?php if ($this->_tpl_vars['mode'] == 'mass_muenze'): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "game_snob_".($this->_tpl_vars['mode']).".tpl", 'smarty_include_vars' => array('title' => 'foo')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php else: ?>
	
	<?php if (count ( $this->_tpl_vars['recruit_units'] ) > 0): ?>
	    <table class="vis">
			<tr>
				<th width="150"><?php echo $this->_tpl_vars['lang']->get('recruit'); ?>
</th>
				<th width="120"><?php echo $this->_tpl_vars['lang']->get('duration'); ?>
</th>
				<th width="150"><?php echo $this->_tpl_vars['lang']->get('finish'); ?>
</th>
				<th width="100"><?php echo $this->_tpl_vars['lang']->get('cancel'); ?>
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
"><?php echo $this->_tpl_vars['lang']->get('do_cancel'); ?>
</a></td>
			    </tr>
			<?php endforeach; endif; unset($_from); ?>

		</table>
		<div style="font-size: 7pt;">* (<?php echo $this->_tpl_vars['lang']->get('cancel_info'); ?>
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
				<th width="150"><?php echo $this->_tpl_vars['lang']->get('unit'); ?>
</th>
				<th colspan="4" width="120"><?php echo $this->_tpl_vars['lang']->get('need'); ?>
</th>
				<th width="130"><?php echo $this->_tpl_vars['lang']->get('time'); ?>
 (hh:mm:ss)</th>
				<th><?php echo $this->_tpl_vars['lang']->get('amount'); ?>
</th>
				<th><?php echo $this->_tpl_vars['lang']->get('do_recruit'); ?>
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

					<?php if ($this->_tpl_vars['amountSnobsCanBeRecruited'] == 0 && $this->_tpl_vars['ag_style'] == 2): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','no_more_snobs'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_tec): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_tec'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_needed): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_fulfilled'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == build_ah): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','build_ah'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_enough_ress): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_ress'); ?>
</td>
					<?php elseif ($this->_tpl_vars['cl_units']->last_error == not_enough_bh): ?>
					    <td class="inactive"><?php echo $this->_tpl_vars['lang']->grab('error','not_enough_bh'); ?>
</td>
					<?php else: ?>
						<td><a href="game.php?h=<?php echo $this->_tpl_vars['hkey']; ?>
&amp;action=train_snob&amp;screen=snob&amp;village=<?php echo $this->_tpl_vars['village']['id']; ?>
"><?php echo $this->_tpl_vars['lang']->get('create'); ?>
</a></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; endif; unset($_from); ?>


		</table>
		<br />
		<?php if ($this->_tpl_vars['ag_style'] == 0): ?>
			<h4><?php echo $this->_tpl_vars['lang']->get('amount_recruit_this_village'); ?>
</h4>
			<table class="vis">
			<tr><td><?php echo $this->_tpl_vars['lang']->get('snob_stage'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['snob']; ?>
</td></tr>
			<tr><td>- <?php echo $this->_tpl_vars['lang']->get('this_village_controlled'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['control_villages']; ?>
</td></tr>
			<tr><td>- <?php echo $this->_tpl_vars['lang']->get('available_snobs'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['recruited_snobs']; ?>
</td></tr>
			<tr><th><?php echo $this->_tpl_vars['lang']->get('amount_can_be_recruited'); ?>
:</th><th><?php echo $this->_tpl_vars['village']['snob']-$this->_tpl_vars['village']['control_villages']-$this->_tpl_vars['village']['recruited_snobs']; ?>
</th></tr>
			</table>
		<?php elseif ($this->_tpl_vars['ag_style'] == 1): ?>
			<h4><?php echo $this->_tpl_vars['lang']->get('amount_recruit'); ?>
</h4>
			<table class="vis">
			<tr><td><?php echo $this->_tpl_vars['lang']->get('snob_stage'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['snob_info']['stage_snobs']; ?>
</td></tr>
			<tr><td>- <?php echo $this->_tpl_vars['lang']->get('snobs_available'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['snob_info']['all_snobs']; ?>
</td></tr>
			<tr><td>- <?php echo $this->_tpl_vars['lang']->get('snobs_production'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['snob_info']['ags_in_prod']; ?>
</td></tr>
			<tr><td>- <?php echo $this->_tpl_vars['lang']->get('amount_conquered'); ?>
:</td><td><?php echo $this->_tpl_vars['village']['snob_info']['control_villages']; ?>
</td></tr>
			<tr><th><?php echo $this->_tpl_vars['lang']->get('amount_can_be_recruited'); ?>
:</th><th><?php echo $this->_tpl_vars['village']['snob_info']['can_prod']; ?>
</th></tr>
			</table>
		<?php elseif ($this->_tpl_vars['ag_style'] == 2): ?>
		  <h4><?php echo $this->_tpl_vars['lang']->get('amount_recruit'); ?>
</h4>
		  <table class="vis">
        <tbody>
        <tr>
          <td><?php echo $this->_tpl_vars['lang']->get('limit'); ?>
:</td>
          <td><?php echo $this->_tpl_vars['snobLimit']; ?>
</td>
        </tr>
        <tr>
          <td>- <?php echo $this->_tpl_vars['lang']->get('snobs_available'); ?>
:</td>
          <td><?php echo $this->_tpl_vars['snobsNow']; ?>
</td>
        </tr>
        <tr>
          <td>- <?php echo $this->_tpl_vars['lang']->get('snobs_production'); ?>
:</td>
          <td><?php echo $this->_tpl_vars['inRecruit']; ?>
</td>
        </tr>
        <tr>
          <td>- <?php echo $this->_tpl_vars['lang']->get('amount_conquered'); ?>
:</td>
          <td><?php if ($this->_tpl_vars['enobled'] != 0):  echo $this->_tpl_vars['enobled'];  else: ?>0<?php endif; ?></td>
        </tr>
        <tr>
          <th><?php echo $this->_tpl_vars['lang']->get('amount_can_be_recruited'); ?>
:</th>
          <th><?php echo $this->_tpl_vars['amountSnobsCanBeRecruited']; ?>
</th>
        </tr>
        </tbody>
      </table>
      <br/>
      <table>
        <tbody>
          <tr>
            <td>
              <img alt="Goldmünzen" src="graphic/gold_big.png" />
            </td>
            <td>
              <h4><?php echo $this->_tpl_vars['lang']->get('coins'); ?>
</h4>
                <p><?php echo $this->_tpl_vars['lang']->get('coins_info'); ?>
</p>
            </td>
          </tr>
      </tbody>
    </table>
<table class="vis">
  <tbody>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']->get('coins_all'); ?>
:</td>
      <td><?php echo $this->_tpl_vars['coinsAll']; ?>
</td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']->get('coins_next_snob'); ?>
:</td>
      <td><?php echo $this->_tpl_vars['coinsNext']; ?>
</td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']->get('limit'); ?>
:</td>
      <td><?php echo $this->_tpl_vars['snobLimit']; ?>
</td>
    </tr>
  </tbody>
</table>
<table class="vis">
  <tbody>
    <tr>
      <th><?php echo $this->_tpl_vars['lang']->get('need'); ?>
</th>
      <th><?php echo $this->_tpl_vars['lang']->get('coinage'); ?>
</th>
    </tr>
    <tr>
      <td>
        <img alt="" title="Holz" src="graphic/holz.png?1"/> <?php echo $this->_tpl_vars['coinPrice']['wood']; ?>

        <img alt="" title="Lehm" src="graphic/lehm.png?1"/> <?php echo $this->_tpl_vars['coinPrice']['stone']; ?>

        <img alt="" title="Eisen" src="graphic/eisen.png?1"/> <?php echo $this->_tpl_vars['coinPrice']['iron']; ?>

      </td>
      <td class="inactive">
        <?php if ($this->_tpl_vars['makeCoin']): ?>
        <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=snob&action=coin&h=<?php echo $this->_tpl_vars['hkey']; ?>
">&raquo; <?php echo $this->_tpl_vars['lang']->get('do_coinage'); ?>
</a>
        <?php else: ?>
        <span><?php echo $this->_tpl_vars['lang']->grab('error','ress_available_in'); ?>
 <span class="timer_replace"><?php echo $this->_tpl_vars['coinError']; ?>
</span></span><span style="display:none"><?php echo $this->_tpl_vars['lang']->grab('error','ress_available'); ?>
</span>
        <?php endif; ?>
      </td>
    </tr>
  </tbody>
</table><br>

<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=snob&mode=mass_muenze">Massenprägen &raquo;</a>
		<?php endif;  endif;  if ($this->_tpl_vars['ag_style'] != 2):  if (count ( $this->_tpl_vars['snobed_villages'] ) > 0): ?>
	<br /><br />
	<table class="vis" width="300">
		<tr>
			<th><?php echo $this->_tpl_vars['lang']->get('controlled'); ?>
</th>
		</tr>
		<?php $_from = $this->_tpl_vars['snobed_villages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['villagename']):
?>
			<tr>
				<td>
					<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['villagename']; ?>
</a>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif;  endif;  endif; ?>