{php}
$pala0 = mysql_query("SELECT userid FROM villages WHERE id = ".$_GET['village']);
$pala01 = @mysql_fetch_assoc($pala0);
$pala1 = mysql_query("SELECT * FROM paladin WHERE uid = '".$pala01['userid']."'");
$pala2 = @mysql_fetch_assoc($pala1);
if(empty($pala2))
{
$pala3 = mysql_query("INSERT INTO paladin (uid, name) VALUES ('".$pala01['userid']."', 'Paladin')");
}
$mach_pala1 = mysql_query("SELECT * FROM recruit WHERE unit = 'unit_knight'");
while($mach_pala2 = @mysql_fetch_assoc($mach_pala1))
 {
 if($mach_pala2['time_finished'] <= time())
	{
	mysql_query("UPDATE unit_place SET unit_knight = '1' WHERE (villages_from_id = ".$mach_pala2['villageid']." AND villages_to_id = ".$mach_pala2['villageid'].")");
	mysql_query("DELETE FROM recruit WHERE id = ".$mach_pala2['id']);
	}
 }
$pala_dep1 = mysql_query("SELECT * FROM pala_deploy");
while($pala_dep2 = @mysql_fetch_assoc($pala_dep1))
 {
 if($pala_dep2['finish'] <= time())
	{
	mysql_query("UPDATE unit_place SET unit_knight = '1' WHERE (villages_from_id = ".$pala_dep2['to']." AND villages_to_id = ".$pala_dep2['to'].")");
	mysql_query("UPDATE villages SET all_unit_knight = '1' WHERE id = ".$pala_dep2['to']);
	mysql_query("UPDATE villages SET all_unit_knight = '0' WHERE id = ".$pala_dep2['from']);
	mysql_query("DELETE FROM pala_deploy WHERE uid = ".$pala_dep2['uid']);
	}
 }
{/php}
{php}
$pala0 = mysql_query("SELECT userid FROM villages WHERE id = ".$_GET['village']);
$pala01 = @mysql_fetch_assoc($pala0);
$pala1 = mysql_query("SELECT * FROM paladin WHERE uid = '".$pala01['userid']."'");
$pala2 = @mysql_fetch_assoc($pala1);
if(empty($pala2))
{
$pala3 = mysql_query("INSERT INTO paladin (uid, name) VALUES ('".$pala01['userid']."', 'Paladin')");
}
$mach_pala1 = mysql_query("SELECT * FROM recruit WHERE unit = 'unit_knight'");
while($mach_pala2 = @mysql_fetch_assoc($mach_pala1))
 {
 if($mach_pala2['time_finished'] <= time())
	{
	mysql_query("UPDATE unit_place SET unit_knight = '1' WHERE (villages_from_id = ".$mach_pala2['villageid']." AND villages_to_id = ".$mach_pala2['villageid'].")");
	mysql_query("DELETE FROM recruit WHERE id = ".$mach_pala2['id']);
	}
 }
$pala_dep1 = mysql_query("SELECT * FROM pala_deploy");
while($pala_dep2 = @mysql_fetch_assoc($pala_dep1))
 {
 if($pala_dep2['finish'] <= time())
	{
	mysql_query("UPDATE unit_place SET unit_knight = '1' WHERE (villages_from_id = ".$pala_dep2['to']." AND villages_to_id = ".$pala_dep2['to'].")");
	mysql_query("UPDATE villages SET all_unit_knight = '1' WHERE id = ".$pala_dep2['to']);
	mysql_query("UPDATE villages SET all_unit_knight = '0' WHERE id = ".$pala_dep2['from']);
	mysql_query("DELETE FROM pala_deploy WHERE uid = ".$pala_dep2['uid']);
	}
 }
{/php}
{php}
$pala1 = mysql_query("SELECT * FROM paladin WHERE uid = ".$_COOKIE['id']);
$pala2 = @mysql_fetch_assoc($pala1);
if(empty($pala2))
{$pala3 = mysql_query("INSERT INTO paladin (uid, name) VALUES (".$_COOKIE['id'].", 'Paladin')");}
$mach_pala1 = mysql_query("SELECT * FROM recruit WHERE unit = 'unit_knight'");
while($mach_pala2 = @mysql_fetch_assoc($mach_pala1))
	{
	if($mach_pala2['time_finished'] <= time())
		{
		mysql_query("UPDATE unit_place SET unit_knight = '1' WHERE (villages_from_id = ".$mach_pala2['villageid']." AND villages_to_id = ".$mach_pala2['villageid'].")");
		mysql_query("DELETE FROM recruit WHERE id = ".$mach_pala2['id']);
		}
	}
