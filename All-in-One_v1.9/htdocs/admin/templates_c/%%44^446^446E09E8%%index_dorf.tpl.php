<?php /* Smarty version 2.6.14, created on 2010-11-26 14:57:10
         compiled from index_dorf.tpl */ ?>
<h2 align="center">Dorfscript :]</h2>
<?php if ($_GET['action'] == ""): ?>
<form action="?screen=dorf&action=mach" method="post">
 <table>
  <tr>
   <th align="left">Nummer</th>
   <th align="left">Anzahl</th>
   <th align="left">Userid</th>
   <th align="left">Username</th>
   <th align="left">Richtung</th>
  </tr>
  <tr>
   <td>1</td>
   <td><input name="anzahl1"></td>
   <td>
    <select name="userid1">
     <option></option>
     <?php $_from = $this->_tpl_vars['userInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
      <option value="<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['id']; ?>
 (<?php echo $this->_tpl_vars['user']['username']; ?>
)</option>
     <?php endforeach; endif; unset($_from); ?>
    </select>
   </td>
   <td><input name="name1"></td>
   <td>
    <select name="direction1">
     <option value="nw">Nordwest (nw)</option>
     <option value="sw">S&uuml;dwest (sw)</option>
     <option value="no">Nordost (no)</option>
     <option value="so">S&uuml;dost (so)</option>
     <option value="random">Zufall (random)</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>2</td>
   <td><input name="anzahl2"></td>
   <td>
    <select name="userid2">
     <option></option>
     <?php $_from = $this->_tpl_vars['userInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
      <option value="<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['id']; ?>
 (<?php echo $this->_tpl_vars['user']['username']; ?>
)</option>
     <?php endforeach; endif; unset($_from); ?>
    </select>
   </td>
   <td><input name="name2"></td>
   <td>
    <select name="direction2">
     <option value="nw">Nordwest (nw)</option>
     <option value="sw">S&uuml;dwest (sw)</option>
     <option value="no">Nordost (no)</option>
     <option value="so">S&uuml;dost (so)</option>
     <option value="random">Zufall (random)</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>3</td>
   <td><input name="anzahl3"></td>
   <td>
    <select name="userid3">
     <option></option>
     <?php $_from = $this->_tpl_vars['userInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
      <option value="<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['id']; ?>
 (<?php echo $this->_tpl_vars['user']['username']; ?>
)</option>
     <?php endforeach; endif; unset($_from); ?>
    </select>
   </td>
   <td><input name="name3"></td>
   <td>
    <select name="direction3">
     <option value="nw">Nordwest (nw)</option>
     <option value="sw">S&uuml;dwest (sw)</option>
     <option value="no">Nordost (no)</option>
     <option value="so">S&uuml;dost (so)</option>
     <option value="random">Zufall (random)</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>4</td>
   <td><input name="anzahl4"></td>
   <td>
    <select name="userid4">
     <option></option>
     <?php $_from = $this->_tpl_vars['userInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
      <option value="<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['id']; ?>
 (<?php echo $this->_tpl_vars['user']['username']; ?>
)</option>
     <?php endforeach; endif; unset($_from); ?>
    </select>
   </td>
   <td><input name="name4"></td>
   <td>
    <select name="direction4">
     <option value="nw">Nordwest (nw)</option>
     <option value="sw">S&uuml;dwest (sw)</option>
     <option value="no">Nordost (no)</option>
     <option value="so">S&uuml;dost (so)</option>
     <option value="random">Zufall (random)</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>5</td>
   <td><input name="anzahl5"></td>
   <td>
    <select name="userid5">
     <option></option>
     <?php $_from = $this->_tpl_vars['userInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
      <option value="<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['id']; ?>
 (<?php echo $this->_tpl_vars['user']['username']; ?>
)</option>
     <?php endforeach; endif; unset($_from); ?>
    </select>
   </td>
   <td><input name="name5"></td>
   <td>
    <select name="direction5">
     <option value="nw">Nordwest (nw)</option>
     <option value="sw">S&uuml;dwest (sw)</option>
     <option value="no">Nordost (no)</option>
     <option value="so">S&uuml;dost (so)</option>
     <option value="random">Zufall (random)</option>
    </select>
   </td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" value="Mach D&ouml;rfer^^"></td>
  </tr>
 </table>
</form>
<hr>
<h3>Hilfe:</h3>
<p>&bull;Username<br>
Der eingegebene Username ist nur f&uuml;r den Dorfnamen wichtig,<br>
das Dorf wird dann so hei&szlig;en:<br>
EINGABEs Dorf
</p>
<hr>
<?php elseif ($_GET['action'] == 'mach'): ?>
Fertig ;]<br>
<a href="?screen=dorf">Zur&uuml;ck</a>
<?php endif; ?>