{$action}</br>
{if $num_players == 0}
{$noplayers}</br>
{else}
<ul>
{foreach from=$players item=item key=id}
<li>{$item}&nbsp;<a href="javascript:load_page('index.php?page=players&delete={$item}')"><img src="img/x.png" height="25px" widht="25px" border="0" alt="{$delete}"></img></a></li>
{/foreach}
</ul>
{/if}
<input type="text" name="player" id="player"><input type="submit" value="{$addplayer}" onclick="add_player(document.getElementById('player').value)">

