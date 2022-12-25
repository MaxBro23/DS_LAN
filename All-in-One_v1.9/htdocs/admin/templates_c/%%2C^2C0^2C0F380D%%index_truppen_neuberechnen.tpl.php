<?php /* Smarty version 2.6.14, created on 2022-12-24 00:37:14
         compiled from index_truppen_neuberechnen.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['done'] )): ?>
  <?php if ($this->_tpl_vars['done'] == true): ?>
    <h2 style="color: green; text-align: center;">Truppen erfolgreich aktualisiert!</h2>
    <p style="text-align: center;">Nun sollten sie die Bauernh&ouml;fe aktualisieren. Daf&uuml;r bitte <a href="?screen=bh_neuberechnen&amp;start">hier</a> klicken.<br />
    <strong>Wichtig:</strong> Daf&uuml;r wird das Tool <a target="_blank" href="http://dslan.gfx-dose.de/thread-1362.html">Bauernh&ouml;fe aktualisieren</a> ben&ouml;tigt!</p>
  <?php endif; ?>
<?php endif; ?>
<h1 style="text-align: center;">Truppen neuberechnen</h1>
<p>Mit diesem Tool, können Sie alle Truppen neuberechnen lassen, dies ist sinnvoll, wenn durch ein Bug, oder &auml;hnliches Truppen verschwinden.</p>
<p><strong>Achtung:</strong> Bei vielen Dörfern kann die Berechnung lange dauern! (Gestestet: 1.000 D&ouml;rfer brauchten ca. 5 Sekunden)</p>
<h2 style="text-align: center;"><a href="?screen=truppen_neuberechnen&amp;start">Truppen neuberechnen</a></h2>
<p style="text-align: right"><a href="<?php echo $this->_tpl_vars['thread_url']; ?>
">Version <?php echo $this->_tpl_vars['version']; ?>
</a> | &copy; Copyright by <a href="http://dslan.gfx-dose.de/user-11.html">Philipp Ranft</a> (<a href="mailto:philipp.ranft@gmx.de">E-Mail</a>)