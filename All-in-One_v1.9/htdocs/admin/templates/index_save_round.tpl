<h2>{$lang->grab("admin_save_round", "save_round")}</h2>
{$lang->grab("admin_save_round", "info")}
<br /><br />

{if !empty($error)}
	<br /><br /><font class="error">{$error}</font><br /><br />
{/if}

{if $is_send}
 {$lang->grab("admin_save_round", "is_send")}
{else}
	<form method="post" action="index.php?screen=save_round&amp;action=send" onSubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<td>{$lang->grab("admin_save_round", "name")}:</td><td><input type="text" name="name" size="70" value="{$name}"></td>
			</tr>
			<tr>
				<td>{$lang->grab("admin_save_round", "start")}:</td><td><input type="text" name="start" size="70" value="{$start}"></td>
			</tr>
			<tr>
				<td>{$lang->grab("admin_save_round", "end")}:</td><td><input type="text" name="end" size="70" value="{$end}"></td>
			</tr>
			<tr>
				<td>{$lang->grab("admin_save_round", "desc")}:</td><td><input type="text" name="description" size="70" value="{$description}"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="{$lang->grab("admin_save_round", "save")}"></td>
			</tr>
		</table>
	</form>
{/if}