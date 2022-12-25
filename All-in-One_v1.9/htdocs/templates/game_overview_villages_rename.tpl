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
{if $smarty.get.error != ''} 
 {$smarty.get.error}<br /><br />
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