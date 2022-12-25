<form action="game.php?village={$village.id}&amp;screen=ally&amp;mode=members&amp;action=mod&amp;h={$hkey}" method="post">
<table class="vis">
<tr>
  <th width="280">{$lang->grab("ally_members", "name")}</th>
  <th width="40">{$lang->grab("ally_members", "rank")}</th>
  <th width="80">{$lang->grab("ally_members", "points")}</th>
  <th width="40">{$lang->grab("ally_members", "villages")}</th>
  {if $user.ally_lead==1 || $user.ally_found==1}
	  <th><img src="graphic/ally_rights/found.png" alt="Stammesgründer" title="Stammesgründer" /></th>
	  <th><img src="graphic/ally_rights/lead.png" alt="Stammesführung" title="Stammesführung" /></th>
	  <th><img src="graphic/ally_rights/invite.png" alt="Einladen" title="Einladen" /></th>
	  <th><img src="graphic/ally_rights/diplomacy.png" alt="Diplomatie" title="Diplomatie" /></th>
	  <th><img src="graphic/ally_rights/mass_mail.png" alt="Rundschreiben" title="Rundschreiben" /></th>
	  <th>{$lang->grab("ally_members", "vacation")}</th>
  {/if}
</tr>

    {foreach from=$members item=arr key=id}
		<tr {if $id==$user.id}class="lit"{/if}>
			<td>
				{if $user.ally_lead==1 || $user.ally_found==1}<input type="radio" name="player_id" value="{$id}" />	{foreach from=$arr.icons item=graphic}<img src="graphic/stat/{$graphic}.png" title="" alt="" /> {/foreach}{/if}<a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$id}">{$arr.username}</a> {if !empty($arr.ally_titel)}({$arr.ally_titel}){/if}
			</td>
			<td>{$arr.rank}</td>
			<td>{$arr.points}</td>
			<td>{$arr.villages}</td>
			{if $user.ally_lead==1 || $user.ally_found==1}
				<td>{if $arr.ally_found==1}<img src="graphic/dots/green.png" alt="Ja" />{else}<img src="graphic/dots/grey.png" alt="Nein" />{/if}</td>
				<td>{if $arr.ally_lead==1}<img src="graphic/dots/green.png" alt="Ja" />{else}<img src="graphic/dots/grey.png" alt="Nein" />{/if}</td>
				<td>{if $arr.ally_invite==1}<img src="graphic/dots/green.png" alt="Ja" />{else}<img src="graphic/dots/grey.png" alt="Nein" />{/if}</td>
				<td>{if $arr.ally_diplomacy==1}<img src="graphic/dots/green.png" alt="Ja" />{else}<img src="graphic/dots/grey.png" alt="Nein" />{/if}</td>
				<td>{if $arr.ally_mass_mail==1}<img src="graphic/dots/green.png" alt="Ja" />{else}<img src="graphic/dots/grey.png" alt="Nein" />{/if}</td>
				<td>{if !empty($arr.vacation_id)}<a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$arr.vacation_id}">{$arr.vacation_name}</a>{/if}</td>
			{/if}
		</tr>
 {/foreach}

</table>
{if $user.ally_lead==1 || $user.ally_found==1}
	<select name="action"><option label="{$lang->grab("ally_members", "choose_action")}" value="">{$lang->grab("ally_members", "choose_action")}</option>
	<option label="Rechte und Titel" value="rights">{$lang->grab("ally_members", "rights")}</option>
	<option label="Entlassen" value="kick">{$lang->grab("ally_members", "kick")}</option>
	</select>
	<input type="submit" value="OK" />
{/if}
</form>

{if $user.ally_lead==1 || $user.ally_found==1}
	<br />

	<table class="vis">
	<tr><th>{$lang->grab("ally_members", "stat")}</th></tr>
	<tr><td><img src="graphic/stat/green.png" alt="" /> {$lang->grab("ally_members", "active")}</td></tr>
	<tr><td><img src="graphic/stat/yellow.png" alt="" /> {$lang->grab("ally_members", "inactive_2_days")}</td></tr>
	<tr><td><img src="graphic/stat/red.png" alt="" /> {$lang->grab("ally_members", "inactive_1_week")}</td></tr>
	<tr><td><img src="graphic/stat/vacation.png" alt="" /> {$lang->grab("ally_members", "vacation_mode")}</td></tr>
	<tr><td><img src="graphic/stat/birthday.png" alt="" /> {$lang->grab("ally_members", "birthday")}</td></tr>
	<tr><td><img src="graphic/stat/banned.png" alt="" /> {$lang->grab("ally_members", "banned")}</td></tr>
	</table>
	<div style="font-size: 7pt;">{$lang->grab("ally_members", "status")}</div>
{/if}