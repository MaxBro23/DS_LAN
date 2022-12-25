<?php /* Smarty version 2.6.14, created on 2022-12-24 00:48:24
         compiled from game_statue.tpl */ ?>
<?php if ($this->_tpl_vars['lang'] == 'de'): ?>

<table>
<tr>
<td>
<img src="/graphic/big_buildings/statue1.png" title="Statue" alt="" />
</td>
<td>
<h2>Statue (Stufe <?php echo $this->_tpl_vars['level']; ?>
)</h2>
An der Statue huldigen die Dorfbewohner deinem Paladin. Sollte dein Paladin einmal fallen, kannst du hier einen deiner K&auml;mpfer zum neuen Paladin ernennen.</td>
	</tr>
</table>
<br />

<?php if ($this->_tpl_vars['invalid_hkey']): ?><div class='error'><b>hkey ungültig.</b></div><?php endif;  if ($this->_tpl_vars['pdeployon']): ?><div class='error'><b>Der Paladin ist unterwegs!</b></div><?php endif;  if ($this->_tpl_vars['pala_edit']): ?><div class='error'><b>Der Name muss zwischen 1 und 154 Zeichen haben!</b></div><?php endif; ?>

<?php if ($this->_tpl_vars['recruit']): ?>
Fertigstellung des Paladins: <b><?php echo $this->_tpl_vars['time_finish']; ?>
</b><br />
<?php endif; ?>
<table class="vis">
<tr>
<th width="150">Paladin</th>
<th colspan="4" width="120">Bedarf</th>
<th width="130">Zeit (hh:mm:ss)</th>
<th>Aktion</th>
</tr>
<tr>
<td><a href="javascript:popup('popup_unit.php?unit=unit_knight', 520, 520)"> <img src="graphic/unit/unit_knight.png" alt="" /><?php echo $this->_tpl_vars['name']; ?>
</a></td>
<td><img src="graphic/holz.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['wood']; ?>
</td>
<td><img src="graphic/lehm.png" title="Lehm" alt="" /> <?php echo $this->_tpl_vars['stone']; ?>
</td>
<td><img src="graphic/eisen.png" title="Eisen" alt="" /> <?php echo $this->_tpl_vars['iron']; ?>
</td>
<td><img src="graphic/face.png" title="Arbeiter" alt="" /> <?php echo $this->_tpl_vars['pop']; ?>
</td>
<td><?php echo $this->_tpl_vars['time']; ?>
</td>

<?php if (( $this->_tpl_vars['wood2'] > $this->_tpl_vars['r_wood'] ) || ( $this->_tpl_vars['stone2'] > $this->_tpl_vars['r_stone'] ) || ( $this->_tpl_vars['iron2'] > $this->_tpl_vars['r_iron'] )): ?>
<td class="inactive">Nicht gen&uuml;gend Rohstoffe vorhanden.</td>
<?php elseif ($this->_tpl_vars['pop2'] > $this->_tpl_vars['rtsfarm']): ?>
<td class="inactive">Zu wenig Bauernh&ouml;fe.</td>
<?php elseif ($this->_tpl_vars['paladin']): ?>
<td class="inactive">Jeder Spieler kann nur einen Paladin haven.</td>
<?php else: ?>
<td><a href="game.php?village=<?php echo $this->_tpl_vars['villageid']; ?>
&amp;screen=statue&amp;action=train&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
">Paladin ernennen</a></td>
<?php endif; ?>
</tr>
</table>
<?php if (( $this->_tpl_vars['paladin'] == 1 ) && ( $this->_tpl_vars['pala_wo'] != $this->_tpl_vars['villageid'] )): ?>
<br><a href="game.php?village=<?php echo $this->_tpl_vars['villageid']; ?>
&amp;screen=statue&amp;action=deploy&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
">&raquo; Paladin hierher umstationieren</a>
<?php endif; ?>
<br />
<form action="game.php?village=<?php echo $this->_tpl_vars['villageid']; ?>
&amp;screen=statue&amp;action=rename&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="POST">
<b>Name:</b> <input type="text" name="palaname" value="<?php echo $this->_tpl_vars['name']; ?>
" /> 
<input type="submit" value="Umbenennen">
</form>

