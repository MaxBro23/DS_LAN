<h2>{$lang->get("mails")}</h2>
{if !empty($error)}
	<div style="color:red; font-size:large">{$error}</div>
{/if}
<table><tr><td valign="top" width="100">
	<table class="vis" width="100%">
		{foreach from=$links item=f_mode key=f_name}
			{if $f_mode==$mode}
				<tr>
					<td class="selected" width="120">
						<a href="game.php?village={$village.id}&amp;screen=mail&amp;mode={$f_mode}">{$f_name}</a>
					</td>
				</tr>
			{else}
                <tr>
                    <td width="120">
						<a href="game.php?village={$village.id}&amp;screen=mail&amp;mode={$f_mode}">{$f_name}</a>
					</td>
				</tr>
			{/if}
		{/foreach}
	</table>
	
</td><td valign="top" width="*">
	{if in_array($mode,$allow_mods)}
		{include file="game_mail_$mode.tpl" title=foo}
	{/if}
</td></tr></table>
