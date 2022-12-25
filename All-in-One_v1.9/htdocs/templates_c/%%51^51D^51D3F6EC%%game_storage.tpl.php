<?php /* Smarty version 2.6.14, created on 2022-12-24 01:39:37
         compiled from game_storage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stage', 'game_storage.tpl', 7, false),array('modifier', 'format_date', 'game_storage.tpl', 54, false),array('modifier', 'format_time', 'game_storage.tpl', 57, false),)), $this); ?>
<table>
	<tr>
		<td>
			<img src="<?php echo $this->_tpl_vars['cl_builds']->getGraphic('storage',$this->_tpl_vars['village']['storage']); ?>
" title="Speicher" alt="" />
		</td>
		<td>
			<h2><?php echo $this->_tpl_vars['lang']->get('storage'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['village']['storage'])) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)</h2>
			<?php echo $this->_tpl_vars['description']; ?>

		</td>
	</tr>
</table>
<br />
<table>
	<tr>
		<td width="220">
			<?php echo $this->_tpl_vars['lang']->get('capacity'); ?>
:
		</td>
		<td>
			<b><?php echo $this->_tpl_vars['store_datas']['storage_size']; ?>
</b> <?php echo $this->_tpl_vars['lang']->get('units_per_resource'); ?>

		</td>
	</tr>
	
	<?php if (( $this->_tpl_vars['store_datas']['storage_size_next'] ) == false): ?>

	<?php else: ?>

		<tr>
			<td>
				<?php echo $this->_tpl_vars['lang']->get('capacity_at'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['village']['storage']+1)) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)
			</td>
			<td>
				<b><?php echo $this->_tpl_vars['store_datas']['storage_size_next']; ?>
</b> <?php echo $this->_tpl_vars['lang']->get('units_per_resource'); ?>

			</td>
		</tr>

    <?php endif; ?>

</table>
<br />

<table class="vis">
	<tr>
		<th width="150">
   <?php echo $this->_tpl_vars['lang']->get('storage_full'); ?>

		</th>
		<th>
			<?php echo $this->_tpl_vars['lang']->get('time'); ?>
 (hh:mm:ss)
		</th>
	</tr>
	<?php if ($this->_tpl_vars['wood_sec'] != 0): ?>
		<tr>
			<td width="250">
				<img src="graphic/holz.png" title="Holz" alt="" />
				<?php echo ((is_array($_tmp=$this->_tpl_vars['wood_sec_date'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>

			</td>
			<td>
				<span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['wood_sec'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span>
			</td>
		</tr>
	<?php else: ?>
		<tr>
			<td width="250" colspan="2" class="error">
				<img src="graphic/holz.png" title="Holz" alt="" />
        <?php echo $this->_tpl_vars['lang']->grab('error','storage_is_full'); ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['stone_sec'] != 0): ?>
		<tr>
			<td width="250">
				<img src="graphic/lehm.png" title="Lehm" alt="" />
				<?php echo ((is_array($_tmp=$this->_tpl_vars['stone_sec_date'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>

			</td>
			<td>
				<span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['stone_sec'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span>
			</td>
		</tr>
	<?php else: ?>
		<tr>
			<td width="250" colspan="2" class="error">
				<img src="graphic/lehm.png" title="Lehm" alt="" />
    <?php echo $this->_tpl_vars['lang']->grab('error','storage_is_full'); ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['iron_sec'] != 0): ?>
		<tr>
			<td width="250">
				<img src="graphic/eisen.png" title="Eisen" alt="" />
				<?php echo ((is_array($_tmp=$this->_tpl_vars['iron_sec_date'])) ? $this->_run_mod_handler('format_date', true, $_tmp) : format_date($_tmp)); ?>

			</td>
			<td>
				<span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['iron_sec'])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span>
			</td>
		</tr>
	<?php else: ?>
		<tr>
			<td width="250" colspan="2" class="error">
				<img src="graphic/eisen.png" title="Eisen" alt="" />
    <?php echo $this->_tpl_vars['lang']->grab('error','storage_is_full'); ?>

			</td>
		</tr>
	<?php endif; ?>
</table>