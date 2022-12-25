{if !empty($error)}
	<div style="color:red; font-size:large">{$error}</div>
{/if}

<h3>{$lang->get("do_command")}</h3>

<form name="units" action="game.php?village={$village.id}&amp;screen=place&amp;try=confirm" method="post">
	<table>
		<tr>
			{assign var=counter value=0}
			{foreach from=$group_units key=group_name item=value}
				<td width="150" valign="top">
					<table class="vis" width="100%">
						{foreach from=$group_units.$group_name item=dbname}
							{* Counter um 1 erhï¿½hren fï¿½r den Tab fï¿½r die Input Felder *}
							{math assign=counter equation="x + y" x=$counter y=1}
							<tr>
								<td>
									<a href="javascript:popup('popup_unit.php?unit={$dbname}', 520, 520)"><img src="graphic/unit/overview/{$dbname}.png" title="{$cl_units->get_name($dbname)}" alt="" /></a> <input name="{$dbname}" type="text" size="5" tabindex="{$counter}" value="{$values.$dbname}" /> <a href="javascript:{capture name=alletruppen.$counter}insertUnit(document.forms[0].{$dbname}, {$units.$dbname}){/capture}insertUnit(document.forms[0].{$dbname}, {$units.$dbname})">({$units.$dbname})</a>
								</td>
							</tr>
						
						{/foreach}
					</table>
				</td>
			{/foreach}
		</tr>
	</table>
	
	<table>
		<tr>
			<td colspan="100%">
			<a href="javascript:
{foreach from=$smarty.capture key=alletruppen item=truppen}
{$truppen};
{/foreach}">&raquo; Alle Truppen</a>{$blubb}
			</td>
		</tr>
		<tr>
			<td rowspan="2">
				x: <input type="text" name="x" value="{$values.x}" size="5" />
				y: <input type="text" name="y" value="{$values.y}" size="5" />
				
				{php}
$userid_query = mysql_query("SELECT `userid` FROM `sessions` WHERE `sid` = '".$_COOKIE['session']."'");
$userid_get = mysql_fetch_assoc($userid_query);
$userid = $userid_get['userid'];
$select_query = mysql_query("SELECT * FROM `villages` WHERE (`userid` = '".$userid."' AND `id` != '".$_GET['village']."') ORDER BY `name` ASC");
$select_count = mysql_num_rows($select_query);
if($select_count > 1)
    {
    $villages = array();
    while($select_get = mysql_fetch_assoc($select_query))
        {
        $villages[] = $select_get;
        }
    $this->assign('villages', $villages);
    }
{/php}
{if count($villages)>0}
    <select name="target" size="1" onchange="insertCoord(document.forms[0], this)">
        <option>-Dorf w&auml;hlen-</option>
        {foreach from=$villages key=id item=value}
            <option value="{$villages.$id.x}|{$villages.$id.y}">{$villages.$id.name} ({$villages.$id.x}|{$villages.$id.y}) {$villages.$id.continent}</option>
        {/foreach}
    </select>
{/if}

			</td>
			<td valign="top"></td>
			<td valign="top"></td>
			<td rowspan="2"><input class="attack" name="attack" type="submit" value="{$lang->get("do_attack")}" style="font-size: 10pt;" /></td>
			<td rowspan="2"><input class="support" name="support" type="submit" value="{$lang->get("do_support")}" style="font-size: 10pt;" /></td>
		</tr>
	</table>
</form>

{php}
if($_GET['molt']) echo '<script type="text/javascript">
document.getElementsByName("attack")[0].click();
</script>';
{/php}

<h3>{$lang->get("movements")}</h3>
{* Eigene losgeschickte Angriffe *}
{if count($my_movements)>0}
<table class="vis">
	<tr>
		<th width="250">{$lang->get("own_troops")}</th>
		<th width="160">{$lang->get("arrival")}</th>
		<th width="80">{$lang->get("arrival_in")}</th>
	</tr>
	{foreach from=$my_movements item=array}
	    <tr>
	        <td>
	            <a href="game.php?village={$village.id}&amp;screen=info_command&amp;id={$array.id}&amp;type=own">
	            <img src="graphic/command/{$array.type}.png"> {$array.message}
	            </a>
	        </td>
	        <td>{$array.end_time|format_date}</td>
	        {if $array.arrival_in<0}
	        	<td>{$array.arrival_in|format_time}</td>
	        {else}
	        	<td><span class="timer">{$array.arrival_in|format_time}</span></td>
	        {/if}
	        {if $array.can_cancel}
	        	<td><a href="game.php?village={$village.id}&amp;screen=place&amp;action=cancel&amp;id={$array.id}&amp;h={$hkey}">{$lang->get("doCancel")}</a></td>
	        {/if}
	    </tr>
	{/foreach}
</table>
{/if}


{* Andere Angriffe auf das aktuelle Dorf *}
{if count($other_movements)>0}
<table class="vis">
	<tr>
		<th width="250">{$lang->get("troops_incoming")}</th>
		<th width="160">{$lang->get("arrival")}</th>
		<th width="80">{$lang->get("arrival_in")}</th>
	</tr>
	{foreach from=$other_movements item=array}
	    <tr>
	        <td>
	            <a href="game.php?village={$village.id}&amp;screen=info_command&amp;id={$array.id}&amp;type=other">
	            <img src="graphic/command/{$array.type}.png"> {$array.message}
	            </a>
	        </td>
	        <td>{$array.end_time|format_date}</td>
	        {if $array.arrival_in<0}
	        	<td>{$array.arrival_in|format_time}</td>
	        {else}
	        	<td><span class="timer">{$array.arrival_in|format_time}</span></td>
	        {/if}
	    </tr>
	{/foreach}
</table>
{/if}