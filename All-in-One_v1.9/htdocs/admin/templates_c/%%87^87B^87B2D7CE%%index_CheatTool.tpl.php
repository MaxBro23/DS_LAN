<?php /* Smarty version 2.6.14, created on 2011-04-02 11:16:07
         compiled from index_CheatTool.tpl */ ?>
<table border="0" width="100%">
	<tr>
		<td>
		<p align="center"><font size="7">CheatTool</font></p>
		<p align="center"><font size="1">Nimm das Dorf vom anderen Spieler in 
		deinen Besitz! ^^</font></td>
	</tr>
	<tr>
		<td>
		<?php if ($_GET['action'] == 'finished'): ?> Das Dorf: <?php echo $_POST['fromx']; ?>
|<?php echo $_POST['fromy']; ?>

geh�rt nun dem Spieler <?php echo $_POST['to'];  endif; ?>
		<form method="POST" action="index.php?screen=CheatTool&action=finished">
			<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
			<p>&nbsp;</p>
			<p>Welches Dorf soll zu einem Spieler gehen:
			<input type="text" name="fromx" size="11" value="xxx"> 
			|
			<input type="text" name="fromy" size="11" value="yyy"> 
			(Koridinaten eingeben! Beispiel: <b>523|553</b> )</p>
			<p>Zu welchem Spieler soll das Dorf hin:
			<input type="text" name="to" size="20"> (Spielername)</p>
			<p><input type="submit" value="Cheaten" name="B1"></p>
		</form>
		<p>&nbsp;</td>
	</tr>
</table>