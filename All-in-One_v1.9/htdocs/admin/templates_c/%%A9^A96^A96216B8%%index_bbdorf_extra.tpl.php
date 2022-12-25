<?php /* Smarty version 2.6.14, created on 2011-04-02 11:13:29
         compiled from index_bbdorf_extra.tpl */ ?>
<center>
<h2>Barbarendörfer Extra</h2>
<h4>Einfach alles ausfüllen und unten auf "Erstellen" klicken ;-)</h4><br><br>
</center>

<form action="?screen=bbdorf_extra&do=create" method="post">
<table>
<tr>
<td>
Anzahl Barbarendörfer:
</td>
<td>
<input type="text" size="1" maxlength="3" name="bbanzahl"> (Max. 100)
</td>
</tr>
<tr>
<td>
Zufall Techlevel:
</td>
<td>
<input type="checkbox" name="techlevel">
</td>
</tr>
</table><br>

<table cellpadding="10" valign="top" class="vis" cellspacing="10">
<tr>
<th>Dorfeigenschaften</th>
<th>Truppeneigenschaften</th>
</tr>
<tr>
<td>
<table class="vis" border="0" valign="top" cellpadding="2" cellspacing="2">
<?php $_from = $this->_tpl_vars['buildings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['number'] => $this->_tpl_vars['dbname']):
?>
<?php if ($this->_tpl_vars['dbname'] != 'farm'): ?>
<tr valign="top">
<td>
<?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['dbname']); ?>

</td>
<td>
Min. <input type="text" size="1" maxlength="2" name="<?php echo $this->_tpl_vars['dbname']; ?>
_min"> Max. <input type="text" size="1" maxlength="2" name="<?php echo $this->_tpl_vars['dbname']; ?>
_max">
</td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</table>
</td>
<td>
<table class="vis" border="0" valign="top" cellpadding="2" cellspacing="2">
<?php $_from = $this->_tpl_vars['units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gername'] => $this->_tpl_vars['dbname']):
?>
<?php if ($this->_tpl_vars['dbname'] != 'unit_snob' && $this->_tpl_vars['dbname'] != 'unit_knight'): ?>
<tr valign="top">
<td style="padding-right: 95px;" valign="top">
<?php echo $this->_tpl_vars['gername']; ?>

</td>
<td valign="top">
<input type="checkbox" name="units[<?php echo $this->_tpl_vars['dbname']; ?>
]"> Max. <input type="text" size="3" maxlength="5" name="units_anzahl[<?php echo $this->_tpl_vars['dbname']; ?>
]">
</td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</table>
</td>
</tr>
</table><br>

<input type="submit" value="Erstellen!">
</form><br>

<?php if ($this->_tpl_vars['done']): ?>
<font color='green'>Erfolgreich erstellt!</font>
<?php else: ?>
<?php echo $this->_tpl_vars['err']; ?>

<?php endif; ?>
<p align="right">&copy 2011 by <a target="_blank" href="http://www.twlan.org/de/member.php?action=profile&uid=6529">Yannici</a></p>