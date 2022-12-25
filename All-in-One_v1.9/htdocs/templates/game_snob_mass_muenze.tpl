{php}
	$snob_limit = $this->_tpl_vars['snobLimit'];
{/php}
{literal}
	<script type="text/javascript">
function max_gold() {
var zahl = 0;
while(document.getElementsByName("anzahl[]")[zahl])
{
document.getElementsByName("anzahl[]")[zahl].value = document.getElementsByName("max_gold[]")[zahl].value;
zahl++;
}
}
</script>
{/literal}
<a href="game.php?village={$vill_id}&screen=snob">&raquo; Zurück</a><br><br>
<table class="vis" cellpadding="1" cellspacing="2" border="0">
	<tr align="left">
		<th>Dorf</th>
		<th>Rohstoffe</th>
		<th>Anzahl wählen</th>
	</tr>
	<form action="game.php?village={$vill_id}&screen=snob&mode=mass_muenze&do=praeg" method="post">
	{foreach from=$p_villages item=village}
	<tr align="left">
		<td>
		<a href="game.php?village={$village.id}&screen=overview">{$village.name} ({$village.x}|{$village.y}) K{$village.continent}</a>
		</td>
		<td>
		<img src="./graphic/holz.png" alt="">{php}echo format_number($this->_tpl_vars['village']['r_wood']);{/php} <img src="./graphic/lehm.png" alt="">{php}echo format_number($this->_tpl_vars['village']['r_stone']);{/php} <img src="./graphic/eisen.png" alt="">{php}echo format_number($this->_tpl_vars['village']['r_iron']);{/php}
		</td>
		<td>
		<input type="hidden" value="{$vill_id}" name="vill_id[]">
		<input type="hidden" value="{php}echo $snob_limit;{/php}" name="snoblimit[]">
		<select name="anzahl[]" width="100%">
		<option value="0">- keine -</option>
		{php}
		$count = 1;
		$anzahl = false;
		
		
		while(true)
			{
			$wood = $this->_tpl_vars['holz'] * $count;
			$stone = $this->_tpl_vars['lehm'] * $count;
			$iron = $this->_tpl_vars['eisen'] * $count;
			
			if($this->_tpl_vars['village']['r_wood'] > $wood && $this->_tpl_vars['village']['r_stone'] > $stone && $this->_tpl_vars['village']['r_iron'] > $iron)
				{
				{/php} 
				<option value="{php}echo $count;{/php}">{php}echo $count;{/php}x ({php}echo $wood;{/php}, {php}echo $stone;{/php}, {php}echo $iron;{/php})</option>
				{php}
				}
				else
				{
				 break;
				}
			$count++;
			}
		{/php}
		</select>
		<input type="hidden" value="{php}echo $count - 1;{/php}" name="max_gold[]">
		</td>
	</tr>
	{/foreach}
	<tr>
	<td>
	<input type="submit" value="Goldmünzen prägen &raquo;">
	</td>
	<td>
	</td>
	<td>
	<a href="javascript:max_gold()">Maximal auswählen</a>
	</td>
	</tr>
</table>
	{$err}
	{$refresh}
