<div id="info" style="position:absolute; top:0px; left:0px; width:350px; visibility: hidden; z-index:10;">
<table id="info_content" class="vis" style="background-color: #F0E6C8;">
<tr><td rowspan="13" id="bonusbild"></td>
<th colspan="2" id="info_title">title</th></tr>
<tr><td id="bonus" colspan="2"></td></tr>
<tr><td>{$lang->get("points")}:</td><td id="info_points">points</td></tr>
<tr id="info_owner_row"><td>{$lang->get("owner")}:</td><td id="info_owner">owner</td></tr>
<tr id="info_left_row"><td colspan="2">{$lang->get("left")}</td></tr>
<tr id="info_ally_row"><td>{$lang->get("tribe")}:</td><td id="info_ally">ally</td></tr>
<tr id="info_village_groups_row"><td>{$lang->get("groups")}:</td><td id="info_village_groups">village_groups</td></tr>
</table>
</div>

<h2>Kontinent {$continent}</h2>

<table collspacing="1" collpadding="0"><tr><td valign="top">

	<table><tr><td valign="top"><table cellspacing="1" cellpadding="0" style="background-color: #DED3B9; border: 1px solid rgb(0, 0, 0);"><tr><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x-$map.size+1}&amp;y={$map.y+$map.size-1}"><img src="graphic/map/map_nw.png" style="z-index:1; position:relative;" alt="map/map_nw.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x}&amp;y={$map.y+$map.size-1}"><img src="graphic/map/map_n.png" style="z-index:1; position:relative;" alt="map/map_n.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x+$map.size-1}&amp;y={$map.y+$map.size-1}"><img src="graphic/map/map_ne.png" style="z-index:1; position:relative;" alt="map/map_ne.png"/></a></td></tr><tr><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x-$map.size+1}&amp;y={$map.y}"><img src="graphic/map/map_w.png" style="z-index:1; position:relative;" alt="map/map_w.png"/></a></td><td>
	
		<table style="background-color: #F1EBDD; border: 1px solid #F1EBDD;" cellspacing="0" cellpadding="0" class="map">
	
		{foreach from=$y_coords item=y}
			<tr>
				<td width="20">{$y}</td>
				
			{foreach from=$x_coords item=x}
			   
				{if !$cl_map->getVillage($x,$y)}
					<td id="tile_{$x}_{$y}" class="{$cl_map->getClass($x,$y)}"><img src="graphic/map/{$cl_map->graphic($x,$y)}" alt="" /></td>
				    
        
        	
        
        
        {else} 

         <td id="tile_{$x}_{$y}" class="{$cl_map->getClass($x,$y)}" style="background-color:rgb({$cl_map->getColor($x,$y)})"><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$cl_map->getvillageid($x,$y)}"><img src="graphic/map/{php}$bild = $this->_tpl_vars['cl_map']->graphic($this->_tpl_vars[x],$this->_tpl_vars[y]);if (get_bonus($this->_tpl_vars[x], $this->_tpl_vars[y])){ $bild = str_replace('v', 'b', $bild); if(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "deff") { $bild = str_replace('b', 'db', $bild); } elseif(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "off") { $bild = str_replace('b', 'ob', $bild); } } if(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "deff") { $bild = str_replace('v', 'dv', $bild); } elseif(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "off") { $bild = str_replace('v', 'ov', $bild); }echo $bild;{/php}" onmouseover="map_popup('{$cl_map->getVillage($x,$y,"name")} ({$x}|{$y}) K{$cl_map->getcon($x,$y)}', {$cl_map->getvillage($x,$y,points)}, {$cl_map->playerinfo($x,$y)}, {$cl_map->getally($x,$y)}, false, {$x}, {$y}, {$village.id}, {$cl_map->getvillage($x,$y)})" onmouseout="map_kill()" alt="" /></a></td>	

                {/if}
          
			{/foreach}
			
			</tr>
		{/foreach}
			
		<tr>
			<td height="20"></td>
			{foreach from=$x_coords item=x}
				<td>{$x}</td>
			{/foreach}
	</tr></table></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x+$map.size-1}&amp;y={$map.y}"><img src="graphic/map/map_e.png" style="z-index:1; position:relative;" alt="map/map_e.png"/></a></td></tr><tr><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x-$map.size+1}&amp;y={$map.y-$map.size+1}"><img src="graphic/map/map_sw.png" style="z-index:1; position:relative;" alt="map/map_sw.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x}&amp;y={$map.y-$map.size+1}"><img src="graphic/map/map_s.png" style="z-index:1; position:relative;" alt="map/map_s.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x+$map.size-1}&amp;y={$map.y-$map.size+1}"><img src="graphic/map/map_se.png" style="z-index:1; position:relative;" alt="map/map_se.png"/></a></td></tr></table></td><td valign="top">
	
	</td></tr></table>
	
