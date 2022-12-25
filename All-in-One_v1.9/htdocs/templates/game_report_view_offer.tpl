<table width="100%">
<tr><th width="60">{$lang->grab("report_view_offer", "seller")}:</th><th><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$report.from_user}">{$report.from_username}</a></th></tr>
<tr><td>{$lang->grab("report_view_offer", "village")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$report.from_village}">{$report.from_villagename} ({$report.from_x}|{$report.from_y})</a> <a href="game.php?village={$report.from_village}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$report.from_village}&screen=map&x={$report.from_x}&y={$report.from_y}"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$report.from_x}&y={$report.from_y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </th></tr>

<tr><th width="60">{$lang->grab("report_view_offer", "consumer")}:</th><th><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$report.to_user}">{$report.to_username}</a></th></tr>
<tr><td>{$lang->grab("report_view_offer", "village")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$report.to_village}">{$report.to_villagename} ({$report.to_x}|{$report.to_y})</a> <a href="game.php?village={$report.to_village}&screen=overview"><img border="0" style="border:0px" src="./graphic/icons/hauptgebäude.png" width="15" height="15"></a> <a href="game.php?village={$report.to_village}&screen=map&x={$report.to_x}&y={$report.from_y}"><img border="0" style="border:0px" src="./graphic/icons/zentrieren.png" width="15" height="15"></a> <a href="game.php?village={$village.id}&screen=place&x={$report.to_x}&y={$report.to_y}"><img src="./graphic/icons/angriff.png" border="0" style="border:0px" width="15" height="15"></a> </th></tr>
</table><br />

<table style="border: 1px solid #DED3B9">
<tr><td>{$lang->grab("report_view_offer", "sold")}:</td><td>{if $report.sell_ress=='wood'}<img src="graphic/holz.png" title="Holz" alt="" />{/if}{if $report.sell_ress=='stone'}<img src="graphic/lehm.png" title="Lehm" alt="" />{/if}{if $report.sell_ress=='iron'}<img src="graphic/eisen.png" title="Eisen" alt="" />{/if}{$report.sell}</td>
<tr><td>{$lang->grab("report_view_offer", "bought")}:</td><td>{if $report.buy_ress=='wood'}<img src="graphic/holz.png" title="Holz" alt="" />{/if}{if $report.buy_ress=='stone'}<img src="graphic/lehm.png" title="Lehm" alt="" />{/if}{if $report.buy_ress=='iron'}<img src="graphic/eisen.png" title="Eisen" alt="" />{/if}{$report.buy}</td>
</table><br />

{$lang->grab("report_view_offer", "info")}