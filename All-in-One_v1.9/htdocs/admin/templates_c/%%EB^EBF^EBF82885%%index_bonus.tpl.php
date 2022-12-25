<?php /* Smarty version 2.6.14, created on 2010-11-20 15:35:00
         compiled from index_bonus.tpl */ ?>
<h1>Bonusd&ouml;rfer</h1>
<h3>Einstellungen</h3>
<form action="index.php?screen=bonus&do=set" method="POST">
<input size="4" type="text" name="dealers" value="<?php echo $this->_tpl_vars['bonus_dealers']; ?>
" />% mehr Speicherkapazit&auml;t und H&auml;ndler<br />
<input size="4" type="text" name="farm" value="<?php echo $this->_tpl_vars['bonus_farm']; ?>
" />% mehr Bev&ouml;lkerung<br />
<input size="4" type="text" name="stable" value="<?php echo $this->_tpl_vars['bonus_stable']; ?>
" />% schnellere Produktion im Stall<br />
<input size="4" type="text" name="barracks" value="<?php echo $this->_tpl_vars['bonus_barracks']; ?>
" />% schnellere Produktion in der Kaserne<br />
<input size="4" type="text" name="garage" value="<?php echo $this->_tpl_vars['bonus_garage']; ?>
" />% schnellere Produktion in der Werkstatt<br />
<input size="4" type="text" name="res" value="<?php echo $this->_tpl_vars['bonus_res']; ?>
" />% mehr Rohstoffproduktion<br />
<a href="javascript:insert4();">St&auml;mme Version 4</a><br />
<a href="javascript:insert5();">St&auml;mme Version 5</a><br />
<input type="submit" value="&Auml;ndern" />
</form>
<br /><hr />
<h3>&Uuml;bersicht</h3>
<form action="index.php" method="GET">
<input type="hidden" name="screen" value="bonus" />
<input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['sort']; ?>
" />
<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
" />
Zeige <input type="test" size="4" name="max" value="<?php echo $this->_tpl_vars['max']; ?>
" /> Zeilen ab Zeile <input type="text" size="4" name="start" value="<?php echo $this->_tpl_vars['start']; ?>
" /> <input type="submit" value="Los!" /></form>
<form action="index.php?screen=bonus&do=update" method="POST">
<table class="vis" width="100%">
	<tr>
		<th>#</th>
		<th><?php if ($this->_tpl_vars['sort'] == 'id'): ?><u><?php endif; ?><a href="index.php?screen=bonus&sort=id&mode=<?php if ($this->_tpl_vars['mode'] == 'asc'): ?>desc<?php else: ?>asc<?php endif; ?>">ID</a><?php if ($this->_tpl_vars['sort'] == 'id'): ?></u><?php endif; ?></th>
		<th><?php if ($this->_tpl_vars['sort'] == 'userid'): ?><u><?php endif; ?><a href="index.php?screen=bonus&sort=userid&mode=<?php if ($this->_tpl_vars['mode'] == 'asc'): ?>desc<?php else: ?>asc<?php endif; ?>">Besitzer</a><?php if ($this->_tpl_vars['sort'] == 'userid'): ?></u><?php endif; ?></th>
		<th><?php if ($this->_tpl_vars['sort'] == 'name'): ?><u><?php endif; ?><a href="index.php?screen=bonus&sort=name&mode=<?php if ($this->_tpl_vars['mode'] == 'asc'): ?>desc<?php else: ?>asc<?php endif; ?>">Dorfname</a><?php if ($this->_tpl_vars['sort'] == 'name'): ?></u><?php endif; ?></th>
		<th><?php if ($this->_tpl_vars['sort'] == 'bonus'): ?><u><?php endif; ?><a href="index.php?screen=bonus&sort=bonus&mode=<?php if ($this->_tpl_vars['mode'] == 'asc'): ?>desc<?php else: ?>asc<?php endif; ?>">Bonusdorf</a><?php if ($this->_tpl_vars['sort'] == 'bonus'): ?></u><?php endif; ?></th>
	</tr>
	<?php $_from = $this->_tpl_vars['doerfer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['village']):
?>
	<tr>
		<td><input type="checkbox" name="dorf[]" value="<?php echo $this->_tpl_vars['village']['id']; ?>
" /></td>
		<td><?php echo $this->_tpl_vars['village']['id']; ?>
</td>
		<td><?php echo $this->_tpl_vars['village']['userid']; ?>
 (<?php echo $this->_tpl_vars['village']['username']; ?>
)</td>
		<td><?php echo $this->_tpl_vars['village']['name']; ?>
</td>
		<td>
<?php if ($this->_tpl_vars['village']['bonus'] > '0'): ?>
Ja
<?php if ($this->_tpl_vars['village']['bonus'] == '1'): ?>
(Speicher & H&auml;ndler)
<?php elseif ($this->_tpl_vars['village']['bonus'] == '2'): ?>
(Bev&ouml;lkerung)
<?php elseif ($this->_tpl_vars['village']['bonus'] == '3'): ?>
(Stall)
<?php elseif ($this->_tpl_vars['village']['bonus'] == '4'): ?>
(Kaserne)
<?php elseif ($this->_tpl_vars['village']['bonus'] == '5'): ?>
(Werkstatt)
<?php elseif ($this->_tpl_vars['village']['bonus'] == '6'): ?>
(Ressis)
<?php endif;  else: ?>
Nein
<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
<tr><th colspan="100%"><input name="all" type="checkbox" onclick="selectAll(this.form, this.checked)" /> alle ausw&auml;hlen </th></tr>
</table>
Ausgew&auml;hlte Boni <select name="todo">
<option value="0">l&ouml;schen</option>
<option value="1" selected="selected">hinzuf&uuml;gen</option>
</select> (falls hinzuf&uuml;gen, Typ:
<select name="what">
<option value="0">Zuf&auml;llig</option>
<option value="1">mehr Speicherkapazit&auml;t und H&auml;ndler</option>
<option value="2">mehr Bev&ouml;lkerung</option>
<option value="3">schnellere Produktion im Stall</option>
<option value="4">schnellere Produktion in der Kaserne</option>
<option value="5">schnellere Produktion in der Werkstatt</option>
<option value="6">mehr Rohstoffproduktion</option>
</select>) 
<input type="submit" value="Los!" />
</form>
<br /><hr />
<h3>Bonusd&ouml;rfer hinzuf&uuml;gen</h3>
<form action="index.php?screen=bonus&do=create" method="POST">
Anzahl: <input type="text" name="amount" size="3" maxlength="4" />
Bonus: 
<select name="what">
<option value="0">Zuf&auml;llig</option>
<option value="1">mehr Speicherkapazit&auml;t und H&auml;ndler</option>
<option value="2">mehr Bev&ouml;lkerung</option>
<option value="3">schnellere Produktion im Stall</option>
<option value="4">schnellere Produktion in der Kaserne</option>
<option value="5">schnellere Produktion in der Werkstatt</option>
<option value="6">mehr Rohstoffproduktion</option>
</select>
<input type="submit" value="Erstellen">
</form><br />
<hr />
<h3>Boni hinzuf&uuml;gen</h3>
<b><?php echo $this->_tpl_vars['prozent1']; ?>
%</b> (<?php echo $this->_tpl_vars['stk1']; ?>
 St&uuml;ck) aller D&ouml;rfer sind verlassen.<br />
<b><?php echo $this->_tpl_vars['prozent2']; ?>
%</b> (<?php echo $this->_tpl_vars['stk2']; ?>
 St&uuml;ck) aller D&ouml;rfer sind Bonusd&ouml;rfer.<br />
<b><?php echo $this->_tpl_vars['prozent3']; ?>
%</b> (<?php echo $this->_tpl_vars['stk3']; ?>
 St&uuml;ck) aller verlassenen D&ouml;rfer sind Bonusd&ouml;rfer.<br />
<b><?php echo $this->_tpl_vars['prozent4']; ?>
%</b> (<?php echo $this->_tpl_vars['stk4']; ?>
 St&uuml;ck) aller Bonusd&ouml;rfer sind verlassen.<br /><br />
<form action="index.php?screen=bonus&do=change" method="POST">
Zu <input type="text" name="amount" size="3" maxlength="4" /> 
<select name="act1">
<option value="0">St&uuml;ck</option>
<option value="1">Prozent</option>
</select>
<select name="act2">
<option value="0">aller</option>
<option value="1">aller verlassenen</option>
<option value="2">aller normalen</option>
<option value="3">aller normalen verlassenen</option>
</select>
D&ouml;rfern den Bonus
<select name="what">
<option value="0">Zuf&auml;llig</option>
<option value="1">mehr Speicherkapazit&auml;t und H&auml;ndler</option>
<option value="2">mehr Bev&ouml;lkerung</option>
<option value="3">schnellere Produktion im Stall</option>
<option value="4">schnellere Produktion in der Kaserne</option>
<option value="5">schnellere Produktion in der Werkstatt</option>
<option value="6">mehr Rohstoffproduktion</option>
</select> <input type="submit" value="hinzuf&uuml;gen">
</form><br /><u>Durch negative Angaben werden Boni gel&ouml;scht.</u><br /><br /><hr />
<span style="font-size: 10px;">&copy; by Molt</span>