<?php /* Smarty version 2.6.14, created on 2022-12-24 01:59:05
         compiled from game_overview_villages_combined.tpl */ ?>
<table class="vis">
<tr>
	<th><?php echo $this->_tpl_vars['lang']->get('village'); ?>
</th>
	<th><img src="graphic/overview/main.png" title="Hauptgebäude" alt="" /></th>
	<th><img src="graphic/overview/barracks.png" title="Kaserne" alt="" /></th>
	<th><img src="graphic/overview/stable.png" title="Stall" alt="" /></th>
	<th><img src="graphic/overview/garage.png" title="Werkstatt" alt="" /></th>
	<th><img src="graphic/overview/smith.png" title="Schmiede" alt="" /></th>
	<th><img src="graphic/overview/farm.png" title="Bauernhof" alt="" /></th>
	
	<?php $_from = $this->_tpl_vars['unit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname'] => $this->_tpl_vars['name']):
?>
		<th width="35"><img src="graphic/unit/<?php echo $this->_tpl_vars['dbname']; ?>
.png" title="<?php echo $this->_tpl_vars['name']; ?>
" alt="" /></th>
	<?php endforeach; endif; unset($_from); ?>
	
	<th><img src="graphic/overview/trader.png" title="Händler" alt="" /></th>

</tr>

<?php $_from = $this->_tpl_vars['villages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arr_id'] => $this->_tpl_vars['arr']):
?>
	<tr>
		<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&screen=overview"><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['name']; ?>
 (<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['x']; ?>
|<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['y']; ?>
)</a> <a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=place&x=<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['x']; ?>
&y=<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['y']; ?>
"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </td>

		<?php if (isset ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_build']['buildname'] )): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=main"><img src="graphic/overview/prod_running.png" title="<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_build']['buildname']; ?>
: <?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_build']['end_time']; ?>
" alt="" /></a></td>
		<?php else: ?>
		    <td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=main"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['barracks'] == 0): ?>
        	<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=barracks"><img src="graphic/overview/prod_impossible.png" title="Produktion nicht möglich" alt="" /></a></td>
		<?php elseif (! empty ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['barracks_prod']['unit'] )): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=barracks"><img src="graphic/overview/prod_running.png" title="<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['barracks_prod']['unit']; ?>
: <?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['barracks_prod']['time']; ?>
" alt="" /></a></td>
		<?php else: ?>
        	<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=barracks"><img src="graphic/overview/prod_avail.png" title="Keine Rekrutierung" alt="" /></a></td>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['stable'] == 0): ?>
        	<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=stable"><img src="graphic/overview/prod_impossible.png" title="Produktion nicht möglich" alt="" /></a></td>
		<?php elseif (! empty ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['stable_prod']['unit'] )): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=stable"><img src="graphic/overview/prod_running.png" title="<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['stable_prod']['unit']; ?>
: <?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['stable_prod']['time']; ?>
" alt="" /></a></td>
		<?php else: ?>
		    <td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=stable"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['garage'] == 0): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=garage"><img src="graphic/overview/prod_impossible.png" title="Produktion nicht möglich" alt="" /></a></td>
		<?php elseif (! empty ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['garage_prod']['unit'] )): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=garage"><img src="graphic/overview/prod_running.png" title="<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['garage_prod']['unit']; ?>
: <?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['garage_prod']['time']; ?>
" alt="" /></a></td>
		<?php else: ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=garage"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['smith'] == 0): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=smith"><img src="graphic/dots/yellow.png" title="Schmiede nicht vorhanden" alt="" /></a></td>
		<?php elseif (! empty ( $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_tec']['tecname'] )): ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=smith"><img src="graphic/overview/prod_running.png" title="<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_tec']['tecname']; ?>
: <?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['first_tec']['end_time']; ?>
" alt="" /></a></td>
		<?php else: ?>
			<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=smith"><img src="graphic/overview/prod_avail.png" title="Keine Produktion" alt="" /></a></td>
		<?php endif; ?>

		<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=farm"><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['max_farm']-$this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['r_bh']; ?>
 (<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['farm']; ?>
)</a></td>
		
		<?php $_from = $this->_tpl_vars['unit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname'] => $this->_tpl_vars['name']):
?>
			<?php if ($this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']][$this->_tpl_vars['dbname']] == 0): ?>
					<td class="hidden"><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']][$this->_tpl_vars['dbname']]; ?>
</td>
			<?php else: ?>
					<td><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']][$this->_tpl_vars['dbname']]; ?>
</td>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		
		<td><a href="game.php?village=<?php echo $this->_tpl_vars['arr_id']; ?>
&amp;screen=market"><?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['dealers']['in_village']; ?>
/<?php echo $this->_tpl_vars['villages'][$this->_tpl_vars['arr_id']]['dealers']['max_dealers']; ?>
</a></td>


	
	</tr>
<?php endforeach; endif; unset($_from); ?>

</table>