<!-- 
This ds-lan extension was written by Alexander Thiemann <mail@agrafix.net>
-->
<h2>Spiel pausieren/weiterlaufen lassen</h2>
{if $pp_type eq "play"}
	<h3>Das Spiel ist momentan pausiert.</h3>
	<a href="index.php?screen=play_pause&amp;at=play">{html_image file="at_images/player_play.png"}</a>&nbsp;
	{html_image file="at_images/player_pause_inactive.png"}
{else}
	<h3>Das Spiel l&auml;uft momentan.</h3>
	{html_image file="at_images/player_play_inactive.png"}&nbsp;
	<a href="index.php?screen=play_pause&amp;at=pause">{html_image file="at_images/player_pause.png"}</a>
{/if}