<h2>{$lang->grab("admin_mail", "mail")}</h2>
{$lang->grab("admin_mail", "mail_info")}<br /><br />

{if !empty($error)}
	<br /><br /><font class="error">{$error}</font><br /><br />
{/if}

{if $is_send}
 {$lang->grab("admin_mail", "is_send")}
{else}
	<form method="post" action="index.php?screen=mail&amp;action=send" onSubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<td>{$lang->grab("admin_mail", "subject")}:</td><td><input type="text" name="subject" size="70" value="{$subject}"></td>
			</tr>
			<tr>
				<td colspan="2"><textarea rows="20" cols="80" name="text">{$text}</textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="{$lang->grab("admin_mail", "send")}"></td>
			</tr>
		</table>
	</form>
{/if}