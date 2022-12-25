<?php /* Smarty version 2.6.14, created on 2022-12-24 00:45:23
         compiled from game_map.tpl */ ?>
<div id="info" style="position:absolute; top:0px; left:0px; width:350px; visibility: hidden; z-index:10;">
<table id="info_content" class="vis" style="background-color: #F0E6C8;">
<tr><td rowspan="13" id="bonusbild"></td>
<th colspan="2" id="info_title">title</th></tr>
<tr><td id="bonus" colspan="2"></td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->get('points'); ?>
:</td><td id="info_points">points</td></tr>
<tr id="info_owner_row"><td><?php echo $this->_tpl_vars['lang']->get('owner'); ?>
:</td><td id="info_owner">owner</td></tr>
<tr id="info_left_row"><td colspan="2"><?php echo $this->_tpl_vars['lang']->get('left'); ?>
</td></tr>
<tr id="info_ally_row"><td><?php echo $this->_tpl_vars['lang']->get('tribe'); ?>
:</td><td id="info_ally">ally</td></tr>
<tr id="info_village_groups_row"><td><?php echo $this->_tpl_vars['lang']->get('groups'); ?>
:</td><td id="info_village_groups">village_groups</td></tr>
</table>
</div>

<h2>Kontinent <?php echo $this->_tpl_vars['continent']; ?>
</h2>

<table collspacing="1" collpadding="0"><tr><td valign="top">

	<table><tr><td valign="top"><table cellspacing="1" cellpadding="0" style="background-color: #DED3B9; border: 1px solid rgb(0, 0, 0);"><tr><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']-$this->_tpl_vars['map']['size']+1; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']+$this->_tpl_vars['map']['size']-1; ?>
"><img src="graphic/map/map_nw.png" style="z-index:1; position:relative;" alt="map/map_nw.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']+$this->_tpl_vars['map']['size']-1; ?>
"><img src="graphic/map/map_n.png" style="z-index:1; position:relative;" alt="map/map_n.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']+$this->_tpl_vars['map']['size']-1; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']+$this->_tpl_vars['map']['size']-1; ?>
"><img src="graphic/map/map_ne.png" style="z-index:1; position:relative;" alt="map/map_ne.png"/></a></td></tr><tr><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']-$this->_tpl_vars['map']['size']+1; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']; ?>
"><img src="graphic/map/map_w.png" style="z-index:1; position:relative;" alt="map/map_w.png"/></a></td><td>
	
		<table style="background-color: #F1EBDD; border: 1px solid #F1EBDD;" cellspacing="0" cellpadding="0" class="map">
	
		<?php $_from = $this->_tpl_vars['y_coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['y']):
?>
			<tr>
				<td width="20"><?php echo $this->_tpl_vars['y']; ?>
</td>
				
			<?php $_from = $this->_tpl_vars['x_coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x']):
?>
			   
				<?php if (! $this->_tpl_vars['cl_map']->getVillage($this->_tpl_vars['x'],$this->_tpl_vars['y'])): ?>
					<td id="tile_<?php echo $this->_tpl_vars['x']; ?>