<?php else: ?>

<table>
<tr>
<td>
<img src="/graphic/big_buildings/statue1.png" title="Statue" alt="" />
</td>
<td>
<h2>Statue (Level <?php echo $this->_tpl_vars['level']; ?>
)</h2>
At the statue the villagers render homage to your paladin. If your paladin dies you can appoint one of your fighters to become the new paladin.</td>
	</tr>
</table>
<br />

<?php if ($this->_tpl_vars['invalid_hkey']): ?><div class='error'><b>Invalid HKEY.</b></div><?php endif;  if ($this->_tpl_vars['pdeployon']): ?><div class='error'><b>The paladin is on his way!</b></div><?php endif;  if ($this->_tpl_vars['pala_edit']): ?><div class='error'><b>The name must be at least 1 char, and maximum 154!</b></div><?php endif; ?>

<?php if ($this->_tpl_vars['recruit']): ?>
The palladin will be done at: <b><?php echo $this->_tpl_vars['time_finish']; ?>
</b><br />
<?php endif; ?>
<table class="vis">
<tr>
<th width="150">Paladin</th>
<th colspan="4" width="120">Requirements</th>
<th width="130">Duration (hh:mm:ss)</th>
<th>Action</th>
</tr>
<tr>
<td><a href="javascript:popup('popup_unit.php?unit=unit_knight', 520, 520)"> <img src="graphic/unit/unit_knight.png" alt="" /><?php echo $this->_tpl_vars['name']; ?>
</a></td>
<td><img src="graphic/holz.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['wood']; ?>
</td>
<td><img src="graphic/lehm.png" title="Lehm" alt="" /> <?php echo $this->_tpl_vars['stone']; ?>
</td>
<td><img src="graphic/eisen.png" title="Eisen" alt="" /> <?php echo $this->_tpl_vars['iron']; ?>
</td>
<td><img src="graphic/face.png" title="Arbeiter" alt="" /> <?php echo $this->_tpl_vars['pop']; ?>
</td>
<td><?php echo $this->_tpl_vars['time']; ?>
</td>

<?php if (( $this->_tpl_vars['wood2'] > $this->_tpl_vars['r_wood'] ) || ( $this->_tpl_vars['stone2'] > $this->_tpl_vars['r_stone'] ) || ( $this->_tpl_vars['iron2'] > $this->_tpl_vars['r_iron'] )): ?>
<td class="inactive">You don't have enough resources.</td>
<?php elseif ($this->_tpl_vars['pop2'] > $this->_tpl_vars['rtsfarm']): ?>
<td class="inactive">Too few free farm places.</td>
<?php elseif ($this->_tpl_vars['paladin']): ?>
<td class="inactive">Every player can only have one Paladin.</td>
<?php else: ?>
<td><a href="game.php?village=<?php echo $this->_tpl_vars['villageid']; ?>
&amp;screen=statue&amp;action=train&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
">Train a Paladin</a></td>
<?php endif; ?>
</tr>
</table>
<?php if (( $this->_tpl_vars['paladin'] == 1 ) && ( $this->_tpl_vars['pala_wo'] != $this->_tpl_vars['villageid'] )): ?>
<br><a href="game.php?village=<?php echo $this->_tpl_vars['villageid']; ?>
&amp;screen=statue&amp;action=deploy&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
">&raquo; Move the Paladin here</a>
<?php endif; ?>
<br />
<form action="game.php?village=<?php echo $this->_tpl_vars['villageid']; ?>
&amp;screen=statue&amp;action=rename&amp;h=<?php echo $this->_tpl_vars['hkey']; ?>
" method="POST">
<b>Name:</b> <input type="text" name="palaname" value="<?php echo $this->_tpl_vars['name']; ?>
" /> 
<input type="submit" value="Rename">
</form>
<?php endif; ?>