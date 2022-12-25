<?php /* Smarty version 2.6.14, created on 2022-12-24 02:15:06
         compiled from game_market_confirm_send.tpl */ ?>
<h2><?php echo $this->_tpl_vars['lang']->get('confirm_transport'); ?>
</h2>

<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=market&amp;action=send&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="post">

<table class="vis" width="350">
<tr><th colspan="2"><?php echo $this->_tpl_vars['lang']->get('transport'); ?>
</th></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('target'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['confirm']['to_villageid']; ?>
"><?php echo $this->_tpl_vars['confirm']['to_villagename']; ?>
 (<?php echo $this->_tpl_vars['confirm']['to_x']; ?>
|<?php echo $this->_tpl_vars['confirm']['to_y']; ?>
)</a></td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('player'); ?>
:</td><td><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_player&amp;id=<?php echo $this->_tpl_vars['confirm']['to_userid']; ?>
"><?php echo $this->_tpl_vars['confirm']['to_username']; ?>
</a></td></tr>
<tr><td width="150">Rohstoffe:</td>
<td width="200"><?php if ($this->_tpl_vars['confirm']['wood'] > 0): ?><img src="graphic/holz.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['confirm']['wood']; ?>
 <?php endif;  if ($this->_tpl_vars['confirm']['stone'] > 0): ?><img src="graphic/lehm.png" title="Lehm" alt="" /><?php echo $this->_tpl_vars['confirm']['stone']; ?>
 <?php endif;  if ($this->_tpl_vars['confirm']['iron'] > 0): ?><img src="graphic/eisen.png" title="Eisen" alt="" /><?php echo $this->_tpl_vars['confirm']['iron']; ?>
 <?php endif; ?></td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('needed_traders'); ?>
:</td><td><?php echo $this->_tpl_vars['confirm']['dealers']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('duration'); ?>
:</td><td><?php echo $this->_tpl_vars['confirm']['dealer_running']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('arrival'); ?>
:</td><td><?php echo $this->_tpl_vars['confirm']['time_to']; ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('back'); ?>
:</td><td><?php echo $this->_tpl_vars['confirm']['time_back']; ?>
</td></tr>
</table><br />

<input type="submit" value="&raquo; OK &laquo;" style="font-size:10pt" />

<input type="hidden" name="target_id" value="<?php echo $this->_tpl_vars['confirm']['to_villageid']; ?>
" />
<input type="hidden" name="wood" value="<?php echo $this->_tpl_vars['confirm']['wood']; ?>
" />
<input type="hidden" name="stone" value="<?php echo $this->_tpl_vars['confirm']['stone']; ?>
" />
<input type="hidden" name="iron" value="<?php echo $this->_tpl_vars['confirm']['iron']; ?>
" />

</form>