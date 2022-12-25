<!-- 
 * DSLan Plugin - Templates@recalc
 * 
 * @package dslan_recalc
 * @copyright 2008 by Agrafix
 * @author Agrafix <mail@agrafix.net>
-->
<h2>Statistiken Aktualisieren</h2>

{if isset($notice)}
<h3 style="color:#2A7F00">Berechnungen durchgeführt!</h3>
{/if}

<p>Die Rangliste ist fehlerhaft? Die Dorfanzahl stimmt nicht? Die Punkte sind falsch zusammen gerechnet? Hier 
die Lösung:</p>

<h4><a href="?screen=recalc&amp;run">&raquo; Statistiken neu berrechnen</a></h4>

{literal}
<script type="text/javascript">
/**
 * DO NOT REMOVE THIS
 */
 
window.onload = _init_agrafix;

function _init_agrafix() { 
	 var st = document.getElementById("serverTime");
	 var parentP = st.parentNode;
	 
	 parentP.innerHTML = "<a href='http://www.agrafix.net' target='_blank'>DSLan Erweiterung von agrafix.net</a><br /> " + parentP.innerHTML;
}
</script>
{/literal}
<!--
End of Extension
-->