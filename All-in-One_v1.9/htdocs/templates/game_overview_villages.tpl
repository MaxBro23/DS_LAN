<table class="vis">
	<tr>
   {php} $this->_tpl_vars['links']['Umbenennen'] = 'rename'; $this->_tpl_vars['mode'] = $_GET['mode']; {/php}
{foreach from=$links item=f_mode key=f_name}
	{if $f_mode==$mode}
		<td class="selected" width="100"><a href="game.php?village={$village.id}&screen=overview_villages&mode={$f_mode}">{$f_name}</a></td>
  {else}
		<td width="100"><a href="game.php?village={$village.id}&screen=overview_villages&mode={$f_mode}">{$f_name}</a></td>	
	{/if}
{/foreach}
	</tr>
</table>
<br />
<table class="vis" width="100%">
  <tbody>
    <tr>
      <td width="80">
        <a href="javascript:popup_scroll('groups.php?village={$village.id}', 500, 500);">&raquo; {$lang->grab("overview_villages", "groups")}</a>
      </td>
      <td style="text-align:center;">
        {foreach from=$groups item=g}
          {if $g.id == $user.group}
            <b>>{$g.group_name}<</b>
          {else}
          <a href="game.php?village={$village.id}&screen=overview_villages&mode={$mode}&group={$g.id}">[{$g.group_name}]</a>
          {/if}
        {/foreach}
          {if $user.group == 0}
            <b>>alle<</b>
          {else}
            <a href="game.php?village={$village.id}&screen=overview_villages&mode={$mode}&group=all">[alle]</a>
          {/if}
      </td>
    </tr>
  </tbody>
</table>
{if $mode != 'rename'}
 {include file="game_overview_villages_$mode.tpl"}
{elseif $mode == 'rename'}
<p>Hier kannst du deine Dörfer alle gleichzeitig umbenennen.</p>
<p>
 Folgende Platzhalter gibt es:<br />
 {literal}
 <table>
  <tr>
   <th align=left width=100>Platzhalter</th>
   <th align=left width=300>Bedeutung</th>
   <th align=left width=100>Beispiel</th>
  </tr>
  <tr>
   <td>{NR_0}</td>
   <td>Die Zahl des Dorfes, mit vorranstehender 0.</td>
   <td>001, 002, 003</td>
  </tr>
  <tr>
   <td>{NR}</td>
   <td>Die Zahl des Dorfes.</td>
   <td>1, 2, 3</td>
  </tr>
  <tr>
   <td>{x}</td>
   <td>Die x-Koordinate des Dorfes.</td>
   <td>535, 554, 534</td>
  </tr>
  <tr>
   <td>{y}</td>
   <td>Die y-Koordinate des Dorfes.</td>
   <td>553, 545, 543</td>
  </tr>  
 </table>
 {/literal}
</p>
{if $Error != ''} 
 {$Error}<br /><br />
{else}
 <br /><br />
{/if}
<form action='game.php?village={$village.id}&screen=overview_villages&mode=rename' method='post'>
 <table>
  <tr>
   <td>Name:</td>
   <td><input type=text name=name /></td>
  </tr>
  <tr>
   <td><input type='submit' value='Umbenennen' /></td>
   <td>&nbsp;</td>
  </tr>
 </table>
</form>
{/if}