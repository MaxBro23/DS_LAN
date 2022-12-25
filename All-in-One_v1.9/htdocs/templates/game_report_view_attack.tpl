{if $report.wins=='att'}
	<h3>{$lang->grab("report_view_attack", "attacker_won")}</h3>
{else}
    <h3>{$lang->grab("report_view_attack", "defender_won")}</h3>
{/if}

<h4>{$lang->grab("report_view_attack", "luck")}</h4>
<table>
{if $report.luck<0}
	<tr>
	<td><b>{$report.luck}%</b></td>
	<td><img src="graphic/rabe.png" alt="Pech" /></td>
	<td>
		<table style="border: 1px solid black;" cellspacing="0" cellpadding="0">
		<tr>
	        <td width="{math equation="a-(b*(x * y))" b=-1 a=50 x=$report.luck y=2}" height="12"></td>
			<td width="{math equation="b*(x * y)" b=-1 x=$report.luck y=2}" style="background-image:url(graphic/balken_pech.png);"></td>
			<td width="2" style="background-color:rgb(0, 0, 0)"></td>
			<td width="0" style="background-image:url(graphic/balken_glueck.png);"></td>
			<td width="50"></td>
		</tr>
		</table>
{else}
	<tr>
    <td><img src="graphic/rabe.png" alt="Pech" /></td>
	<td>
		<table style="border: 1px solid black;" cellspacing="0" cellpadding="0">
		<tr>
			<td width="50"></td>
			<td width="2" style="background-color:rgb(0, 0, 0)"></td>
			<td width="{math equation="x * y" x=$report.luck y=2}" style="background-image:url(graphic/balken_glueck.png);"></td>
			<td width="{math equation="a-(x * y)" a=50 x=$report.luck y=2}" height="12"></td>
		</tr>
		</table>
	<td>{if $report.luck>=1}<img src="graphic/klee.png" alt="Glück" />{else}<img src="graphic/klee_grau.png" alt="Glück" />{/if}</td>
	<td><b>{$report.luck}%</b></td>
{/if}
</td>


</tr>
</table>

{if $moral_activ=='true'}
	<table>
	<tr><td><h4>{$lang->grab("report_view_attack", "moral")}: {$report.moral}%</h4></td></tr>
	</table>
	<br />
{/if}


