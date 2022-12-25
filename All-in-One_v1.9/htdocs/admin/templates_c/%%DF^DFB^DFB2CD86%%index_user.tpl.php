<?php /* Smarty version 2.6.14, created on 2010-11-20 20:51:07
         compiled from index_user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urldecode', 'index_user.tpl', 45, false),)), $this); ?>
<h2>Userverwaltung</h2>
<?php if ($_GET['mode'] == ''): ?>
  <table>
   <tr>
    <th align=left width=30>Nr.</th>
    <th align=left width=300>Username</th>
    <th align=left width=50>Punkte</th>
    <th align=left width=50>Dörfer</th>
    <th align=left width=75>Bearbeiten</th>
    <th align=left width=80>Sperren</th>
    <th align=left width=60>Löschen</th>
   </tr>
   <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nr'] => $this->_tpl_vars['User']):
?>
   <tr>
    <td><?php echo $this->_tpl_vars['nr']+1; ?>
</td>
    <td><?php echo $this->_tpl_vars['User']['username']; ?>
</td>
    <td><?php echo $this->_tpl_vars['User']['points']; ?>
</td>
    <td><?php echo $this->_tpl_vars['User']['villages']; ?>
</td>
    <td><a href='index.php?screen=user&mode=edit&id=<?php echo $this->_tpl_vars['User']['id']; ?>
'>bearbeiten</a></td>    
    <?php if ($this->_tpl_vars['User']['banned'] == 'N'): ?>
     <td><a href='index.php?screen=user&mode=bann_y&id=<?php echo $this->_tpl_vars['User']['id']; ?>
'>sperren</a></td>
    <?php elseif ($this->_tpl_vars['User']['banned'] == 'Y'): ?>  
     <td><a href='index.php?screen=user&mode=bann_n&id=<?php echo $this->_tpl_vars['User']['id']; ?>
'>entsperren</a></td>
    <?php endif; ?> 
    <td><a href='javascript: if(confirm("Willst du <?php echo $this->_tpl_vars['User']['username']; ?>
 wirklich löschen?")) location.href="index.php?screen=user&mode=delete&id=<?php echo $this->_tpl_vars['User']['id']; ?>
"'>löschen</a></td>  
   </tr>
   <?php endforeach; endif; unset($_from); ?>
  </table>
<?php elseif ($_GET['mode'] == 'edit'): ?>
  <?php if ($_GET['action'] == 'done'): ?>
    <font color=green>Erfolgreich gespeichert.</font><br />
  <?php else: ?>
    <br />
  <?php endif; ?>
  <?php if ($_GET['action'] == 'done_v'): ?>
    <font color=green>Du hast dem User ein Dorf weggenommen.</font><br />
  <?php else: ?>
    <br />
  <?php endif; ?>  
  <br />
  <form action='index.php?screen=user&mode=edit&id=<?php echo $this->_tpl_vars['User']['id']; ?>
' method='post'>
   <table>
    <tr>
     <td width=100>Username:</td>
     <td align=right><b><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['username'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
</b></td>
    </tr>
    <tr>
     <td>Wohnort:</td>
     <td align=right><input name='location' value='<?php echo $this->_tpl_vars['User']['home']; ?>
' /></td>
    </tr>
    <tr>
     <td>Geschlecht:</td>
     <td align=right>
      <select name='sex'>
       <option value='m' <?php if ($this->_tpl_vars['User']['sex'] == 'm'): ?> selected <?php endif; ?>>männlich</option>
       <option value='w' <?php if ($this->_tpl_vars['User']['sex'] == 'w'): ?> selected <?php endif; ?>>weiblich</option>
       <option value='x' <?php if ($this->_tpl_vars['User']['sex'] == 'x'): ?> selected <?php endif; ?>>nicht angegeben</option>
      </select>
     </td>
    </tr>
    <tr>
     <td>Geburtstag:</td>
     <td align=right>
		  <input name='day' size=2 maxlength=2 value='<?php echo $this->_tpl_vars['User']['b_day']; ?>
' />
      <select name='month'>
			 <option label="Januar" value="1" <?php if ($this->_tpl_vars['User']['b_month'] == 1): ?>selected<?php endif; ?>>Januar</option>
						<option label="Februar" value="2" <?php if ($this->_tpl_vars['User']['b_month'] == 2): ?>selected<?php endif; ?>>Februar</option>
						<option label="März" value="3" <?php if ($this->_tpl_vars['User']['b_month'] == 3): ?>selected<?php endif; ?>>März</option>
						<option label="April" value="4" <?php if ($this->_tpl_vars['User']['b_month'] == 4): ?>selected<?php endif; ?>>April</option>
						<option label="Mai" value="5" <?php if ($this->_tpl_vars['User']['b_month'] == 5): ?>selected<?php endif; ?>>Mai</option>
						<option label="Juni" value="6" <?php if ($this->_tpl_vars['User']['b_month'] == 6): ?>selected<?php endif; ?>>Juni</option>
						<option label="Juli" value="7" <?php if ($this->_tpl_vars['User']['b_month'] == 7): ?>selected<?php endif; ?>>Juli</option>
						<option label="August" value="8" <?php if ($this->_tpl_vars['User']['b_month'] == 8): ?>selected<?php endif; ?>>August</option>
						<option label="September" value="9" <?php if ($this->_tpl_vars['User']['b_month'] == 9): ?>selected<?php endif; ?>>September</option>
						<option label="Oktober" value="10" <?php if ($this->_tpl_vars['User']['b_month'] == 10): ?>selected<?php endif; ?>>Oktober</option>
						<option label="November" value="11" <?php if ($this->_tpl_vars['User']['b_month'] == 11): ?>selected<?php endif; ?>>November</option>
						<option label="Dezember" value="12" <?php if ($this->_tpl_vars['User']['b_month'] == 12): ?>selected<?php endif; ?>>Dezember</option>
					</select>
				<input name="year" type="text" size="4" maxlength="4" value='<?php echo $this->_tpl_vars['User']['b_year']; ?>
' />  
     </td>
    </tr>
    <tr>
     <td colspan=2>Profiltext:</td>
    </tr>
    <tr>
     <td colspan=2><textarea name='text' cols=40 rows=7><?php echo $this->_tpl_vars['User']['personal_text']; ?>
</textarea></td>
    </tr>
    <tr>
     <td colspan=2><input type=submit value='Speichern' /></td>
    </tr>
   </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table>
   <tr>
    <th align=left width=30>Nr.</th>
    <th align=left width=300>Dorf</th>
    <th align=left width=70>Koordinaten</th>
    <th align=left width=70>Punkte</th>
    <th align=left width=90>Dorf nehmen</th>
   </tr>
   <?php $_from = $this->_tpl_vars['Villages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nr'] => $this->_tpl_vars['Village']):
?>
   <tr>
    <td><?php echo $this->_tpl_vars['nr']+1; ?>
</td>
    <td><?php echo $this->_tpl_vars['Village']['name']; ?>
</td>
    <td>(<?php echo $this->_tpl_vars['Village']['x']; ?>
|<?php echo $this->_tpl_vars['Village']['y']; ?>
)</td>
    <td><?php echo $this->_tpl_vars['Village']['points']; ?>
</td>
    <td><a href='index.php?screen=user&mode=edit&take_village=<?php echo $this->_tpl_vars['Village']['id']; ?>
&id=<?php echo $this->_tpl_vars['User']['id']; ?>
'>Dorf nehmen</a></td>
   </tr>
   <?php endforeach; endif; unset($_from); ?>
  </table>  
<?php elseif ($_GET['mode'] == 'delete'): ?>
  <?php if ($_GET['action'] == 'done'): ?>
  <font color=green>User wurde erfolgreich gelöscht.</font>
  <?php endif; ?>
<?php endif; ?>