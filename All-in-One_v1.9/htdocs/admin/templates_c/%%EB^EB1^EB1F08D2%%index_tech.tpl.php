<?php /* Smarty version 2.6.14, created on 2011-04-02 11:09:30
         compiled from index_tech.tpl */ ?>
  <h3>Techsystem 1.4</h3>
   Willkommen im Techsystem-editor 1.4
	<br>
	<br>
		Wähle zuerst die gewünschte techform und drücke dann änderungen übernehmen ;D";
	<br>
	<br>
	Typ 1 => 1er Techsystem<br>
	Typ 2 => 3er Techsystem<br>
	Typ 3 => 10er Techsystem<br>
	<br>
	<br>
	<form action="" method="post">
		Typ 1<input type="radio" name="tech" value="1" /><br>
		Typ 2<input type="radio" name="tech" value="2" /><br>
		Typ 3<input type="radio" name="tech" value="3" /><br>
		<input type="submit" value="änderungen übernehmen">
	</form>
	<?php if ($this->_tpl_vars['note']): ?>
	   <font color=green><?php echo $this->_tpl_vars['note']; ?>
</font>
	<?php endif; ?>
	<br>
	<br>
	<br>
	<br>
	<br>
								made by Marc111 and steffengy