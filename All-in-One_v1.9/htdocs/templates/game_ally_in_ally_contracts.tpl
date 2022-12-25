<p>{$lang->get("text")}</p>
<table class="vis" width="300">
  <th colspan="2">{$lang->get("partner")}</th>
    {foreach from=$contracts item=c}
      {if $c.type == 'partner'}
      <tr>
        <td><a href="game.php?village={$village.id}&screen=info_ally&id={$c.from_ally}">{$c.short}</a></td>
        <td><a href="game.php?village={$village.id}&screen=ally&mode=contracts&action=cancel_contract&id={$c.id}">{$lang->get("cancel")}</a></td>
      </tr>
      {/if}
    {/foreach}
</table><br />
<table class="vis" width="300">
  <th colspan="2">{$lang->get("nap")}</th>
    {foreach from=$contracts item=c}
      {if $c.type == 'nap'}
      <tr>
        <td><a href="game.php?village={$village.id}&screen=info_ally&id={$c.from_ally}">{$c.short}</a></td>
        <td><a href="game.php?village={$village.id}&screen=ally&mode=contracts&action=cancel_contract&id={$c.id}">{$lang->get("cancel")}</a></td>
      </tr>
      {/if}
    {/foreach}
</table><br />
<table class="vis" width="300">
  <th colspan="2">{$lang->get("enemy")}</th>
    {foreach from=$contracts item=c}
      {if $c.type == 'enemy'}
      <tr>
        <td><a href="game.php?village={$village.id}&screen=info_ally&id={$c.from_ally}">{$c.short}</a></td>
        <td><a href="game.php?village={$village.id}&screen=ally&mode=contracts&action=cancel_contract&id={$c.id}">{$lang->get("cancel")}</a></td>
      </tr>
      {/if}
    {/foreach}
</table><br />
<form method="post" action="game.php?village={$village.id}&screen=ally&mode=contracts&action=add_contract&h={$hkey}">
{$lang->get("tag")}:
<input type="text" name="tag" />
<select name="type">
<option value="partner">{$lang->get("partner_select")}</option>
<option value="nap">{$lang->get("nap")}</option>
<option value="enemy">{$lang->get("enemy")}</option>
</select>
<input type="submit" value="OK" />
</form>