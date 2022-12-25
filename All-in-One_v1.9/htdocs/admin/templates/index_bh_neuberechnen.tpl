{if isset($done)}
  {if $done == true}
    <h2 style="color: green; text-align: center;">Bauernh&ouml;fe erfolgreich aktualisiert!</h2>
  {/if}
{/if}
<h1 style="text-align: center;">Bauernhof neuberechnen</h1>
<p>Mit diesem Tool, können Sie alle Bauernh&ouml;fe neu berechnen, dies ist sinnvoll, wenn durch ein Bug, oder &auml;hnliches, der Bauernhof nicht mehr stimmt.</p>
<p><strong>Achtung:</strong> Bei vielen Dörfern kann die Berechnung lange dauern! (Gestestet: 1.000 D&ouml;rfer brauchten ca. 5 Sekunden)</p>
<h2 style="text-align: center;"><a href="?screen=bh_neuberechnen&amp;start">Bauernh&ouml;fe neuberechnen</a></h2>
<p style="text-align: right"><a href="{$thread_url}">Version {$version}</a> | &copy; Copyright by <a href="http://dslan.gfx-dose.de/user-11.html">Philipp Ranft</a> (<a href="mailto:philipp.ranft@gmx.de">E-Mail</a>)