$pala_dep1 = mysql_query("SELECT * FROM pala_deploy");
while($pala_dep2 = @mysql_fetch_assoc($pala_dep1))
	{
	if($pala_dep2['finish'] <= time())
		{
		mysql_query("UPDATE unit_place SET unit_knight = '1' WHERE (villages_from_id = ".$pala_dep2['to']." AND villages_to_id = ".$pala_dep2['to'].")");
		mysql_query("UPDATE villages SET all_unit_knight = '1' WHERE id = ".$pala_dep2['to']);
		mysql_query("UPDATE villages SET all_unit_knight = '0' WHERE id = ".$pala_dep2['from']);
		mysql_query("DELETE FROM pala_deploy WHERE uid = ".$pala_dep2['uid']);
		}
	}
{/php}
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$village.name} ({$village.x}|{$village.y}) - {$lang->grab("game", "title")}</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1159978916" type="text/javascript"></script>
<script src="menu.js?1148466057" type="text/javascript"></script>
</head>
<body style="margin-top:6px;">
<div class="top_background"></div>
{if $user.dyn_menu==1}
    <div class="c-1">
    <table class="menu nowrap" align="center" width="{$user.window_width}">
	<tr id="menu_row">
    <center>
    <div class="c-11"><td><center><a class="c-1" href="game.php?village={$village.id}&amp;screen=overview_villages" accesskey="s">{$lang->grab("menu", "overview_v")}</a></div><br /><table class="c1" cellspacing="0" width="120"><tr><td><a href="game.php?village={$village.id}&amp;screen=overview_villages&amp;mode=combined">{$lang->grab("menu", "combined")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=overview_villages&amp;mode=prod">{$lang->grab("menu", "prod")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=overview_villages&amp;mode=units">{$lang->grab("menu", "units")}</a></td></tr><td><a href="game.php?village={$village.id}&amp;screen=overview_villages&amp;mode=commands">{$lang->grab("menu", "commands")}</a></td></tr><td><a href="game.php?village={$village.id}&amp;screen=overview_villages&amp;mode=incomings">{$lang->grab("menu", "incomings")}</a></td></tr></td></table>
    <div class="c-12"><td><center><a class="c-2" href="game.php?village={$village.id}&amp;screen=ally">{$lang->grab("menu", "tribe")}</a></div>{if $user.ally!=-1}<br /><table class="c2" cellspacing="0" width="120"><tr><td><a href="game.php?village={$village.id}&amp;screen=ally&amp;mode=overview">{$lang->grab("menu", "tribe_overview")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=ally&amp;mode=profile">{$lang->grab("menu", "profile")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=ally&amp;mode=members">{$lang->grab("menu", "members")}</a></td></tr>{if $user.ally_invite==1}<tr><td><a href="game.php?village={$village.id}&amp;screen=ally&amp;mode=invite">{$lang->grab("menu", "invite")}</a></td></tr>{/if}{if $user.ally_diplomacy==1}<tr><td><a href="game.php?village={$village.id}&screen=ally&mode=contracts">{$lang->grab("ally", "diplomacy")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=ally&amp;mode=properties">{$lang->grab("menu", "properties")}</a></td></tr><tr><td><a href="forum/forum.php">Forum</a></td></tr>{/if}</table>{/if}</td></center>
    <div class="c-13"><td><center><a class="c-3"href="game.php?village={$village.id}&amp;screen=report">{if $user.new_report==1}<img src="graphic/new_report.png" title="Neuer Bericht" alt="" />{/if} {$lang->grab("menu", "report")}</a><br /><table class="c3" cellspacing="0" width="120"><tr><td><a href="game.php?village={$village.id}&amp;screen=report&amp;mode=all">{$lang->grab("menu", "all")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=report&amp;mode=attack">{$lang->grab("menu", "attack")}</a></div></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=report&amp;mode=defense">{$lang->grab("menu", "defense")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=report&amp;mode=support">{$lang->grab("menu", "support")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=report&amp;mode=trade">{$lang->grab("menu", "trade")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=report&amp;mode=other">{$lang->grab("menu", "other")}</a></td></tr></table></td></center>
    <div class="c-14"><td><center><a class="c-4" href="game.php?village={$village.id}&amp;screen=mail">{if $user.new_mail==1}<img src="graphic/new_mail.png" title="Neue Nachricht" alt="" /> {/if} {$lang->grab("menu", "mail")}</a></div><br /><table class="c4" cellspacing="0" width="120"><tr><td><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=in">{$lang->grab("menu", "in")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=out">{$lang->grab("menu", "out")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=arch">{$lang->grab("menu", "arch")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=new">{$lang->grab("menu", "new")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=mail&amp;mode=block">{$lang->grab("menu", "block")}</a></td></tr></table></td></center>
    <div class="c-15"><td><center><a class="c-5" href="game.php?village={$village.id}&amp;screen=ranking">{$lang->grab("menu", "ranking")}</div></a> <a class="a1">({$user.rang}.|{$user.points|format_number} P)</a> <br /><table class="c5"  cellspacing="0" width="120"><tr><td><a  href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=ally">{$lang->grab("menu", "ranking_ally")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=player">{$lang->grab("menu", "ranking_player")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=ranking&amp;mode=kill_player">{$lang->grab("menu", "ranking_kill_player")}</a></td></tr></table></center>
    <div class="c-16"><td><center><a class="c-6" href="game.php?village={$village.id}&amp;screen=settings">{$lang->grab("menu", "settings")}</a><br /><table class="c7" cellspacing="0" width="120"><tr><td><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=profile">{$lang->grab("menu", "profile")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=settings">{$lang->grab("menu", "settings")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=vacation">{$lang->grab("menu", "vacation")}</a></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=logins">{$lang->grab("menu", "logins")}</a></div></td></tr><tr><td><a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=change_passwd">{$lang->grab("menu", "change_passwd")}</a></td></table></td></center>
    <div class="c-17"><td><center><a class="c-7" href="game.php?village={$village.id}&amp;screen=memo">{$lang->grab("menu", "memo")}</a></div></td></center>
    <div class="c-18"><td><center><a class="c-8" href="chat.php" target="_blank">Chat</a></td></div></center>
    <div class="c-19"><td><center><a class="c-9" href="game.php?village={$village.id}&amp;screen=&amp;action=logout&amp;h={$hkey}" target="_top">{$lang->grab("menu", "logout")}</a></div></td></center>
    </center>
    </tr>
    </table>
    </div>

	
	
	{if $user.show_toolbar==1}
        <br />
        <br />
        <br />
        <br />
		<div class="c-2">
		<table id="quickbar" class="menu nowrap" align="center">
		<tr>
			<td><a href="game.php?village={$village.id}&amp;screen=main" ><img src="graphic/buildings/main.png" alt="" />{$lang->grab("dyn_menu", "main")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=barracks" ><img src="graphic/buildings/barracks.png" alt="" />{$lang->grab("dyn_menu", "barracks")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=stable" ><img src="graphic/buildings/stable.png" alt="" />{$lang->grab("dyn_menu", "stable")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=garage" ><img src="graphic/buildings/garage.png" alt="" />{$lang->grab("dyn_menu", "garage")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=snob" ><img src="graphic/buildings/snob.png" alt="" />{$lang->grab("dyn_menu", "snob")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=smith" ><img src="graphic/buildings/smith.png" alt="" />{$lang->grab("dyn_menu", "smith")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=place" ><img src="graphic/buildings/place.png" alt="" />{$lang->grab("dyn_menu", "place")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=market" ><img src="graphic/buildings/market.png" alt="" />{$lang->grab("dyn_menu", "market")}</a></td>
		</tr>
		</table>
        </div>
	{/if}
	
	
	<hr width="{$user.window_width}" size="2" />
	
	<table align="center" width="{$user.window_width}" cellspacing="0" style="padding:0px;margin-bottom:4px">
	<tr>
	<td>
	

       <div class="c-3">
		<table class="menu nowrap" align="left">
		<tr id="menu_row2">

		<td><a href="game.php?village={$village.id}&amp;screen=map">{$lang->grab("menu", "map")}</a></td>
		<td class="no_hover">
		{if $user.villages>1}
			{if !empty($village_array.last)}
				<a href="{$village_array.last_link}" accesskey="a"><img src="graphic/links.png" alt="" /></a>
   {else}
				<img src="graphic/links.png" alt="" />
{/if}
			{if !empty($village_array.next)}
				<a href="{$village_array.next_link}" accesskey="d"><img src="graphic/rechts.png" alt="" /></a>
  	{else}
				<img src="graphic/rechts.png" alt="" />
	{/if}
		{/if}	
		</td>
		<td><a href="game.php?village={$village.id}&amp;screen=overview">{$village.name}</a> <a class="a2" href="game.php?village={$village.id}&amp;screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebÃ¤ude.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=map"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a class="a2" href="game.php?village={$village.id}&screen=place&x={$village.x}&y={$village.y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a><a class="a2"><b>({$village.x}|{$village.y}) K{$village.continent} </b></a></td>
			</tr>
		</table>
		</div>
	</td>
	<td align="right"><table cellspacing="0"><tr>

	<td><table class="box" cellspacing="0"><tr>
	<td><a href="game.php?village={$village.id}&amp;screen=wood"><img src="graphic/holz.png" title="Holz" alt="" /></a></td>
	<td><span id="wood" title="{$wood_per_hour}" {if $village.r_wood==$max_storage}class="warn"{/if}>{$village.r_wood}</span>&nbsp;</td>
	<td><a href="game.php?village={$village.id}&amp;screen=stone"><img src="graphic/lehm.png" title="Lehm" alt="" /></a></td>
	<td><span id="stone" title="{$stone_per_hour}" {if $village.r_stone==$max_storage}class="warn"{/if}>{$village.r_stone}</span>&nbsp;</td>
	<td><a href="game.php?village={$village.id}&amp;screen=iron"><img src="graphic/eisen.png" title="Eisen" alt="" /></a></td>
	<td><span id="iron" title="{$iron_per_hour}" {if $village.r_iron==$max_storage}class="warn"{/if}>{$village.r_iron}</span></td>
	<td style="border-left: dotted 1px;">
	&nbsp;<a href="game.php?village={$village.id}&amp;screen=storage"><img src="graphic/res.png" title="Speicherkapazität" alt="" /></a>
	</td><td id="storage">{$max_storage} </td>
	</tr></table></td>
	
	<td><table class="box" cellspacing="0"><tr>
	<td width="18" height="20" align="center"><a href="game.php?village={$village.id}&amp;screen=farm"><img src="graphic/face.png" title="Arbeiter" alt="" /></a></td>
	<td align="center">{$village.r_bh}/{$max_bh}</td>
	</tr></table></td>

	{if $user.attacks!=0}
		<td><table class="box" cellspacing="0"><tr>
		<td width="60" height="20" align="center"><a href="game.php?village={$village.id}&screen=overview_villages&mode=incomings"><img src="graphic/unit/att.png" alt="" /> ({$user.attacks})</a></td>
		</tr></table></td>
	{/if}
	
	</tr></table></td>
	
	</tr></table>
	
	<!--[if IE ]>
	<script type="text/javascript">initMenuList("menu_row");</script>
	<script type="text/javascript">initMenuList("menu_row2");</script>
	<![endif]-->

{else}
    <table align="center">
	<tr><td>

    <a href="game.php?village={$village.id}&amp;screen=&amp;action=logout&amp;h={$hkey}" target="_top">{$lang->grab("menu", "logout")}</a>
	- <a href="http://www.twlan.org/de/" target="_blank">{$lang->grab("menu", "forum")}</a>
	- <a href="help.php" target="_blank">Hilfe</a>
	- <a href="game.php?village={$village.id}&amp;screen=settings">{$lang->grab("menu", "settings")}</a>
    - <a href="game.php?village={$village.id}&amp;screen=ranking">{$lang->grab("menu", "ranking")}</a> ({$user.rang}.|{$user.points|format_number} P)
    -  <a href="game.php?village={$village.id}&amp;screen=ally">{$lang->grab("menu", "ally")}</a>
	- <a href="game.php?village={$village.id}&amp;screen=report">{if $user.new_report==1}<img src="graphic/new_report.png" title="Neuer Bericht" alt="" />{/if} {$lang->grab("menu", "report")}</a>
	- <a id="menu_mail" href="game.php?village={$village.id}&amp;screen=mail">{if $user.new_mail==1}<img src="graphic/new_mail.png" title="Neue Nachricht" alt="" /> {/if} {$lang->grab("menu", "mail")}</a>
	- <a href="game.php?village={$village.id}&amp;screen=memo">{$lang->grab("menu", "memo")}</a>
   	</td></tr></table>
	
	
	
	
	{if $user.show_toolbar==1}
		<br />
		<table id="quickbar" class="menu nowrap" align="center">
		<tr>
			<td><a href="game.php?village={$village.id}&amp;screen=main" ><img src="graphic/buildings/main.png" alt="" />{$lang->grab("menu", "main")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=barracks" ><img src="graphic/buildings/barracks.png" alt="" />{$lang->grab("menu", "barracks")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=stable" ><img src="graphic/buildings/stable.png" alt="" />{$lang->grab("menu", "stable")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=garage" ><img src="graphic/buildings/garage.png" alt="" />{$lang->grab("menu", "garage")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=snob" ><img src="graphic/buildings/snob.png" alt="" />{$lang->grab("menu", "snob")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=smith" ><img src="graphic/buildings/smith.png" alt="" />{$lang->grab("menu", "smith")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=place" ><img src="graphic/buildings/place.png" alt="" />{$lang->grab("menu", "place")}</a></td>
			<td><a href="game.php?village={$village.id}&amp;screen=market" ><img src="graphic/buildings/market.png" alt="" />{$lang->grab("menu", "market")}</a></td>
		</tr>
		</table>
	{/if}
	
	<hr width="{$user.window_width}" size="2" />
	
	<table align="center" width="{$user.window_width}" cellspacing="0" style="padding:0px;margin-bottom:4px">
	<tr>
	<td>
		{if $user.villages>1}
			{if !empty($village_array.last)}
				<a href="{$village_array.last_link}" accesskey="a"><img src="graphic/links.png" alt="" /></a> 
   {else}
				<img src="graphic/links.png" alt="" />
			{/if}
			{if !empty($village_array.next)}
				<a href="{$village_array.next_link}" accesskey="d"><img src="graphic/rechts.png" alt="" /></a> 
   {else}
				<img src="graphic/rechts.png" alt="" />
			{/if}
		{/if}
		<a href="game.php?village={$village.id}&amp;screen=overview_villages" accesskey="s">{$village.name}</a> <b>({$village.x}|{$village.y}) K{$village.continent}</b> - 
		<a href="game.php?village={$village.id}&amp;screen=map">{$lang->grab("menu", "map")}</a> -
		<a href="game.php?village={$village.id}&amp;screen=overview">{$lang->grab("menu", "overview")}</a>
		
	</td>
	
	<td align="right"><table cellspacing="0"><tr>
	<td><table class="box" cellspacing="0"><tr>
	<td><a href="game.php?village={$village.id}&amp;screen=wood"><img src="graphic/holz.png" title="Holz" alt="" /></a></td>
	<td><span id="wood" title="{$wood_per_hour}" {if $village.r_wood==$max_storage}class="warn"{/if}>{$village.r_wood}</span>&nbsp;</td>
	<td><a href="game.php?village={$village.id}&amp;screen=stone"><img src="graphic/lehm.png" title="Lehm" alt="" /></a></td>
	<td><span id="stone" title="{$stone_per_hour}" {if $village.r_stone==$max_storage}class="warn"{/if}>{$village.r_stone}</span>&nbsp;</td>
	<td><a href="game.php?village={$village.id}&amp;screen=iron"><img src="graphic/eisen.png" title="Eisen" alt="" /></a></td>
	<td><span id="iron" title="{$iron_per_hour}" {if $village.r_iron==$max_storage}class="warn"{/if}>{$village.r_iron}</span></td>
	<td style="border-left: dotted 1px;">
	&nbsp;<a href="game.php?village={$village.id}&amp;screen=storage"><img src="graphic/res.png" title="Speicherkapazität" alt="" /></a>
	</td><td id="storage">{$max_storage} </td>
	</tr></table></td>
	
	<td><table class="box" cellspacing="0"><tr>
	<td width="18" height="20" align="center"><a href="game.php?village={$village.id}&amp;screen=farm"><img src="graphic/face.png" title="Arbeiter" alt="" /></a></td>
	<td align="center">{$village.r_bh}/{$max_bh}</td>
	</tr></table></td>
	
	{if $user.attacks!=0}
		<td><table class="box" cellspacing="0"><tr>
		<td width="60" height="20" align="center"><img src="graphic/unit/att.png" alt="" /> ({$user.attacks})</td>
		</tr></table></td>
	{/if}
	
	</tr></table></td>
	
	</tr></table>
{/if}


{if $config.no_actions}
	<table class="main" width="{$user.window_width}" align="center">
	<tr>
	<td style="padding:2px;">
    {$lang->grab("menu", "no_actions")}
	</td>
	</tr>
	</table>
	<br />
{/if}

<table class="main" width="{$user.window_width}" align="center">
<tr>
<td style="padding:2px;">
{if in_array($screen,$allow_screens)}
	{include file="game_$screen.tpl"}
{/if}
{if $screen == 'statue'}
	{include_php file="statue.php"}
{/if}



<p align="right" style="font-size: 7pt; margin-top:0px; margin-bottom:0px">{$lang->grab("game", "generated")} {$load_msec}ms
Serverzeit: <span id="serverTime">{$servertime}</span></p>
</td>
</tr>
</table>

<script type="text/javascript">startTimer();</script>
<div id="footer">
<div id="footer_logo"> </div>
<div id="linkContainer" style="max-width: 830px; min-width: 250px;">
<div id="footer_left">
 <a href="/forum" target="_blank">Forum</a> - <a href="help.php" target="_blank">Hilfe</a> - <a href="game.php?village={$village.id}&amp;screen=support" >Support</a>
</div>
<div id="footer_right">
<a href="game.php?village={$village.id}&amp;screen=friends">Freunde</a>
</div>
</div>
</div>
</body>
</html>