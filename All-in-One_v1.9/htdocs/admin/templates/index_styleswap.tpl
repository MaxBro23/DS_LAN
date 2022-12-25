<!-- 
 * DSLan Plugin - Templates@StyleSwap
 * 
 * @package dslan_styleswap
 * @copyright 2008 by Agrafix
 * @author Agrafix <mail@agrafix.net>
-->
<h2>StyleSwap</h2>

{if $msg.type == "error"}
<h3 class="error">{$msg.text}</h3>
{else}
<h3 style="color:green;">{$msg.text}</h3>
{/if}

<p>Hier werden alle in at_styles abgelete Styles angezeigt damit diese dann in das Spiel "importiert" werden können</p>

<form action="index.php?screen=styleswap&action=change" method="post">
<select name="local">
	<option value="--" selected="selected">-- extern</option>
	{foreach from=$styles item=s}
	<option value="{$s}">{$s}</option>
	{/foreach}
</select>

<p>Solltest du oben -- extern gewählt haben, kannst du hier eine URL zu einem Stylesheet angeben</p>
<input name="extern" type="text" /> (URL)<br />

<input type="submit" value="Style Aktualisieren." />
</form>

{literal}
<script type="text/javascript">
document.getElementsByName("local")[0].onchange = _toggle_extern;

function _toggle_extern() {
	if (document.getElementByName("local")[0].value == "--") {
		document.getElementByName("extern")[0].readonly = false;
	}
	else {
		document.getElementByName("extern")[0].readonly = true;
	}
}

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