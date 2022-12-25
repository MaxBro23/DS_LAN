<?php /* Smarty version 2.6.14, created on 2022-12-24 02:14:58
         compiled from game_market_own_offer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'game_market_own_offer.tpl', 6, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['error'] )): ?>
	<b><div style="color:red;"><?php echo $this->_tpl_vars['error']; ?>
</div></b><br />
<?php endif; ?>

<table class="vis">
<tr><th><?php echo $this->_tpl_vars['lang']->get('trader'); ?>
: <?php echo $this->_tpl_vars['inside_dealers']; ?>
/<?php echo $this->_tpl_vars['max_dealers']; ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('maximum'); ?>
: <?php echo smarty_function_math(array('equation' => "x * 1000",'x' => $this->_tpl_vars['inside_dealers']), $this);?>
</th></tr>
</table>

<h3><?php echo $this->_tpl_vars['lang']->get('offer'); ?>
</h3>

<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=market&amp;mode=own_offer&amp;action=new_offer&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post">
<table class="vis">

<tr><td><?php echo $this->_tpl_vars['lang']->get('doOffer'); ?>
:</td>
<td><input name="sell" type="text" size="5" value="" /></td><td>
<table cellspacing="0" cellpadding="0"><tr>
<td><input id="res_sell_wood" name="res_sell" type="radio" value="wood" /></td><td width="30"><label for="res_sell_wood"><img src="graphic/holz.png" title="Holz" alt="" /></label></td>
<td><input id="res_sell_stone" name="res_sell" type="radio" value="stone" /></td><td width="30"><label for="res_sell_stone"><img src="graphic/lehm.png" title="Lehm" alt="" /></label></td>
<td><input id="res_sell_iron" name="res_sell" type="radio" value="iron" /></td><td width="30"><label for="res_sell_iron"><img src="graphic/eisen.png" title="Eisen" alt="" /></label></td>
</tr></table>

</td></tr>
	
<tr><td><?php echo $this->_tpl_vars['lang']->get('for'); ?>
:</td>
<td><input name="buy" type="text" size="5" value="" /></td><td>
<table cellspacing="0" cellpadding="0"><tr>
<td><input id="res_buy_wood" name="res_buy" type="radio" value="wood" /></td><td width="30"><label for="res_buy_wood"><img src="graphic/holz.png" title="Holz" alt="" /></label></td>
<td><input id="res_buy_stone" name="res_buy" type="radio" value="stone" /></td><td width="30"><label for="res_buy_stone"><img src="graphic/lehm.png" title="Lehm" alt="" /></label></td>
<td><input id="res_buy_iron" name="res_buy" type="radio" value="iron" /></td><td width="30"><label for="res_buy_iron"><img src="graphic/eisen.png" title="Eisen" alt="" /></label></td>
</tr></table>

</td></tr>

<tr><td><?php echo $this->_tpl_vars['lang']->get('multi'); ?>
:</td>
<td><input name="multi" type="text" size="5" value="1" /></td><td><?php echo $this->_tpl_vars['lang']->get('times'); ?>

</td></tr>
	
</table>
<input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('create'); ?>
" />
</form>

<h3><?php echo $this->_tpl_vars['lang']->get('own_offer'); ?>
</h3>
<?php if (count ( $this->_tpl_vars['offers'] ) > 0): ?>
	<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=market&amp;mode=own_offer&amp;action=modify_offers&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post">
	<table class="vis">
	<tr><th>Biete</th><th><?php echo $this->_tpl_vars['lang']->get('for'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('amount'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->get('in'); ?>
</th></tr>
		<?php $_from = $this->_tpl_vars['offers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['arr']):
?>
			<tr><td><input name="id_<?php echo $this->_tpl_vars['id']; ?>
" type="checkbox" /><?php if ($this->_tpl_vars['arr']['sell_ress'] == 'wood'): ?><img src="graphic/holz.png" title="Holz" alt="" /><?php endif;  if ($this->_tpl_vars['arr']['sell_ress'] == 'stone'): ?><img src="graphic/lehm.png" title="Lehm" alt="" /><?php endif;  if ($this->_tpl_vars['arr']['sell_ress'] == 'iron'): ?><img src="graphic/eisen.png" title="Eisen" alt="" /><?php endif;  echo $this->_tpl_vars['arr']['sell']; ?>
 </td>
			<td><?php if ($this->_tpl_vars['arr']['buy_ress'] == 'wood'): ?><img src="graphic/holz.png" title="Holz" alt="" /><?php endif;  if ($this->_tpl_vars['arr']['buy_ress'] == 'stone'): ?><img src="graphic/lehm.png" title="Lehm" alt="" /><?php endif;  if ($this->_tpl_vars['arr']['buy_ress'] == 'iron'): ?><img src="graphic/eisen.png" title="Eisen" alt="" /><?php endif;  echo $this->_tpl_vars['arr']['buy']; ?>
 </td>
			<td><?php echo $this->_tpl_vars['arr']['multi']; ?>
</td>	
			<td><?php echo $this->_tpl_vars['arr']['time']; ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	<tr><th colspan="4"><input name="all" type="checkbox" onclick="selectAll(this.form, this.checked)" /> <?php echo $this->_tpl_vars['lang']->get('sel_all'); ?>
 </th></tr>
	</table>
	
	<input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('delete'); ?>
" name="delete" />
	<input type="text" size="2" name="mod_count" value="1" />
	<input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('update'); ?>
" name="increase" />
	<input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('reduce'); ?>
" name="decrease" /></form>
<?php endif; ?>