<h2>{$lang->grab("admin_refugee_camp", "create")}</h2>

{if !empty($error)}
	<font class="error">{$error}</font><br /><br />
{/if}
{if $success}
  {$lang->grab("admin_refugee_camp", "create_success")}
{else}
	<form method="post" action="index.php?screen=refugee_camp&amp;action=create" onSubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th colspan="2">{$lang->grab("admin_refugee_camp", "create")}</th>
			</tr>
			<tr>
				<td width="350">{$lang->grab("admin_refugee_camp", "amount")}</td>
				<td><input type="text" name="num" value="0"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="{$lang->grab("admin_refugee_camp", "do_create")}" onload="this.disabled=false;"> {$lang->grab("admin_refugee_camp", "info")}</td>
			</tr>

		</table>
	</form>

<h2>{$lang->grab("admin_refugee_camp", "delete")}</h2>

{if !empty($error)}
  <font class="error">{$error}</font><br /><br />
{/if}

<form method="post" action="index.php?screen=refugee_camp&action=delete">
  <table class="vis">
    <th colspan="2" width="200">{$lang->grab("admin_refugee_camp", "delete")}</th>
    <tr>
      <td>{$lang->grab("admin_refugee_camp", "amount_refugee")}</td>
      <td width="50" align="center"><b>{$camps}</b></td>
    </tr>
    <tr>
      <td colspan="2"><input type="checkbox" name="deleteAll" /> {$lang->grab("admin_refugee_camp", "del_all")}</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="{$lang->grab("admin_refugee_camp", "do_delete")}" /></td>
    </tr>
  </table>
</form>
{if !$filled}
<h2>{$lang->grab("admin_refugee_camp", "fill")}</h2>
<form method="post" action="index.php?screen=refugee_camp&action=fill">
  <table class="vis">
    <th width="100">{$lang->grab("admin_refugee_camp", "units")}</th>
      {foreach from=$units->get_array("dbname") item=dbname key=name}
        <tr>
          <td><img src="../graphic/unit/{$dbname}.png" /> <input type="text" name="{$dbname}" size="5" /></td>
        </tr>
      {/foreach}
        <tr>
          <td colspan="2"><input type="submit" value="{$lang->grab("admin_refugee_camp", "fill_villages")}" /></td>
        </tr>
  </table>
</form>
{else}
  {$lang->grab("admin_refugee_camp", "fill_success")}
{/if}
{/if}