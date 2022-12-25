<?php /* Smarty version 2.6.14, created on 2022-12-24 00:49:50
         compiled from game_hide.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stage', 'game_hide.tpl', 10, false),)), $this); ?>
<table>
	<tr>
		<td style="padding:2px;">
			<table>
				<tr>
					<td>
						<img src="<?php echo $this->_tpl_vars['cl_builds']->getGraphic('hide',$this->_tpl_vars['village']['hide']); ?>
" title="Versteck" alt="" />
					</td>
					<td>
						<h2><?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['building']); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['village']['hide'])) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)</h2>
						<?php echo $this->_tpl_vars['description']; ?>

					</td>
				</tr>
			</table><br />
			<table class="vis">
				<tr>
					<td width="200">
      <?php echo $this->_tpl_vars['lang']->get('size_now'); ?>

					</td>
					<td>
						<b><?php echo $this->_tpl_vars['hide_datas']['max_hide']; ?>
</b>
      <?php echo $this->_tpl_vars['lang']->get('res'); ?>

					</td>
				</tr>

				<?php if (( $this->_tpl_vars['hide_datas']['max_hide_next'] ) == false): ?>

				<?php else: ?>


					<tr>
						<td>
							<?php echo $this->_tpl_vars['lang']->get('size_next'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['village']['hide']+1)) ? $this->_run_mod_handler('stage', true, $_tmp) : stage($_tmp)); ?>
)
						</td>
						<td>
							<b><?php echo $this->_tpl_vars['hide_datas']['max_hide_next']; ?>
</b>
       <?php echo $this->_tpl_vars['lang']->get('res'); ?>

						</td>
					</tr>
				<tr>
    			<?php endif; ?>

					<td>
						<?php echo $this->_tpl_vars['lang']->get('res_stolen'); ?>
:</td>
					<td>
						<img src="graphic/holz.png" title="Holz" alt="" /> <?php echo $this->_tpl_vars['village']['r_wood']-$this->_tpl_vars['hide_datas']['max_hide']; ?>

						<img src="graphic/lehm.png" title="Lehm" alt="" /><?php echo $this->_tpl_vars['village']['r_stone']-$this->_tpl_vars['hide_datas']['max_hide']; ?>

						<img src="graphic/eisen.png" title="Eisen" alt="" /><?php echo $this->_tpl_vars['village']['r_iron']-$this->_tpl_vars['hide_datas']['max_hide']; ?>

					</td>
				</tr>
				<tr>
					<td colspan="2">
      <?php echo $this->_tpl_vars['lang']->get('market_info'); ?>

					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>