<p>&nbsp;</p>
<h2 align="center">Fl&uuml;chtlingslagerbot</h2>
<p>&nbsp;</p>
Das hier ist mein "Fl&uuml;chtlingslagerbot", der <u>nicht</u> piepst :D<br>
PS: Er aktualiert sich alle 10 Sekunden
<p>&nbsp;</p>
<p>&nbsp;</p>
{if $smarty.get.action == ""}
 <center><a href="index.php?screen=fluelabot&action=start">Start Bot</a></center>
{elseif $smarty.get.action == "start"}
 Bot wurde gestartet, bitte diesen Tab <u>nicht</u> schlie&szlig;en, da sonst der Bot nicht weiterl&auml;uft ;]<br>
 <meta http-equiv='refresh' content="10; URL=index.php?screen=fluelabot&action=start">
 <a href="index.php?screen=fluelabot&action=stop">Bot beenden</a>
 {elseif $smarty.get.action == "stop"}
 Bot wurde beendet!<br>
 <a href="index.php?screen=fluelabot&action=start">Bot starten</a>
{/if}
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Script by <a href="mailto:manuel_mannhardt@web.de">Manuel aka SlimShady95</a> 
und <a href="http://dslan.gfx-dose.de/user-1492.html">Milos</a> ;]</p>
<p><b>(C) 2009 by <a href="mailto:manuel_mannhardt@web.de">Manuel aka SlimShady95</a> 
und <a href="http://dslan.gfx-dose.de/user-1492.html">Milos</a> | Version 0.8</b></p>
