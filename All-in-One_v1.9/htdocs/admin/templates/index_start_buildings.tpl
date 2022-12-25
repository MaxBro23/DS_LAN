<h2>{$lang->grab("admin_start_buildings", "start_buildings")}</h2>
{$lang->grab("admin_start_buildings", "info")}
{if !empty($error)}
	<br /><br /><font class="error">{$error}</font><br />
{/if}
<form method="post" action="index.php?screen=start_buildings&action=edit">
	<table class="vis">
		<tr>
			<th>{$lang->grab("admin_start_buildings", "building")}</th><th>{$lang->grab("admin_start_buildings", "stage")}</th>
		</tr>
		{foreach from=$buildings item=arr key=dbname}
			<tr>
				<td><img src="../graphic/buildings/{$dbname}.png"> {$arr.name}:</td>
				<td><input type="text" size="4" name="{$dbname}" value="{$arr.stage}"></td>
			</tr>
		{/foreach}
		<tr>
			<td colspan="2" align="center"><input name="standard" type="submit" value="{$lang->grab("admin_start_buildings", "standard")}"> <input type="submit" value="{$lang->grab("admin_start_buildings", "save")}"></td>
		</tr>
	</table>
</form>