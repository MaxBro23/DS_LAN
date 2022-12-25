{if $edit == 'edit'}
{include file=game_settings_quickbar_edit.tpl}
{elseif $action == 'add'}
{include file=game_settings_quickbar_add.tpl}
{else}
<h3>Schnellleiste bearbeiten</h3>
<p><a href="/game.php?village={$village.id}&amp;screen=settings&amp;mode=quickbar&action=add">&raquo; Neuen Eintrag hinzufügen</a></p>
{if $amount != 0}
<table class="vis">
<tr><th>Link</th><th colspan="3"></th></tr>

{foreach from=$quickbar item=quick}
<tr>
<td>
{if substr($quick.href, 0, 8) != 'game.php'}
<a href="{$quick.href}"{if $quick.target != 0}target="_blank"{/if}><img src="{$quick.img}">{$quick.name}</a>
{else}
<a href="{$quick.href}&village={$quick.vid}"{if $quick.target != 0}target="_blank"{/if}><img src="{$quick.img}">{$quick.name}</a>
{/if}
</td>
<td>
<a href="game.php?village={$quick.vid}&screen=settings&mode=quickbar&action=edit&id={$quick.id}&h={$hkey}">bearbeiten</a>
</td>
<td>
<a href="game.php?village={$quick.vid}&screen=settings&mode=quickbar&action=delete&id={$quick.id}&h={$hkey}">löschen</a>
</td>
{/foreach}
</table>

{/if}
{/if}
<p>
<a href="game.php?village={$vill}&screen=settings&mode=quickbar&action=standard">&raquo; Schnellleiste auf Standard zurücksetzen</a>
</p>