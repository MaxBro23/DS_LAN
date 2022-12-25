<?php /* Smarty version 2.6.14, created on 2022-12-24 00:45:04
         compiled from game_overview_graphic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'format_time', 'game_overview_graphic.tpl', 57, false),)), $this); ?>
ï»¿<table cellspacing="0" cellpadding="0"><tr><td valign="top">

<table width="100%"><tr>
	<td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=overview&amp;action=set_labels&amp;labels=<?php if (! $this->_tpl_vars['labels']): ?>1<?php else: ?>0<?php endif; ?>&amp;h=3760">
      <?php if ($this->_tpl_vars['user']['labels']): ?>
        <?php echo $this->_tpl_vars['lang']->get('set_labels_off'); ?>

      <?php else: ?>
        <?php echo $this->_tpl_vars['lang']->get('set_labels_on'); ?>

      <?php endif; ?></a></td>

<td align="right"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=overview&amp;action=set_visual&amp;visual=0&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
"><?php echo $this->_tpl_vars['lang']->get('set_visual_classic'); ?>
</a></td>
</tr></table>

<table cellspacing="0" cellpadding="0" style="border-width:1px; border-style: solid; border-color:#804000; background-color:#F1EBDD;" align="center">
<tr><td>

<div style="position:relative">
<img width="600" height="418" src="graphic/<?php echo $this->_tpl_vars['time']; ?>
/back_none.jpg" alt="" />
<?php $kirche = true;  $_from = $this->_tpl_vars['built_builds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dbname']):
 if ($this->_tpl_vars['dbname'] == 'statue'): ?>
<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=<?php echo $this->_tpl_vars['dbname']; ?>
"><img class="p_<?php echo $this->_tpl_vars['dbname']; ?>
" src="/graphic/visual/statue1.png" /></a>
<?php else: ?>

	<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=<?php echo $this->_tpl_vars['dbname']; ?>
"><img class="p_<?php echo $this->_tpl_vars['dbname']; ?>
" src="<?php echo $this->_tpl_vars['cl_builds']->getGraphic($this->_tpl_vars['dbname'],$this->_tpl_vars['village'][$this->_tpl_vars['dbname']]); ?>
" /></a>
	<?php if ($this->_tpl_vars['dbname'] == 'main'): ?>
		<?php if ($this->_tpl_vars['village'][$this->_tpl_vars['dbname']] >= 15): ?>
		<img class="p_main_flag" src="/graphic/visual/mainflag3.gif" />
		<?php elseif ($this->_tpl_vars['village'][$this->_tpl_vars['dbname']] >= 5): ?>
		<img class="p_main_flag" src="/graphic/visual/mainflag2.gif" />
		<?php else: ?>
		<img class="p_main_flag" src="/graphic/visual/mainflag1.gif" />
		<?php endif; ?>
	<?php elseif ($this->_tpl_vars['dbname'] == 'church'): ?>
	<?php $kirche = false; ?>
	<?php elseif ($this->_tpl_vars['dbname'] == 'farm'): ?>
		<?php if ($this->_tpl_vars['village'][$this->_tpl_vars['dbname']] >= 20): ?>
		<img class="p_farm_field" src="/graphic/visual/farm3_field.png" />
		<?php endif; ?>
	<?php endif; ?>

<?php endif;  endforeach; endif; unset($_from);  if($kirche) echo '<img class="p_church" src="/graphic/visual/church_disabled.png" />'; ?>
<img class="empty" src="graphic/map/empty.png" alt="" usemap="#map" />
<map name="map" id="map">
<?php $_from = $this->_tpl_vars['built_builds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dbname']):
?>
	<area shape="poly" coords="<?php echo $this->_tpl_vars['cl_builds']->get_graphicCoords($this->_tpl_vars['dbname']); ?>
" href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=<?php echo $this->_tpl_vars['dbname']; ?>
" alt="<?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['dbname']); ?>
" title="<?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['dbname']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
</map>
<?php if ($this->_tpl_vars['user']['labels']):  $_from = $this->_tpl_vars['built_builds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dbname']):
?>
	<div id="l_<?php echo $this->_tpl_vars['dbname']; ?>
" class="l_<?php echo $this->_tpl_vars['dbname']; ?>
">
	<div class="label">
		<a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=<?php echo $this->_tpl_vars['dbname']; ?>
"><img src="graphic/buildings/<?php echo $this->_tpl_vars['dbname']; ?>
.png" class="middle" alt="<?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['dbname']); ?>
" /> <?php echo $this->_tpl_vars['village'][$this->_tpl_vars['dbname']]; ?>
</a>
		<br /><span style="font-size:7px; font-weight:bold">
    <?php if ($this->_tpl_vars['timer_data'][$this->_tpl_vars['dbname']] > 0): ?><span class="timer"><?php echo ((is_array($_tmp=$this->_tpl_vars['timer_data'][$this->_tpl_vars['dbname']])) ? $this->_run_mod_handler('format_time', true, $_tmp) : format_time($_tmp)); ?>
</span><?php endif; ?>
    <?php if ($this->_tpl_vars['dbname'] == 'market'): ?>
      <?php echo $this->_tpl_vars['dealers_outside']; ?>
/<?php echo $this->_tpl_vars['dealers']; ?>

    <?php endif; ?>
    </span>
	</div>
	</div>
<?php endforeach; endif; unset($_from);  endif; ?>

<script type="text/javascript">overviewShowLevel();</script></td></tr></table></td><td valign="top" width="100%">

			<table class="vis" width="100%">
				<tr><th colspan="2"><?php echo $this->_tpl_vars['lang']->get('prod'); ?>
</th></tr>
				<tr><td width="70"><img src="graphic/holz.png" title="Holz" alt="" /> <?php echo $this->_tpl_vars['lang']->get('wood'); ?>
</td><td><strong><?php echo $this->_tpl_vars['wood_prod_overview']; ?>
</strong> <?php echo $this->_tpl_vars['lang']->get('per'); ?>
 <?php if ($this->_tpl_vars['speed'] > 10):  echo $this->_tpl_vars['lang']->get('minute');  else:  echo $this->_tpl_vars['lang']->get('hour');  endif; ?></td></tr>
				<tr><td><img src="graphic/lehm.png" title="Lehm" alt="" /> <?php echo $this->_tpl_vars['lang']->get('stone'); ?>
</td><td><strong><?php echo $this->_tpl_vars['stone_prod_overview']; ?>
</strong> <?php echo $this->_tpl_vars['lang']->get('per'); ?>
 <?php if ($this->_tpl_vars['speed'] > 10):  echo $this->_tpl_vars['lang']->get('minute');  else:  echo $this->_tpl_vars['lang']->get('hour');  endif; ?></td></tr>
				<tr><td><img src="graphic/eisen.png" title="Eisen" alt="" /> <?php echo $this->_tpl_vars['lang']->get('iron'); ?>
</td><td><strong><?php echo $this->_tpl_vars['iron_prod_overview']; ?>
</strong> <?php echo $this->_tpl_vars['lang']->get('per'); ?>
 <?php if ($this->_tpl_vars['speed'] > 10):  echo $this->_tpl_vars['lang']->get('minute');  else:  echo $this->_tpl_vars['lang']->get('hour');  endif; ?></td></tr>
			</table>

<br />

Dorftyp: <form action="?village=<?php echo $this->_tpl_vars['village']['id']; ?>&screen=overview&action=type_edit" method="post"><select name="type"><option value="" <?php if ($this->_tpl_vars['vill']['type'] == ""): ?> selected <?php endif; ?>>Neutral</option><option value="off" <?php if ($this->_tpl_vars['vill']['type'] == 'off'): ?> selected <?php endif; ?>>OFF</option><option value="deff" <?php if ($this->_tpl_vars['vill']['type'] == 'deff'): ?> selected <?php endif; ?>>DEFF</option></select><input type="submit" value="Ändern"></form>
			<table class="vis" width="100%">
				<tr><th><?php echo $this->_tpl_vars['lang']->get('units'); ?>
</th></tr>
                <?php $_from = $this->_tpl_vars['in_village_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname'] => $this->_tpl_vars['num']):
?>	<?php if ($this->_tpl_vars['dbname'] == 'unit_knight'): ?>
				
<tr><td><img src="graphic/unit/unit_knight.png"> <b><?php echo $this->_tpl_vars['pala']; ?>
</b> <br> <a href="game.php?village=<?php  echo $this->_tpl_vars['village']['id'];  ?>&screen=overview&delete=<?php  echo $this->_tpl_vars['dbname'];  ?>"><font size="-2">L&ouml;schen</font></a></td></tr> 
<?php else: ?>
<tr><td><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png"> <b><?php echo $this->_tpl_vars['num']; ?>
</b> <?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['dbname']); ?>
</td></tr>
<?php endif;  endforeach; endif; unset($_from); ?>
			</table>
<br />
			<?php if ($this->_tpl_vars['village']['agreement'] != 100): ?>
				<table class="vis" width="100%">
				<tr><th><?php echo $this->_tpl_vars['lang']->get('agreement'); ?>
:</th><th><?php echo $this->_tpl_vars['village']['agreement']; ?>
</th></tr>
				</table>
				<br />
			<?php endif; ?>
			<?php if (isset ( $this->_tpl_vars['village']['group'] )): ?>
        <table class="vis" width="100%">
          <tbody>
            <tr>
            <th><?php echo $this->_tpl_vars['lang']->get('group'); ?>
</th>
            </tr>
            <?php if ($this->_tpl_vars['village']['group'] != 0): ?>
              <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['g']):
?>
                <?php if ($this->_tpl_vars['g']['id'] != ''): ?>
                  <tr>
                    <td><?php echo $this->_tpl_vars['g']['group_name']; ?>
</td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <tr>
              <td>
                <a href="javascript:popup_scroll('groups.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&mode=village', 300, 400);">&raquo; <?php echo $this->_tpl_vars['lang']->get('edit'); ?>
</a>
              </td>
            </tr>
          </tbody>
        </table>
			<?php endif; ?>
			
						<?php if (count ( $this->_tpl_vars['other_movements'] ) > 0): ?>
			<table class="vis" width="100%">
				<tr>
					<th><?php echo $this->_tpl_vars['lang']->get('troops_incoming'); ?>
</th>
					<th><?php echo $this->_tpl_vars['lang']->get('arrival'); ?>
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
.png"> <?php echo $this->_tpl_vars['array']['to_villagename']; ?>

				            </a>
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
			
						<?php if (count ( $this->_tpl_vars['my_movements'] ) > 0): ?>
			<table class="vis" width="100%">
				<tr>
					<th><?php echo $this->_tpl_vars['lang']->get('own_troops'); ?>
</th>
					<th><?php echo $this->_tpl_vars['lang']->get('arrival'); ?>
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
.png"> <?php echo $this->_tpl_vars['array']['to_villagename']; ?>

				            </a>
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
		</td>
	</tr
</table>