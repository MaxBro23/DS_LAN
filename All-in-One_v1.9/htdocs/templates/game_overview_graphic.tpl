<table cellspacing="0" cellpadding="0"><tr><td valign="top">

<table width="100%"><tr>
	<td><a href="game.php?village={$village.id}&amp;screen=overview&amp;action=set_labels&amp;labels={if !$labels}1{else}0{/if}&amp;h=3760">
      {if $user.labels}
        {$lang->get("set_labels_off")}
      {else}
        {$lang->get("set_labels_on")}
      {/if}</a></td>

<td align="right"><a href="game.php?village={$village.id}&amp;screen=overview&amp;action=set_visual&amp;visual=0&amp;h={$hkey}">{$lang->get("set_visual_classic")}</a></td>
</tr></table>

<table cellspacing="0" cellpadding="0" style="border-width:1px; border-style: solid; border-color:#804000; background-color:#F1EBDD;" align="center">
<tr><td>

<div style="position:relative">
<img width="600" height="418" src="graphic/{$time}/back_none.jpg" alt="" />
{php}$kirche = true;{/php}
{foreach from=$built_builds item=dbname key=id}
{if $dbname=="statue"}
<a href="game.php?village={$village.id}&screen={$dbname}"><img class="p_{$dbname}" src="/graphic/visual/statue1.png" /></a>
{else}

	<a href="game.php?village={$village.id}&screen={$dbname}"><img class="p_{$dbname}" src="{$cl_builds->getGraphic($dbname, $village.$dbname)}" /></a>
	{if $dbname=='main'}
		{if $village.$dbname>=15}
		<img class="p_main_flag" src="/graphic/visual/mainflag3.gif" />
		{elseif $village.$dbname>=5}
		<img class="p_main_flag" src="/graphic/visual/mainflag2.gif" />
		{else}
		<img class="p_main_flag" src="/graphic/visual/mainflag1.gif" />
		{/if}
	{elseif $dbname=='church'}
	{php}$kirche = false;{/php}
	{elseif $dbname=='farm'}
		{if $village.$dbname>=20}
		<img class="p_farm_field" src="/graphic/visual/farm3_field.png" />
		{/if}
	{/if}

{/if}
{/foreach}
{php}if($kirche) echo '<img class="p_church" src="/graphic/visual/church_disabled.png" />';{/php}
<img class="empty" src="graphic/map/empty.png" alt="" usemap="#map" />
<map name="map" id="map">
{foreach from=$built_builds item=dbname key=id}
	<area shape="poly" coords="{$cl_builds->get_graphicCoords($dbname)}" href="game.php?village={$village.id}&amp;screen={$dbname}" alt="{$cl_builds->get_name($dbname)}" title="{$cl_builds->get_name($dbname)}" />
{/foreach}
</map>
{if $user.labels}
{foreach from=$built_builds item=dbname key=id}
	<div id="l_{$dbname}" class="l_{$dbname}">
	<div class="label">
		<a href="game.php?village={$village.id}&amp;screen={$dbname}"><img src="graphic/buildings/{$dbname}.png" class="middle" alt="{$cl_builds->get_name($dbname)}" /> {$village.$dbname}</a>
		<br /><span style="font-size:7px; font-weight:bold">
    {if $timer_data.$dbname >0}<span class="timer">{$timer_data.$dbname|format_time}</span>{/if}
    {if $dbname == 'market'}
      {$dealers_outside}/{$dealers}
    {/if}
    </span>
	</div>
	</div>
{/foreach}
{/if}

<script type="text/javascript">overviewShowLevel();</script></td></tr></table></td><td valign="top" width="100%">

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
                {foreach from=$in_village_units item=num key=dbname}	{if $dbname == 'unit_knight'}
				
<tr><td><img src="graphic/unit/unit_knight.png"> <b>{$pala}</b> <br> <a href="game.php?village={php} echo $this->_tpl_vars['village']['id']; {/php}&screen=overview&delete={php} echo $this->_tpl_vars['dbname']; {/php}"><font size="-2">L&ouml;schen</font></a></td></tr> 
{else}
<tr><td><img src="graphic/unit/{$dbname}.png"> <b>{$num}</b> {$cl_units->get_name($dbname)}</td></tr>
{/if}{/foreach}
			</table>
<br />
			{if $village.agreement!=100}
				<table class="vis" width="100%">
				<tr><th>{$lang->get("agreement")}:</th><th>{$village.agreement}</th></tr>
				</table>
				<br />
			{/if}
			{if isset($village.group)}
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
			<table class="vis" width="100%">
				<tr>
					<th>{$lang->get("troops_incoming")}</th>
					<th>{$lang->get("arrival")}</th>
				</tr>
				{foreach from=$other_movements item=array}
				    <tr>
				        <td>
				            <a href="game.php?village={$village.id}&amp;screen=info_command&amp;id={$array.id}&amp;type=other">
				            <img src="graphic/command/{$array.type}.png"> {$array.to_villagename}
				            </a>
				        </td>
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
			<table class="vis" width="100%">
				<tr>
					<th>{$lang->get("own_troops")}</th>
					<th>{$lang->get("arrival")}</th>
				</tr>
				{foreach from=$my_movements item=array}
				    <tr>
				        <td>
				            <a href="game.php?village={$village.id}&amp;screen=info_command&amp;id={$array.id}&amp;type=own">
				            <img src="graphic/command/{$array.type}.png"> {$array.to_villagename}
				            </a>
				        </td>
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
	</tr
</table>