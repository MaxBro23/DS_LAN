<h2>Userverwaltung</h2>
{if $smarty.get.mode == ''}
  <table>
   <tr>
    <th align=left width=30>Nr.</th>
    <th align=left width=300>Username</th>
    <th align=left width=50>Punkte</th>
    <th align=left width=50>Dörfer</th>
    <th align=left width=75>Bearbeiten</th>
    <th align=left width=80>Sperren</th>
    <th align=left width=60>Löschen</th>
   </tr>
   {foreach from=$Users item=User key=nr}
   <tr>
    <td>{$nr+1}</td>
    <td>{$User.username}</td>
    <td>{$User.points}</td>
    <td>{$User.villages}</td>
    <td><a href='index.php?screen=user&mode=edit&id={$User.id}'>bearbeiten</a></td>    
    {if $User.banned == 'N'}
     <td><a href='index.php?screen=user&mode=bann_y&id={$User.id}'>sperren</a></td>
    {elseif $User.banned == 'Y'}  
     <td><a href='index.php?screen=user&mode=bann_n&id={$User.id}'>entsperren</a></td>
    {/if} 
    <td><a href='javascript: if(confirm("Willst du {$User.username} wirklich löschen?")) location.href="index.php?screen=user&mode=delete&id={$User.id}"'>löschen</a></td>  
   </tr>
   {/foreach}
  </table>
{elseif $smarty.get.mode == 'edit'}
  {if $smarty.get.action == 'done'}
    <font color=green>Erfolgreich gespeichert.</font><br />
  {else}
    <br />
  {/if}
  {if $smarty.get.action == 'done_v'}
    <font color=green>Du hast dem User ein Dorf weggenommen.</font><br />
  {else}
    <br />
  {/if}  
  <br />
  <form action='index.php?screen=user&mode=edit&id={$User.id}' method='post'>
   <table>
    <tr>
     <td width=100>Username:</td>
     <td align=right><b>{$User.username|urldecode}</b></td>
    </tr>
    <tr>
     <td>Wohnort:</td>
     <td align=right><input name='location' value='{$User.home}' /></td>
    </tr>
    <tr>
     <td>Geschlecht:</td>
     <td align=right>
      <select name='sex'>
       <option value='m' {if $User.sex == 'm'} selected {/if}>männlich</option>
       <option value='w' {if $User.sex == 'w'} selected {/if}>weiblich</option>
       <option value='x' {if $User.sex == 'x'} selected {/if}>nicht angegeben</option>
      </select>
     </td>
    </tr>
    <tr>
     <td>Geburtstag:</td>
     <td align=right>
		  <input name='day' size=2 maxlength=2 value='{$User.b_day}' />
      <select name='month'>
			 <option label="Januar" value="1" {if $User.b_month==1}selected{/if}>Januar</option>
						<option label="Februar" value="2" {if $User.b_month==2}selected{/if}>Februar</option>
						<option label="März" value="3" {if $User.b_month==3}selected{/if}>März</option>
						<option label="April" value="4" {if $User.b_month==4}selected{/if}>April</option>
						<option label="Mai" value="5" {if $User.b_month==5}selected{/if}>Mai</option>
						<option label="Juni" value="6" {if $User.b_month==6}selected{/if}>Juni</option>
						<option label="Juli" value="7" {if $User.b_month==7}selected{/if}>Juli</option>
						<option label="August" value="8" {if $User.b_month==8}selected{/if}>August</option>
						<option label="September" value="9" {if $User.b_month==9}selected{/if}>September</option>
						<option label="Oktober" value="10" {if $User.b_month==10}selected{/if}>Oktober</option>
						<option label="November" value="11" {if $User.b_month==11}selected{/if}>November</option>
						<option label="Dezember" value="12" {if $User.b_month==12}selected{/if}>Dezember</option>
					</select>
				<input name="year" type="text" size="4" maxlength="4" value='{$User.b_year}' />  
     </td>
    </tr>
    <tr>
     <td colspan=2>Profiltext:</td>
    </tr>
    <tr>
     <td colspan=2><textarea name='text' cols=40 rows=7>{$User.personal_text}</textarea></td>
    </tr>
    <tr>
     <td colspan=2><input type=submit value='Speichern' /></td>
    </tr>
   </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table>
   <tr>
    <th align=left width=30>Nr.</th>
    <th align=left width=300>Dorf</th>
    <th align=left width=70>Koordinaten</th>
    <th align=left width=70>Punkte</th>
    <th align=left width=90>Dorf nehmen</th>
   </tr>
   {foreach from=$Villages item=Village key=nr}
   <tr>
    <td>{$nr+1}</td>
    <td>{$Village.name}</td>
    <td>({$Village.x}|{$Village.y})</td>
    <td>{$Village.points}</td>
    <td><a href='index.php?screen=user&mode=edit&take_village={$Village.id}&id={$User.id}'>Dorf nehmen</a></td>
   </tr>
   {/foreach}
  </table>  
{elseif $smarty.get.mode == 'delete'}
  {if $smarty.get.action == 'done'}
  <font color=green>User wurde erfolgreich gelöscht.</font>
  {/if}
{/if}