_<?php echo $this->_tpl_vars['y']; ?>
" class="<?php echo $this->_tpl_vars['cl_map']->getClass($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
"><img src="graphic/map/<?php echo $this->_tpl_vars['cl_map']->graphic($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
" alt="" /></td>
				    
        
        	
        
        
        <?php else: ?> 

         <td id="tile_<?php echo $this->_tpl_vars['x']; ?>
_<?php echo $this->_tpl_vars['y']; ?>
" class="<?php echo $this->_tpl_vars['cl_map']->getClass($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
" style="background-color:rgb(<?php echo $this->_tpl_vars['cl_map']->getColor($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
)"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=info_village&amp;id=<?php echo $this->_tpl_vars['cl_map']->getvillageid($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
"><img src="graphic/map/<?php $bild = $this->_tpl_vars['cl_map']->graphic($this->_tpl_vars[x],$this->_tpl_vars[y]);if (get_bonus($this->_tpl_vars[x], $this->_tpl_vars[y])){ $bild = str_replace('v', 'b', $bild); if(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "deff") { $bild = str_replace('b', 'db', $bild); } elseif(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "off") { $bild = str_replace('b', 'ob', $bild); } } if(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "deff") { $bild = str_replace('v', 'dv', $bild); } elseif(off_or_deff($this->_tpl_vars[x], $this->_tpl_vars[y]) == "off") { $bild = str_replace('v', 'ov', $bild); }echo $bild; ?>" onmouseover="map_popup('<?php echo $this->_tpl_vars['cl_map']->getVillage($this->_tpl_vars['x'],$this->_tpl_vars['y'],'name'); ?>
 (<?php echo $this->_tpl_vars['x']; ?>
|<?php echo $this->_tpl_vars['y']; ?>
) K<?php echo $this->_tpl_vars['cl_map']->getcon($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
', <?php echo $this->_tpl_vars['cl_map']->getvillage($this->_tpl_vars['x'],$this->_tpl_vars['y'],'points'); ?>
, <?php echo $this->_tpl_vars['cl_map']->playerinfo($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
, <?php echo $this->_tpl_vars['cl_map']->getally($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
, false, <?php echo $this->_tpl_vars['x']; ?>
, <?php echo $this->_tpl_vars['y']; ?>
, <?php echo $this->_tpl_vars['village']['id']; ?>
, <?php echo $this->_tpl_vars['cl_map']->getvillage($this->_tpl_vars['x'],$this->_tpl_vars['y']); ?>
)" onmouseout="map_kill()" alt="" /></a></td>	

                <?php endif; ?>
          
			<?php endforeach; endif; unset($_from); ?>
			
			</tr>
		<?php endforeach; endif; unset($_from); ?>
			
		<tr>
			<td height="20"></td>
			<?php $_from = $this->_tpl_vars['x_coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x']):
?>
				<td><?php echo $this->_tpl_vars['x']; ?>
</td>
			<?php endforeach; endif; unset($_from); ?>
	</tr></table></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']+$this->_tpl_vars['map']['size']-1; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']; ?>
"><img src="graphic/map/map_e.png" style="z-index:1; position:relative;" alt="map/map_e.png"/></a></td></tr><tr><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']-$this->_tpl_vars['map']['size']+1; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']-$this->_tpl_vars['map']['size']+1; ?>
"><img src="graphic/map/map_sw.png" style="z-index:1; position:relative;" alt="map/map_sw.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']-$this->_tpl_vars['map']['size']+1; ?>
"><img src="graphic/map/map_s.png" style="z-index:1; position:relative;" alt="map/map_s.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']+$this->_tpl_vars['map']['size']-1; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']-$this->_tpl_vars['map']['size']+1; ?>
"><img src="graphic/map/map_se.png" style="z-index:1; position:relative;" alt="map/map_se.png"/></a></td></tr></table></td><td valign="top">
	
	</td></tr></table>
	
</td><td valign="top">

	<table><tr><td valign="top"><table cellspacing="1" cellpadding="0" style="background-color: #DED3B9; border: 1px solid rgb(0, 0, 0);"><tr><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']-50; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']+50; ?>
"><img src="graphic/map/map_nw.png" style="z-index:1; position:relative;" alt="map/map_nw.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']+50; ?>
"><img src="graphic/map/map_n.png" style="z-index:1; position:relative;" alt="map/map_n.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']+50; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']+50; ?>
"><img src="graphic/map/map_ne.png" style="z-index:1; position:relative;" alt="map/map_ne.png"/></a></td></tr><tr><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']-50; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']; ?>
"><img src="graphic/map/map_w.png" style="z-index:1; position:relative;" alt="map/map_w.png"/></a></td><td>

	<form method="POST" action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&screen=map&action=bigMapOnclick">	
		<input type="hidden" name="startX" id="startX" value="<?php echo $this->_tpl_vars['xs']; ?>
" />
		<input type="hidden" name="startY" id="startY" value="<?php echo $this->_tpl_vars['ys']; ?>
" />
		<div style="position:relative; padding:0px">
			<div style="position:absolute;z-index:100">
				<input type="image" class="noneStyle" src="graphic/map/empty.png" style="width:251px;height:250px;margin:0px;padding:0px" />
			</div>
			<img src="graphic/continent/<?php echo $this->_tpl_vars['user']['id']; ?>
-<?php echo $this->_tpl_vars['conmap']; ?>
-<?php echo $this->_tpl_vars['contime']; ?>
.png">
			<div id="bigMapRect" style="z-index:10; position:absolute; top:<?php echo $this->_tpl_vars['bigMapRectTop']; ?>
px; left:<?php echo $this->_tpl_vars['bigMapRectLeft']; ?>
px; width:<?php echo $this->_tpl_vars['mapSize']*5-1; ?>
px; height:<?php echo $this->_tpl_vars['mapSize']*5-1; ?>
px; border: 1px solid rgb(213, 227, 174);"></div>
		</div>
	</form>
	
	</td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']+50; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']; ?>
"><img src="graphic/map/map_e.png" style="z-index:1; position:relative;" alt="map/map_e.png"/></a></td></tr><tr><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']-50; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']-50; ?>
"><img src="graphic/map/map_sw.png" style="z-index:1; position:relative;" alt="map/map_sw.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']-50; ?>
"><img src="graphic/map/map_s.png" style="z-index:1; position:relative;" alt="map/map_s.png"/></a></td><td align="center"><a href="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map&amp;x=<?php echo $this->_tpl_vars['map']['x']+50; ?>
&amp;y=<?php echo $this->_tpl_vars['map']['y']-50; ?>
"><img src="graphic/map/map_se.png" style="z-index:1; position:relative;" alt="map/map_se.png"/></a></td></tr></table></td><td valign="top">
	</td></tr></table>
	
</td></tr></table>
<br />
<form action="game.php?village=<?php echo $this->_tpl_vars['village']['id']; ?>
&amp;screen=map" method="post">
<table>
<tr><td>x: <input type="text" name="x" value="<?php echo $this->_tpl_vars['map']['x']; ?>
" size="5" /> y:<input type="text" name="y" value="<?php echo $this->_tpl_vars['map']['y']; ?>
" size="5" /></td>
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