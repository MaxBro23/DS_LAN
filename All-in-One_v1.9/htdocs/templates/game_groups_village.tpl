<table class="vis">
{if $amountGroups == 0}
  <font class="error">{$lang->grab("error", "no_groups")}</font>
{else}
<form method="post" action="groups.php?village={$village}&mode=village&action=update">
  <th>Gruppen von {$info.name} ({$info.x}|{$info.y})</th>
  {foreach from=$groups item=g}
    <tr>
      <td><input type="checkbox" name="{$g.id}" value="{$g.id}" {if in_array($g.id, $array)}checked="checked" {/if}/>{$g.group_name}</td>
    </tr>
  {/foreach}
</table>
<p>
<input type="submit" value="{$lang->get('set_group')}" />
</p>
</form>
{/if}