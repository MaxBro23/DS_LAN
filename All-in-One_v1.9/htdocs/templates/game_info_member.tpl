<h2>{$lang->get("member")} {$ally.short}</h2>

<table class="vis">
<tr>
  <th width="280">{$lang->get("name")}</th>
  <th width="40">{$lang->get("rank")}</th>
  <th width="80">{$lang->get("points")}</th>
  <th width="40">{$lang->get("villages")}</th>
</tr>
	{foreach from=$members item=arr key=id}
		<tr {if $user.id==$id}class="lit"{/if}>
	
		<td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$id}">{$arr.username}</a> {if !empty($arr.titel)}({$arr.titel}){/if}	</td>
	
		<td>{$arr.rank}</td><td>{$arr.points|format_number}</td>
	
		<td>{$arr.villages}</td>
	  		
		</tr>
	{/foreach}
</table>
