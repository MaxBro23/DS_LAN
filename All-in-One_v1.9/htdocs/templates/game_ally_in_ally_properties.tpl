<table cellspacing="0">
<tr><td valign="top">
{if $user.ally_found==1}
	<form action="game.php?village={$village.id}&amp;screen=ally&amp;mode=properties&amp;action=change&amp;h={$hkey}" method="post">
	<table class="vis" width="100%">
		<tr><th colspan="2">{$lang->get("properties")}</th></tr>
		<tr><td>{$lang->get("name")}:</td><td><input type="text" name="name" value="{$ally.name}" /></td></tr>
		<tr><td width="140">{$lang->grab("ally_properties", "shortcut")} {$lang->get("short_max")}:</td><td><input type="text" name="tag" maxlength="6" value="{$ally.short}" /></td></tr>
		<tr><td width="140">{$lang->grab("ally_properties", "hp")}:</td><td><input type="text" name="homepage" maxlength="128" size="50"  value="{$ally.homepage}" /></td></tr>
		<tr><td width="140">{$lang->grab("ally_properties", "irc")}:</td><td><input type="text" name="irc-channel" maxlength="128" size="50"  value="{$ally.irc}" /></td></tr>
		<tr><td colspan="2"><input type="submit" value="{$lang->grab("ally_properties", "change")}" /></td></tr>
	</form>
	<form action="game.php?village={$village.id}&amp;screen=ally&amp;mode=properties&amp;h={$hkey}&action=edit_fusion" method="post">
		<tr><td width="140">{$lang->grab("ally_properties", "fusion")}:</td><td><input type="radio" name="want_fusion" value="1" {if $want_fusion == "1"} checked {/if} >Ja <input type="radio" name="want_fusion" value="0" {if $want_fusion == "0"} checked {/if} >Nein</td></tr>
		<tr><td colspan="2"><input type="submit" value="{$lang->grab("ally_properties", "change")}" /></td></tr>
	</form>
	</table>
	
	<table class="vis" width="100%">
	<tr><th>{$lang->grab("ally_properties", "close_tribe")}</th></tr>
	<tr><td><a href="javascript:ask('{$lang->grab("ally_properties", "close_confirm")}', 'game.php?village={$village.id}&amp;screen=ally&amp;mode=properties&amp;action=close&amp;h={$hkey}')">{$lang->grab("ally_properties", "close_tribe")}</a></td></tr>
	</table>
{/if}

</td><td valign="top" width="360">

{if $user.ally_diplomacy==1}
	{if !empty($preview)}
		<table class="vis" width="100%">
			<tr><th colspan="2">{$lang->grab("ally_properties", "preview")}</th></tr>
			<tr><td colspan="2" align="center">{$ally.description}</td></tr>
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

	<form action="game.php?village={$village.id}&amp;screen=ally&amp;mode=properties&amp;action=change_desc&amp;h={$hkey}" method="post" name="edit_profile">
	<table class="vis" width="100%">
			<tr><th colspan="2" width="100%">{$lang->grab("ally_properties", "desc")}</th></tr>
		<tr id="show_row" align="center"><td colspan="2">{$ally.description}</td></tr>
		<tr id="edit_row"><td colspan="2"><textarea name="desc_text" cols="40" rows="15">{$ally.edit_description}</textarea></td></tr>
		<tr id="submit_row"><td><input type="submit" name="edit" value="{$lang->grab("ally_properties", "save")}" /> <input type="submit" name="preview" value="{$lang->grab("ally_properties", "preview")}" /></td><td align="right"></td></tr>
	</table>
	</form>
	<a id="edit_link" href="javascript:bbEdit()" style="display:none">{$lang->grab("ally_properties", "edit")}</a><br />

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
	<br />
	<form action="game.php?village={$village.id}&amp;screen=ally&amp;mode=properties&amp;action=ally_image&amp;h={$hkey}" enctype="multipart/form-data" method="post">
		<table class="vis" width="100%">
			<tr>
				<th>
					{$lang->grab("ally_properties", "avatar")}:
				</th>
			</tr>
			<tr>
				<td>
				    {if !empty($ally.image)}
						<img src="graphic/ally/{$ally.image}" alt="Wappen" />
						<br />
						<input name="del_image" type="checkbox" />
      {$lang->grab("ally_properties", "avatar_del")}
						<br />
					{/if}
	            	<input name="image" type="file" size="40" accept="image/*" maxlength="1048576" />
					<br />
					<span style="font-size: xx-small">{$lang->grab("ally_properties", "avatar_info")}</span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="OK" />
				</td>
			</tr>
		</table>
 </form>
{/if}

</td></tr></table>