<table width="100%" style="border: 1px solid #DED3B9">
<tr><th width="100">{$lang->grab("report_view_attack", "attacker")}:</th><th><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$report.from_user}">{$report.from_username}</a></th></tr>
<tr><td>{$lang->grab("report_view_attack", "village")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$report.from_village}">{$report.from_villagename} ({$report.from_x}|{$report.from_y})</a> <a href="game.php?village={$report.from_village}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$report.from_village}&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$report.from_x}&y={$report.from_y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </td></tr>

<tr><td colspan="2">
	<table class="vis">
	<tr class="center">
		<td></td>
		{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
			<td width="35"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></td>
		{/foreach}
	</tr>
	<tr class="center"><td>{$lang->grab("report_view_attack", "amount")}:</td>{foreach from=$report_units.units_a item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>

	<tr class="center"><td>{$lang->grab("report_view_attack", "wastages")}:</td>{foreach from=$report_units.units_b item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>
	</table>

</td></tr>
</table><br />

<table width="100%" style="border: 1px solid #DED3B9">
<tr><th width="100">Verteidiger:</th><th><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$report.to_user}">{$report.to_username}</a></th></tr>
<tr><td>{$lang->grab("report_view_attack", "village")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$report.to_village}">{$report.to_villagename} ({$report.to_x}|{$report.to_y})</a> <a href="game.php?village={$report.to_village}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=map&x={$report.to_x}&y={$report.to_y}"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$report.to_x}&y={$report.to_y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a></td> </tr>
<tr><td colspan="2">
	{if $see_def_units}
		<table class="vis">
		<tr class="center">
			<td></td>
			{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
				<td width="35"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
			{/foreach}
		</tr>
		<tr class="center"><td>{$lang->grab("report_view_attack", "amount")}:</td>{foreach from=$report_units.units_c item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>
	
		<tr class="center"><td>{$lang->grab("report_view_attack", "wastages")}:</td>{foreach from=$report_units.units_d item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>
		</table>
	{else}
		<p>{$lang->grab("report_view_attack", "no_survive")}</p>
	{/if}

</td></tr>
</table><br /><br />
{if count($report_units.units_e)>1}
	<h4>{$lang->grab("report_view_attack", "defender_movements")}</h4>
	<table>
	<tr>
		{foreach from=$cl_units->get_array("dbname") item=dbname key=name}
			<th width="35"><img src="graphic/unit/{$dbname}.png" title="{$name}" alt="" /></th>
		{/foreach}
	</tr>
	<tr>{foreach from=$report_units.units_e item=num_units}{if $num_units>0}<td>{$num_units}</td>{else}<td class="hidden">0</td>{/if}{/foreach}</tr>
	</table>
{/if}
{php}
	//dieser kompleter php teil wurde von -superking- geschrieben
	$sql = "SELECT * FROM reports WHERE id =".$_GET[view];
	$res = mysql_query($sql);
	while($row = mysql_fetch_assoc($res))
	{
		if($row[main] != -1)
		{
			echo "<h4>Spionage</h4>";
			echo "<table style=\"border: 1px solid rgb(222, 211, 185);\">";
			echo "<tbody>";
			echo "<tr><th>Ersp&auml;hte Rohstoffe:</th><td>";
			echo "<img src=\"graphic/holz.png\" title=\"Holz\" alt=\"\">";
			echo $row[r_wood];
			echo "<img src=\"graphic/lehm.png\" title=\"Lehm\" alt=\"\">";
			echo $row[r_stone];
			echo "<img src=\"graphic/eisen.png\" title=\"Eisen\" alt=\"\">";
			echo $row[r_iron];
			echo "</td></tr>";
			echo "<tr><th>Geb&auml;ude:</th><td>";
			echo "Hauptgeb&auml;ude <b>(Stufe ".$row[main].")</b><br>";

			if($row[barracks] != 0)
			{
				echo "Kaserne <b>(Stufe ".$row[barracks].")</b><br>";
			}
			if($row[stable] != 0)
			{
				echo "Stall <b>(Stufe ".$row[stable].")</b><br>";
			}
			if($row[garage] != 0)
			{
				echo "Werkstatt <b>(Stufe ".$row[garage].")</b><br>";
			}
			if($row[snob] != 0)
			{
				echo "Adelshof <b>(Stufe ".$row[snob].")</b><br>";
			}
			if($row[smith] != 0)
			{
				echo "Schmiede <b>(Stufe ".$row[smith].")</b><br>";
			}	
			if($row[place] != 0)
			{
				echo "Versammlungsplatz <b>(Stufe ".$row[place].")</b><br>";
			}
			if($row[market] != 0)
			{
				echo "Marktplatz <b>(Stufe ".$row[market].")</b><br>";
			}	
			if($row[wood] != 0)
			{
				echo "Holzf&auml;ller <b>(Stufe ".$row[wood].")</b><br>";
			}	
			if($row[stone] != 0)
			{
				echo "Lehmgrube <b>(Stufe ".$row[stone].")</b><br>";
			}
			if($row[iron] != 0)
			{
				echo "Eisenmiene <b>(Stufe ".$row[iron].")</b><br>";
			}
			if($row[farm] != 0)
			{
				echo "Bauernhof <b>(Stufe ".$row[farm].")</b><br>";
			}
			if($row[storage] != 0)
			{
				echo "Speicher <b>(Stufe ".$row[storage].")</b><br>";
			}
			if($row[hide] != 0)
			{
				echo "Versteck <b>(Stufe ".$row[hide].")</b><br>";
			}
			if($row[wall] != 0)
			{
				echo "Wall <b>(Stufe ".$row[wall].")</b><br>";
			}
			echo "</td></tr>";
			echo "</tbody></table>";
			echo "<br>";

		}
	
			
	}
{/php}
^
<table width="100%" style="border: 1px solid #DED3B9">
	{if $report_ress.wood>0 || $report_ress.stone>0 || $report_ress.iron>0}
		<tr><th>{$lang->grab("report_view_attack", "booties")}:</th>
		<td width="220">
			{if $report_ress.wood>0}<img src="graphic/holz.png" title="Holz" alt="" />{$report_ress.wood} {/if}
			{if $report_ress.stone>0}<img src="graphic/lehm.png" title="Lehm" alt="" />{$report_ress.stone} {/if}
			{if $report_ress.iron>0}<img src="graphic/eisen.png" title="Eisen" alt="" />{$report_ress.iron} {/if}</td>
		<td>{$report_ress.sum}/{$report_ress.max}</td>
		</tr>
	{/if}
	{if $report_ram.from!=$report_ram.to}
		<tr><th>{$lang->grab("report_view_attack", "damage_ram")}:</th>
		<td colspan="2">{$damage_ram}</td></tr>
	{/if}
	{if $report_agreement.from!=$report_agreement.to}
	<tr><th>{$lang->grab("report_view_attack", "agreement")}</th>
	<td colspan="2">{$agreement_change}</td></tr>
	{/if}
	{if $report_catapult.from!=$report_catapult.to}
		<tr><th>{$lang->grab("report_view_attack", "damage_catapult")}:</th>
		<td colspan="2">{$cl_builds->get_name($report_catapult.building)} {$damage_catapult}</b></td></tr>
	{/if}
</table>
	<br />
	<a href="game.php?village={$village.id}&amp;screen=place&amp;mode=sim&amp;reportid={$report.id}">{$lang->grab("report_view_attack", "simulator_insert_all")}</a><br /><br />
	<a href="game.php?village={$village.id}&amp;screen=place&amp;mode=sim&amp;reportid={$report.id}&amp;report_live=live">{$lang->grab("report_view_attack", "simulator_insert_survived")}</a>
	{if $reporttype == 'attack'}
		<br />
		<hr />
		<a href="game.php?village={$report.from_village}&amp;screen=place&amp;mode=command&amp;target={$smarty.capture.dorfid}&amp;reportid={$report.id}&amp;molt=true">{$lang->grab("report_view_attack", "attack_same")}</a><br /><br />
		<a href="game.php?village={$report.from_village}&amp;screen=place&amp;mode=command&amp;units=all&amp;koords={$report.to_x};{$report.to_y}">{$lang->grab("report_view_attack", "attack_all")}</a><br /><br />
	{/if}
