{if empty($view)}
	<form action="game.php?village={$village.id}&amp;screen=mail&amp;mode=in&amp;action=del_arch&amp;h={$hkey}" method="post">
	
	<table class="vis">
	{if $num_pages>1}
		<tr>
			<td align="center" colspan="3">
				{section name=countpage start=1 loop=$num_pages+1 step=1}
					{if $site==$smarty.section.countpage.index}
						<strong> &gt;{$smarty.section.countpage.index}&lt; </strong>
					{else}
						<a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=in&amp;site={$smarty.section.countpage.index}"> [{$smarty.section.countpage.index}] </a>
					{/if}
				{/section}
			</td>
		</tr>
	{/if}
	<tr><th>{$lang->get("subject")}</th><th width="160">{$lang->get("from")}</th><th width="140">{$lang->get("sent")}</th></tr>
	
		{foreach from=$mails item=arr key=id}
			<tr>
				<td><input name="id_{$id}" type="checkbox" /><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=in&amp;view={$id}">{$arr.subject}</a>{if $arr.is_read==0} (neu){/if}{if $arr.is_answered==1} <span class="inactive"> ({$lang->get("answered")})</span>{/if}</td>
				<td>{if $arr.from_id==-1}{$arr.from_username}{else}<a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$arr.from_id}">{$arr.from_username}</a>{/if}</td>
				<td>{$arr.time}</td>
			</tr>
		{/foreach}
		{if count($mails)>0}
			<tr><th><input name="all" type="checkbox" onclick="selectAll(this.form, this.checked)">{$lang->get("sel_all")}</th><th colspan="2"></th></tr>
		{/if}
	</table>
	
		<table align="left"><tr>
		<td><input type="submit" value="{$lang->get("delete")}" name="del" /></td>
		<td><input type="submit" value="{$lang->get("archivize")}" name="arch" /></td>
		</tr></table>
	
	</form>
{else}
	{if empty($error)}
		<table align="center" class="vis"><tr>
		<td align="center" width="120">{if $mail.from_id==-1}Antworten{else}<a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=new&amp;reply={$mail.id}">{$lang->get("answer")}</a>{/if}</td>
		<td align="center" width="25%"><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=new&amp;reply={$mail.id}&amp;forward=true">{$lang->get("redirect")}</a></td>
		<td align="center" width="25%"><a href="game.php?village={$village.id}&amp;screen=mail&amp;action=arch&amp;id={$mail.id}&amp;h={$hkey}">{$lang->get("archivize")}</a></td>
		<td align="center" width="25%"><a href="game.php?village={$village.id}&amp;screen=mail&amp;action=del&amp;id={$mail.id}&amp;mode=in&amp;h={$hkey}">{$lang->get("delete")}</a></td>
		</tr>
		</table>
		
		<table class="vis" width="100%">
		<tr><th width="140">{$lang->get("subject")}</th><th width="300">{$mail.subject}</th></tr>
		<tr><td>{$lang->get("from")}</td><td>{if $mail.from_id==-1}{$mail.from_username}{else}<a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$mail.from_id}">{$mail.from_username}</a>{/if}</td></tr>
		<tr><td>{$lang->get("to")}</td><td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$mail.to_id}">{$mail.to_username}</a></td></tr>
		<tr><td>{$lang->get("sent")}</td><td>{$mail.time}</td></tr>
		</table>
		
		<table class="vis" width="100%">
		<tr><td colspan="2" valign="top" height="160" style="background-color: white; border: solid 1px black;">
		{$mail.text}
		</td></tr>
		</table>
		
		<table align="center" class="vis"><tr>
		<td align="center" width="120">{if $mail.from_id==-1}Antworten{else}<a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=new&amp;reply={$mail.id}">{$lang->get("answer")}</a>{/if}</td>
		<td align="center" width="25%"><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=new&amp;reply={$mail.id}&amp;forward=true">{$lang->get("redirect")}</a></td>
		<td align="center" width="25%"><a href="game.php?village={$village.id}&amp;screen=mail&amp;action=arch&amp;id={$mail.id}&amp;h={$hkey}">{$lang->get("archivize")}</a></td>
		<td align="center" width="25%"><a href="game.php?village={$village.id}&amp;screen=mail&amp;action=del&amp;id={$mail.id}&amp;mode=in&amp;h={$hkey}">{$lang->get("delete")}</a></td>
		</tr>
		</table><br />
		
		<table width="100%" align="center" class="vis"><tr>
		<td align="center">{if $mail.from_id==-1}{$lang->get("block")}{else}<a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=block&amp;action=block_id&amp;id={$mail.from_id}&amp;h={$hkey}">{$lang->get("block")}</a>{/if}</td>
		</tr>
		</table><br />
	{/if}
{/if}