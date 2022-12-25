
<h2>{$lang->get("overview")} {$village.name}</h2>
<table>
	<tr>
		<td width="450" valign="top" valign="top">
			<table class="vis" width="100%">
				<tr>
					<th colspan="2">{$lang->get("buildings")}</th>
				</tr>
				{foreach from=$built_builds item=dbname key=id}
					<tr>
						<td width="50%"><a href="game.php?village={$village.id}&screen={$dbname}"><img src="graphic/buildings/{$dbname}.png"> {$cl_builds->get_name($dbname)}</a> ({$lang->get("stage")} {$village.$dbname})</td>
						<td width="50%">
              {$villageOverviewDatas->get($dbname)}
            </td>
					</tr>
				{/foreach}
			</table>
			<br />
			<a href="game.php?village={$village.id}&amp;screen=overview&amp;action=set_visual&amp;visual=1&amp;h={$hkey}">{$lang->get("graphic")}</a>
		</td>
		<td valign="top">
			<table class="vis" width="100%">
				<tr><th colspan="2">{$lang->get("prod")}</th></tr>
				<tr><td width="70"><img src="graphic/holz.png" title="Holz" alt="" /> {$lang->get("wood")}</td><td><strong>{$wood_prod_overview}</strong> {$lang->get("per")} {if $speed>10}{$lang->get("minute")}{else}{$lang->get("hour")}{/if}</td></tr>
				<tr><td><img src="graphic/lehm.png" title="Lehm" alt="" /> {$lang->get("stone")}</td><td><strong>{$stone_prod_overview}</strong> {$lang->get("per")} {if $speed>10}{$lang->get("minute")}{else}{$lang->get("hour")}{/if}</td></tr>
				<tr><td><img src="graphic/eisen.png" title="Eisen" alt="" /> {$lang->get("iron")}</td><td><strong>{$iron_prod_overview}</strong> {$lang->get("per")} {if $speed>10}{$lang->get("minute")}{else}{$lang->get("hour")}{/if}</td></tr>
			</table>
			<br />
			Dorftyp: <form action="?village={php}echo $this->_tpl_vars['village']['id'];{/php}&screen=overview&action=type_edit" method="post"><select name="type"><option value="" {if $vill.type == ""} selected {/if}>Neutral</option><option value="off" {if $vill.type == "off"} selected {/if}>OFF</option><option value="deff" {if $vill.type == "deff"} selected {/if}>DEFF</option></select><input type="submit" value="Ändern"></form>
			<table class="vis" width="100%">
				<tr><th>{$lang->get("units")}</th></tr>
                {foreach from=$in_village_units item=num key=dbname}
	{if $dbname == 'unit_knight'}
{php}
$pala_name1 = mysql_query("SELECT * FROM paladin WHERE uid = ".$_COOKIE['id']);
$pala_name2 = mysql_fetch_assoc($pala_name1);
echo '<tr><td><img src="graphic/unit/unit_knight.png"> <b>'.$pala_name2['name'].'</b></td></tr>';
{/php}
{else}
<tr><td><img src="graphic/unit/{$dbname}.png"> <b>{$num}</b> {$cl_units->get_name($dbname)}</td></tr>
{/if}
{/foreach}
			</table>
			<br />
			{if $village.agreement!=100}
				<table class="vis" width="100%">
				<tr><th>{$lang->get("agreement")}:</th><th>{$village.agreement}</th></tr>
				</table>
				<br />
			{/if}
			
			{if $village.group}
        <table class="vis" width="100%">
          <tbody>
            <tr>
            <th>{$lang->get("group")}</th>
            </tr>
            {if $village.group != 0}
              {foreach from=$groups item=g key=id}
                {if $g.id != ''}
                  <tr>
                    <td>{$g.group_name}</td>
                  </tr>
                {/if}
              {/foreach}
            {/if}
            <tr>
              <td>
                <a href="javascript:popup_scroll('groups.php?village={$village.id}&mode=village', 300, 400);">&raquo; {$lang->get("edit")}</a>
              </td>
            </tr>
          </tbody>
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
		</td>
	</tr>
</table>
{if $smarty.get.site == "loeschen"}
<table class="vis" width="100%">
<tr><th>Einheiten L&ouml;schen <a href="game.php?village={php} echo $this->_tpl_vars['village']['id']; {/php}&screen=overview"><font size="-2">Ausblenden</font></a></th></tr>
                {php} $_from = $this->_tpl_vars['in_village_units']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dbname'] => $this->_tpl_vars['num']):
{/php}
                	<tr><td><img src="graphic/unit/{php} echo $this->_tpl_vars['dbname']; {/php}
.png"> <b>{php} echo $this->_tpl_vars['num']; {/php}
</b> {php} echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['dbname']); {/php} <br><form action="game.php?village={php} echo $this->_tpl_vars['village']['id']; {/php}&screen=overview&site=loeschen&action=loeschen" method="post"> Anzahl Truppen: <input type="text" name="{php} echo $this->_tpl_vars['dbname']; {/php}"><br><a href="game.php?village={php} echo $this->_tpl_vars['village']['id']; {/php}&screen=overview&delete={php} echo $this->_tpl_vars['dbname']; {/php}"><font size="-2">Alle Loeschen</font></a>
</td></tr>
                {php} endforeach; endif; unset($_from); {/php}
<input type="submit" value="L&ouml;schen">
</form>
</table>
{elseif $smarty.get.site == ""}
<table class="vis" width="100%">
<tr><th>Einheiten L&ouml;schen <a href="game.php?village={php} echo $this->_tpl_vars['village']['id']; {/php}&screen=overview&site=loeschen"><font size="-2">Einblenden</font></a></th></tr>
</table>
{/if}