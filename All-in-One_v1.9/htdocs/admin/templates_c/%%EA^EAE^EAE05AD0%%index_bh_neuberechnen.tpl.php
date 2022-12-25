<?php /* Smarty version 2.6.14, created on 2011-04-02 11:15:56
         compiled from index_bh_neuberechnen.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['done'] )): ?>
  <?php if ($this->_tpl_vars['done'] == true): ?>
    <h2 style="color: green; text-align: center;">Bauernh&ouml;fe erfolgreich aktualisiert!</h2>
  <?php endif; ?>
<?php endif; ?>
<h1 style="text-align: center;">Bauernhof neuberechnen</h1>
<p>Mit diesem Tool, können Sie alle Bauernh&ouml;fe neu berechnen, dies ist sinnvoll, wenn durch ein Bug, oder &auml;hnliches, der Bauernhof nicht mehr stimmt.</p>
<p><strong>Achtung:</strong> Bei vielen Dörfern kann die Berechnung lange dauern! (Gestestet: 1.000 D&ouml;rfer brauchten ca. 5 Sekunden)</p>
<h2 style="text-align: center;"><a href="?screen=bh_neuberechnen&amp;start">Bauernh&ouml;fe neuberechnen</a></h2>
<p style="text-align: right"><a href="<?php echo $this->_tpl_vars['thread_url']; ?>
">Version <?php echo $this->_tpl_vars['version']; ?>
</a> | &copy; Copyright by <a href="http://dslan.gfx-dose.de/user-11.html">Philipp Ranft</a> (<a href="mailto:philipp.ranft@gmx.de">E-Mail</a>)