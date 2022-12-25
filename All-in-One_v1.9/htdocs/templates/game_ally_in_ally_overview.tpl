<table width="100%"><tr><td valign="top">
		
	<table class="vis" width="100%">
	{if $num_pages>1}
		<tr>
			<td align="center" colspan="3">
				{section name=countpage start=1 loop=$num_pages+1 step=1}
					{if $site==$smarty.section.countpage.index}
						<strong> &gt;{$smarty.section.countpage.index}&lt; </strong>
					{else}
						<a href="game.php?village={$village.id}&amp;screen=ally&amp;site={$smarty.section.countpage.index}"> [{$smarty.section.countpage.index}] </a>
					{/if}
				{/section}
			</td>
		</tr>
	{/if}
	<tr><th>{$lang->grab("ally_overview", "date")}</th><th>{$lang->grab("ally_overview", "event")}</th></tr>

		{foreach from=$events item=arr key=id}
			<tr>
				<td>{$arr.time}</td>
				<td>{$arr.message}</td>
			</tr>
		{/foreach}

	</table>
		
</td><td valign="top" width="360">
	<table class="vis" width="100%"><tr>
	<td><a href="game.php?village=36841&amp;screen=ally&amp;action=exit&amp;h=cc6f" onclick="javascript:ask('{$lang->grab("ally_overview", "leave_ally")}', 'game.php?village={$village.id}&amp;screen=ally&amp;action=exit&amp;h={$hkey}'); return false;">{$lang->grab("ally_overview", "leave")}</a></td>
	</tr></table>
	
			

	{if !empty($preview)}
		<table class="vis" width="100%">
			<tr><th colspan="2">Vorschau</th></tr>
			<tr><td colspan="2" align="center">{$ally.intern_text}</td></tr>
		</table>
	{/if}
	
	<script type="text/javascript">
	function bbEdit() {ldelim}
		gid("show_row").style.display = 'none';
		gid("edit_link").style.display = 'none';
		gid("edit_row").style.display = '';
		gid("submit_row").style.display = '';
	{rdelim}
	</script>

	<form action="game.php?village={$village.id}&amp;screen=ally&amp;action=edit_intern&amp;h={$hkey}" method="post" name="edit_profile">
	<table class="vis" width="100%">
			<tr><th colspan="2" width="100%">{$lang->grab("ally_overview", "intern")}</th></tr>
		<tr id="show_row" align="center"><td colspan="2">{$ally.intern_text}</td></tr>
	{if $user.ally_found==1}
		<tr id="edit_row"><td colspan="2"><textarea name="intern" cols="40" rows="15">{$ally.edit_intern_text}</textarea></td></tr>
		<tr id="submit_row"><td><input type="submit" name="edit" value="{$lang->grab("ally_overview", "save")}" /> <input type="submit" name="preview" value="{$lang->grab("ally_overview", "preview")}" /></td></tr>
	{/if}
	</table>
	</form>
	{if $user.ally_found==1}<a id="edit_link" href="javascript:bbEdit()" style="display:none">{$lang->grab("ally_overview", "edit")}</a><br />{/if}
	
	{if empty($preview)}
		<script type="text/javascript">
		  gid("edit_row").style.display = 'none';
			gid("submit_row").style.display = 'none';
			gid("edit_link").style.display = '';
		</script>
	{else}
		<script type="text/javascript">
		  	gid("edit_row").style.display = '';
		  	gid("show_row").style.display = 'none';
			gid("submit_row").style.display = '';
			gid("edit_link").style.display = 'none';
		</script>
	{/if}

</td></tr></table>