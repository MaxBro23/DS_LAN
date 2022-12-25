{if $preview}
	<table width="100%">
	<tr><td colspan="2" valign="top" style="background-color: white; border: solid 1px black;">
	{$preview_message}
	</td></tr>
	</table><br />
{/if}

<form name="header" action="game.php?village={$village.id}&amp;screen=mail&amp;mode=new&amp;action=send&amp;answer_mail_id={$view}&amp;h={$hkey}" method="post">
<table>
<tr><td>{$lang->get("to")}:</td><td><input type="text" name="to" size="50" value="{$inputs.to}" /></td></tr>
<tr><td>{$lang->get("subject")}:</td><td><input type="text" name="subject" size="50" value="{$inputs.subject}" /></td></tr>
<tr><td colspan="2">
</td></tr>
<tr><td colspan="2"><textarea name="text" cols="70" rows="20">{$inputs.text}</textarea></td></tr>
<td align="right" colspan="2"><a onclick="javascript:popup_scroll('help.php?mode=bb', 700, 400); return false;" href="help.php?mode=bb" target="_blank">{$lang->get("bb")}</a></td>
</tr>
<tr><td><input type="submit" name="preview" value="{$lang->get("preview")}" /> <input type="submit" name="send" value="{$lang->get("send")}"> </td>
</table>

</form>