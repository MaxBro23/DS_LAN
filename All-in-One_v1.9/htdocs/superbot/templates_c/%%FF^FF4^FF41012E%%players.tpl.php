<?php /* Smarty version 2.6.14, created on 2009-02-23 18:07:52
         compiled from players.tpl */ ?>
<?php echo $this->_tpl_vars['action']; ?>
</br>
<?php if ($this->_tpl_vars['num_players'] == 0):  echo $this->_tpl_vars['noplayers']; ?>
</br>
<?php else: ?>
<ul>
<?php $_from = $this->_tpl_vars['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['item']):
?>
<li><?php echo $this->_tpl_vars['item']; ?>
&nbsp;<a href="javascript:load_page('index.php?page=players&delete=<?php echo $this->_tpl_vars['item']; ?>
')"><img src="img/x.png" height="25px" widht="25px" border="0" alt="<?php echo $this->_tpl_vars['delete']; ?>
"></img></a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>
<input type="text" name="player" id="player"><input type="submit" value="<?php echo $this->_tpl_vars['addplayer']; ?>
" onclick="add_player(document.getElementById('player').value)">
