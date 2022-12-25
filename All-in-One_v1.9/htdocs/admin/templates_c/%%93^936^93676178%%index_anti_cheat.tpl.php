<?php /* Smarty version 2.6.14, created on 2011-04-02 10:08:03
         compiled from index_anti_cheat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urldecode', 'index_anti_cheat.tpl', 26, false),array('modifier', 'htmlentities', 'index_anti_cheat.tpl', 26, false),)), $this); ?>
<!-- 
This ds-lan extension was written by Alexander Thiemann
Visit me: www.agrafix.net
Mail  me: mail@agrafix.net
-->
<h2>AntiCheat Script</h2>

<?php if (! empty ( $this->_tpl_vars['action_text'] )): ?>
<h3>Aktion</h3>
<?php echo $this->_tpl_vars['action_text']; ?>

<?php endif; ?>

<h3>Multis</h3>
<?php if ($this->_tpl_vars['multis_found'] == 'Y'): ?>
<table class="vis">
<tr>
	<th>Spieler</th>
	<th>IP</th>
	<th>Spieler mit gleicher IP</th>
	<th>Aktion</th>
</tr>

<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?>
<?php if ($this->_tpl_vars['u']['multi']['enum'] == 'Y'): ?>
<tr>
	<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
 <?php if ($this->_tpl_vars['u']['banned'] == 'Y'): ?>(gesperrt)<?php endif; ?></td>
	<td>Heute: <?php echo $this->_tpl_vars['u']['ip']; ?>
</td>
	<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['multi']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</td>
	<td>
		<a href="index.php?screen=anti_cheat&amp;do=ban&amp;user[0]=<?php echo $this->_tpl_vars['u']['id']; ?>
&amp;user[1]=<?php echo $this->_tpl_vars['u']['multi']['userid']; ?>
">Beide Sperren</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=ban&amp;user[0]=<?php echo $this->_tpl_vars['u']['id']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
 Sperren</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=ban&amp;user[0]=<?php echo $this->_tpl_vars['u']['multi']['userid']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['multi']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
 Sperren</a> <br />
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]=<?php echo $this->_tpl_vars['u']['id']; ?>
&amp;user[1]=<?php echo $this->_tpl_vars['u']['multi']['userid']; ?>
">Beiden ein Dorf wegnehmen</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]=<?php echo $this->_tpl_vars['u']['id']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
 ein Dorf wegnehmen</a> - 
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]=<?php echo $this->_tpl_vars['u']['multi']['userid']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['multi']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
 ein Dorf wegnehmen</a>
	</td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php else: ?>
<i>Keine Multis gefunden.</i>
<?php endif; ?>

<h3>Spieler sperren/entsperren</h3>
<table class="vis">
<tr>
	<th>Spieler</th>
	<th>Sperrstatus</th>
	<th>Aktion</th>
</tr>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?>
<tr>
	<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['u']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</td>
	<td>
		<form action="index.php?screen=anti_cheat&amp;do=change_ban_state&amp;id=<?php echo $this->_tpl_vars['u']['id']; ?>
" method="post">
		<select name="state">
			<option value="Y" <?php if ($this->_tpl_vars['u']['banned'] == 'Y'): ?>selected="selected"<?php endif; ?>>gesperrt</option>
			<option value="N" <?php if ($this->_tpl_vars['u']['banned'] == 'N'): ?>selected="selected"<?php endif; ?>>entsperrt</option>
		</select>
		<input type="submit" value="&auml;ndern" />
		</form>
	</td>
	<td>
		<a href="index.php?screen=anti_cheat&amp;do=remove_village&amp;user[0]=<?php echo $this->_tpl_vars['u']['id']; ?>
">Dorf wegnehmen</a>
	</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php echo '
<script type="text/javascript">
/**
 * DO NOT REMOVE THIS
 */
 
window.onload = _init_agrafix;

function _init_agrafix() { 
	 var st = document.getElementById("serverTime");
	 var parentP = st.parentNode;
	 
	 parentP.innerHTML = "<a href=\'http://www.agrafix.net\' target=\'_blank\'>AntiCheat Erweiterung v1.1 von agrafix.net</a><br /> " + parentP.innerHTML;
}
</script>
'; ?>

<!--
End of Extension
-->