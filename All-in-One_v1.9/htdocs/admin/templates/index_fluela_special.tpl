<h2>Fl&uuml;chtlingslager Spezial</h2>

<a href="index.php?screen=fluela_special" />Fl&uuml;chtlingslager erstellen</a> - <a href="index.php?screen=fluela_special&action=editmes" />Fl&uuml;chtlingslager bearbeiten</a> - <a href="index.php?screen=fluela_special&action=version" />Checke Version</a>
<br /><br />
{if !empty($error)}
	<font class="error">{$error}</font><br /><br />
{/if}
{if !empty($new_version)}
	{$new_version}<br /><br />
{else}
{if $aktion == "create"}
{if $success}
	Fl&uuml;chtlingslager wurden erfolgreich erstellt/bearbeitet!
{else}
	<form method="POST" action="index.php?screen=fluela_special&action=creater" name="dorf" onSubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th colspan="2">Fl&uuml;chtlingslager erstellen</th>
			</tr>
			<tr>
				<td width="350">Wie viele Fl&uuml;chtlingslager sollen erstellt werden?<br />(maximal 250)</td>
				<td><input type="text" name="num" value="0"></td>
			</tr>
			<tr><td>
			<table class="vis">
				<tr>
				<td>
				<table class="vis">
					<tr>
					<th>Geb&auml;ude</th><th>Stufe</th>
					</tr>
					{foreach from=$buildings item=arr key=dbname}
						<tr>
							<td><img src="../graphic/buildings/{$dbname}.png"> {$arr.name}:</td>
							<td><input type="text" size="4" name="{$dbname}" value="{$arr.std_lvl}"></td>
						</tr>
					{/foreach}
				</table>
			</table>
			</td><td valign="top"><table class="vis" valign="top">
		<tr>
		<th>Einheit</th><th>Anzahl</th>
		</tr>
		{foreach from=$units item=arr key=dbname}
			<tr>
				<td><img src="../graphic/unit/{$dbname}.png"> {$arr.name}:</td>
				<td><input type="text" size="5" name="{$dbname}" value="{$arr.std_einheiten}"></td>
			</tr>
		{/foreach}</table>
		</td></tr>
		<tr>
		<td colspan="2"><b>Sonstige Optionen:</b> <input type="checkbox" name="barbar" id="aX_barbar" value="yes" onChange="barbarendorf()"/><label for="aX_barbar">Barbarendorf</label></td>
		</tr>
			<tr>
				<td colspan="2"><input type="hidden" name="welche_akt" value="Erstellen" /><input type="submit" name="submit" value="Erstellen" onload="this.disabled=false;"> Der Vorgang <u>kann</u> mehrere Sekunden dauern!</td>
			</tr>

		</table>
	</form>
	<script type="text/javascript" src="templates/fluela_special.js"></script>
{/if}
{elseif $edit_output != ""}
{$edit_output}
{elseif $aktion == "edit"}
<form method="POST" action="index.php?screen=fluela_special&action=creater" onSubmit="this.submit.disabled=true;">
		<table class="vis">
			<tr>
				<th colspan="2">Fl&uuml;chtlingslager #{$id} bearbeiten</th>
			</tr>
			<tr>
				<td colspan="2"><b>ID:</b> #{$id}<br /><b>Koordinaten:</b> {$xy}<br /><b>Punkte:</b> {$points}</td>
			</tr>
						<tr><td>
			<table class="vis">
				<tr>
				<td>
				<table class="vis">
					<tr>
					<th>Geb&auml;ude</th><th>Stufe</th>
					</tr>
					{foreach from=$buildings item=arr key=dbname}
						<tr>
							<td><img src="../graphic/buildings/{$dbname}.png"> {$arr.name}:</td>
							<td><input type="text" size="4" name="{$dbname}" value="{$arr.std_lvl}"></td>
						</tr>
					{/foreach}
				</table>
			</table>
			</td><td valign="top"><table class="vis" valign="top">
		<tr>
		<th>Einheit</th><th>Anzahl</th>
		</tr>
		{foreach from=$units item=arr key=dbname}
			<tr>
				<td><img src="../graphic/unit/{$dbname}.png"> {$arr.name}:</td>
				<td><input type="text" size="5" name="{$dbname}" value="{$arr.std_einheiten}"></td>
			</tr>
		{/foreach}</table>
		</td></tr>
		<tr>
		<td colspan="2"><b>Sonstige Optionen:</b> <input type="checkbox" name="barbar" id="aX_barbar" value="yes" onChange="barbarendorf()"/><label for="aX_barbar">Barbarendorf</label></td>
		</tr>
			<tr>
				<td colspan="2"><input type="hidden" name="vid" value="{$id}" /><input type="hidden" name="welche_akt" value="Bearbeiten" /><input type="submit" name="submit" value="Bearbeiten" onload="this.disabled=false;"></td>
			</tr>

		</table>
	</form>
	<script type="text/javascript" src="templates/fluela_special.js"></script>
	<script type="text/javascript">{$dowhattodo}</script>
{/if}
{/if}