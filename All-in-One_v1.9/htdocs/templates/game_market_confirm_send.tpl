<h2>{$lang->get("confirm_transport")}</h2>

<form action="game.php?village={$village.id}&amp;screen=market&amp;action=send&amp;h={$hkey}" method="post">

<table class="vis" width="350">
<tr><th colspan="2">{$lang->get("transport")}</th></tr>
<tr><td>{$lang->get("target")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_village&amp;id={$confirm.to_villageid}">{$confirm.to_villagename} ({$confirm.to_x}|{$confirm.to_y})</a></td></tr>
<tr><td>{$lang->get("player")}:</td><td><a href="game.php?village={$village.id}&amp;screen=info_player&amp;id={$confirm.to_userid}">{$confirm.to_username}</a></td></tr>
<tr><td width="150">Rohstoffe:</td>
<td width="200">{if $confirm.wood>0}<img src="graphic/holz.png" title="Holz" alt="" />{$confirm.wood} {/if}{if $confirm.stone>0}<img src="graphic/lehm.png" title="Lehm" alt="" />{$confirm.stone} {/if}{if $confirm.iron>0}<img src="graphic/eisen.png" title="Eisen" alt="" />{$confirm.iron} {/if}</td></tr>
<tr><td>{$lang->get("needed_traders")}:</td><td>{$confirm.dealers}</td></tr>
<tr><td>{$lang->get("duration")}:</td><td>{$confirm.dealer_running}</td></tr>
<tr><td>{$lang->get("arrival")}:</td><td>{$confirm.time_to}</td></tr>
<tr><td>{$lang->get("back")}:</td><td>{$confirm.time_back}</td></tr>
</table><br />

<input type="submit" value="&raquo; OK &laquo;" style="font-size:10pt" />

<input type="hidden" name="target_id" value="{$confirm.to_villageid}" />
<input type="hidden" name="wood" value="{$confirm.wood}" />
<input type="hidden" name="stone" value="{$confirm.stone}" />
<input type="hidden" name="iron" value="{$confirm.iron}" />

</form>