<!-- 
This ds-lan extension was written by Alexander Thiemann
Visit me: www.agrafix.net
Mail  me: mail@agrafix.net
-->
<h2>Gespeicherte Runden L&ouml;schen</h2>

{if !empty($action_text)}
<h3>Aktion</h3>
{$action_text}
{/if}

<h3>Eine Runde L&ouml;schen</h3>
<form action="index.php?screen=saved_rounds_reset&action=delete" method="post">
Rundennummer: <input name="round_id" type="text" size="8" /> <br />
<input type="submit" value="L&ouml;schen" />
</form>

<h3>Alle l&ouml;schen</h3>
<a href="index.php?screen=saved_rounds_reset&action=delete_all">&raquo; ausf&uuml;hren</a>

{literal}
<script type="text/javascript">
/**
 * DO NOT REMOVE THIS
 */
 
window.onload = _init_agrafix;

function _init_agrafix() { 
	 var st = document.getElementById("serverTime");
	 var parentP = st.parentNode;
	 
	 parentP.innerHTML = "<a href='http://www.agrafix.net' target='_blank'>Gespeicherte Runden L&ouml;schen Erweiterung v1.0 von agrafix.net</a><br /> " + parentP.innerHTML;
}
</script>
{/literal}
<!--
End of Extension
-->