</td><td valign="top">

	<table><tr><td valign="top"><table cellspacing="1" cellpadding="0" style="background-color: #DED3B9; border: 1px solid rgb(0, 0, 0);"><tr><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x-50}&amp;y={$map.y+50}"><img src="graphic/map/map_nw.png" style="z-index:1; position:relative;" alt="map/map_nw.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x}&amp;y={$map.y+50}"><img src="graphic/map/map_n.png" style="z-index:1; position:relative;" alt="map/map_n.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x+50}&amp;y={$map.y+50}"><img src="graphic/map/map_ne.png" style="z-index:1; position:relative;" alt="map/map_ne.png"/></a></td></tr><tr><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x-50}&amp;y={$map.y}"><img src="graphic/map/map_w.png" style="z-index:1; position:relative;" alt="map/map_w.png"/></a></td><td>

	<form method="POST" action="game.php?village={$village.id}&screen=map&action=bigMapOnclick">	
		<input type="hidden" name="startX" id="startX" value="{$xs}" />
		<input type="hidden" name="startY" id="startY" value="{$ys}" />
		<div style="position:relative; padding:0px">
			<div style="position:absolute;z-index:100">
				<input type="image" class="noneStyle" src="graphic/map/empty.png" style="width:251px;height:250px;margin:0px;padding:0px" />
			</div>
			<img src="graphic/continent/{$user.id}-{$conmap}-{$contime}.png">
			<div id="bigMapRect" style="z-index:10; position:absolute; top:{$bigMapRectTop}px; left:{$bigMapRectLeft}px; width:{$mapSize*5-1}px; height:{$mapSize*5-1}px; border: 1px solid rgb(213, 227, 174);"></div>
		</div>
	</form>
	
	</td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x+50}&amp;y={$map.y}"><img src="graphic/map/map_e.png" style="z-index:1; position:relative;" alt="map/map_e.png"/></a></td></tr><tr><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x-50}&amp;y={$map.y-50}"><img src="graphic/map/map_sw.png" style="z-index:1; position:relative;" alt="map/map_sw.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x}&amp;y={$map.y-50}"><img src="graphic/map/map_s.png" style="z-index:1; position:relative;" alt="map/map_s.png"/></a></td><td align="center"><a href="game.php?village={$village.id}&amp;screen=map&amp;x={$map.x+50}&amp;y={$map.y-50}"><img src="graphic/map/map_se.png" style="z-index:1; position:relative;" alt="map/map_se.png"/></a></td></tr></table></td><td valign="top">
	</td></tr></table>
	
</td></tr></table>
<br />
<form action="game.php?village={$village.id}&amp;screen=map" method="post">
<table>
<tr><td>x: <input type="text" name="x" value="{$map.x}" size="5" /> y:<input type="text" name="y" value="{$map.y}" size="5" /></td>
<td><input type="submit" value="&raquo; OK &laquo;" style="font-size: 10pt;" /></td>
</tr></table>
</form><br />
<table style="border: 1px solid ; background-color: #DED3B9; margin-left: 2px;">
<tbody>
<tr class="nowrap">
<td/>
<td width="10" style="background-color: rgb(255, 255, 255);"/>
<td class="small">Aktuelles Dorf</td>
<td width="10" style="background-color: rgb(240, 200, 0);"/>
<td class="small">Eigene Dörfer</td>
<td width="10" style="background-color: rgb(0, 0, 244);"/>
<td class="small">Eigener Stamm</td>
<td width="10" style="background-color: rgb(150, 150, 150);"/>
<td class="small">Verlassene Dörfer</td>
<td width="10" style="background-color: rgb(180, 0, 0);"/>
<td class="small">Sonstige Dörfer</td>
</tr>
<tr class="nowrap">
<td class="small">Stamm:</td>
<td width="10" style="background-color: rgb(0, 160, 244);"/>
<td class="small">Verbündete</td>
<td width="10" style="background-color: rgb(128, 0, 128);"/>
<td class="small">Nicht-Angriffs-Pakt (NAP)</td>
<td width="10" style="background-color: rgb(244, 0, 0);"/>
<td class="small">Feinde</td>
</tr>
</tbody>
</table>