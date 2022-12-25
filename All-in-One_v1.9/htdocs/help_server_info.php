<?php include 'include/config.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hilfe</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1159978916" type="text/javascript"></script>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>

<body >
<table class="main" width="800" align="center"><tr><td>
<h2>Hilfe</h2>

<table width="100%"><tr><td valign="top" width="120">
<table class="vis">
			<tr>
			<td width="120"><a href="help.php?mode=intro">Erste Schritte</a></td>
		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=late_start">Später Beginn</a></td>
		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=buildings">Gebäude</a></td>

		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=units">Einheiten</a></td>
		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=fight">Kampfsystem</a></td>
		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=points">Punkte</a></td>

		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=map">Karte</a></td>
		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=reports">Berichte</a></td>
		</tr>	
				<tr>
			<td width="120"><a href="help.php?mode=banner">Stämme-Banner</a></td>

		</tr>	
				<tr>
			<td class="selected" width="120"><a href="help.php?mode=server_info">Serverinfo</a></td>
		</tr>
	</table>

</td><td valign="top" align="left">
                                          
	<h3>Serverinfo</h3>

<table width="80%" border="0" class="vis">
<tbody><tr>
<th colspan="2">Einstellungen</th>
</tr>

<tr>
<td width="50%">Spielgeschwindigkeit</td>
<td width="50%"><?php echo $config['speed']; echo($config['speed'] == '') ? "unknown" : "" ;?></td>
</tr>

<tr>
<td>Einheitengeschwindigkeit</td>
<td><?php echo $config['movement_speed']; echo($config['movement_speed'] == '') ? "unknown" : "" ; ?></td>
</tr>

<tr>
<td>Moral</td>
<td>
<?php
echo($config['moral_activ'] == '0') ? "inaktiv\n" : "" ;
echo($config['moral_activ'] == 1) ? "aktiv (nicht Zeitbasiert)\n" : "";
echo($config['moral_activ'] == '') ? "unknown" : "" ;
?>
</td>
</tr>

<tr>
<td>Grundverteidigung</td>
<td><?php echo $config['reason_defense']; echo($config['reason_defense'] == '') ? "unknown" : "" ; ?></td>
</tr>

<tr>                                              
<td>Abbruchzeit für Angriffe</td>
<td><?php if($config['cancel_movement'] == ''){ echo 'unknown';}else{
echo ''.$config['cancel_movement'].' Minute';
echo($config['cancel_movement'] == 1) ? "\n" : "n\n" ; }?></td>
</tr>

<tr>
<td>Gewschwindigkeit des H&auml;ndlers</td>
<td><?php if($config['dealer_time'] == ''){ echo 'unknown';}else{
echo ''.$config['dealer_time'].' Minute';
echo($config['dealer_time'] == 1) ? "\n" : "n\n" ;
echo 'pro Feld'; } ?></td>
</tr>
                                                              
<tr>
<td>Abbruchzeit für Händler</td>
<td><?php if($config['cancel_dealers'] == ''){ echo 'unknown';}else{
echo ''.$config['cancel_dealers'].' Minute';
echo($config['cancel_dealers'] == 1) ? "\n" : "n\n" ;
echo 'pro Feld'; } ?></td>
</tr>


<tr>
<td>Angriffsschutz für Neueinsteiger</td>
<td><?php if($config['noob_protection'] == ''){ echo 'unknown';}else{
echo($config['noob_protection'] != -1 and $config['noob_protection'] != 0) ? ''.$config['noob_protection'].' Minute' : "" ;
echo($config['noob_protection'] > 1) ? 'n' : "" ;
echo($config['noob_protection'] == -1 || $config['noob_protection'] == 0) ? "inaktiv" : "" ; }?>
</td>
</tr>

<tr>
<td>Bauernhofpl&auml;tze</td>
<td><?php if($config['bh_style'] == ''){ echo 'unknown';}else{
echo($config['bh_style'] == 2) ? 'Wenn der Bauernhof bist Stufe 30 ausgebaut ist, so geht er bis 22782 Pl&auml;tze (S1)' : "" ;
echo($config['bh_style'] == 1) ? 'Wenn der Bauernhof bist Stufe 30 ausgebaut ist, so geht er bis 24000 Pl&auml;tze (SDS)' : "" ; } ?>
</td>
</tr>



</tbody></table>
<table width="80%" border="0" class="vis">
<tbody><tr>
<th colspan="2">Adelsgeschlecht</th>
</tr>

<tr>
<td width="50%">AG Style</td>
<td width="50%"><?php
if($config['ag_style'] == ''){ echo 'unknown';}else{
echo($config['ag_style'] == 0) ? "pro Dorf k&ouml;nnen so viele AGs gebaut werden, so hoch wie der Adelshof ist (S1)" : "";
echo($config['ag_style'] == 1) ? "pro Dorf k&ouml;nnen so viele AGs gebaut werden, so hoch wie der Adelshof ist (S1)" : "";
echo($config['ag_style'] == 2) ? "Goldm&uuml;nzen" : ""; }?></td>
</tr>

<tr>
<td>Zustimmungsverlust durch AG maximal</td>
<td><?php if($config['agreement_max'] == ''){ echo 'unknown';}else{ echo $config['agreement_max']; }  ?></td>
</tr>

<tr>
<td>Zustimmungsverlust durch AG minimal</td>
<td><?php if($config['agreement_min'] == ''){ echo 'unknown';}else{ echo $config['agreement_min']; }  ?></td>
</tr>

<tr>
<td>Anstieg Zustimmung pro Sekunde</td>
<td><?php if($config['agreement_per_hour'] == '' and $config['speed'] == ''){ echo 'unknown';}else{
$agreement_per_second = (1/(3600/$config['agreement_per_hour'])) * $config['speed'];
echo $agreement_per_second; } ?></td>
</tr>

<tr>
<td>Anstieg Zustimmung pro Stunde</td>
<td><?php if($agreement_per_second == ''){ echo 'unknown';}else{
$agreement_per_hour = $agreement_per_second * 3600; echo $agreement_per_hour;} ?></td>
</tr>

</tbody></table>
<table width="80%" border="0" class="vis">
<tbody><tr>
<th colspan="2">St&auml;mme</th>
</tr>
                                                      
<tr>
<td width="50%">Erstellen von St&auml;mmen erlaubt</td>
<td width="50%"><?php if($config['create_ally'] == ''){ echo 'unknown';}else{
echo($config['create_ally'] == true) ? "aktiv" : "";
echo($config['create_ally'] == false) ? "inaktiv" : "";}?></td>
</tr>

<tr>
<td>Verlassen, Einladen und Entlassen aus St&auml;mmen erlaubt</td>
<td><?php if($config['leave_ally'] == ''){ echo 'unknown';}else{
echo($config['leave_ally'] == true) ? "aktiv" : "";
echo($config['leave_ally'] == false) ? "inaktiv" : "";}?></td>
</tr>
                             
<tr>
<td>K&ouml;nnen St&auml;mme aufgel&ouml;st werden</td>
<td><?php if($config['close_ally'] == ''){ echo 'unknown';}else{
echo($config['close_ally'] == true) ? "aktiv" : "";
echo($config['close_ally'] == false) ? "inaktiv" : "";}?></td>
</tr>
        
<tr>
<td>Spieler werden Automatisch St&auml;mmen zugeordnet</td>
<td><?php if($config['auto_ally'] != false  and $config['auto_ally'] != true){ echo 'unknown';}else{
echo($config['auto_ally'] == true) ? "aktiv" : "";
echo($config['auto_ally'] == false) ? "inaktiv" : "";} ?></td>
</tr>

</tbody></table>

<table width="80%" border="0" class="vis">
<tbody><tr>
<th colspan="2">Konfiguration</th>
</tr>

<tr>
<td width="50%">Nach wie vielen D&ouml;rfern wird ein Barbarendorf erstellt</td>
<td width="50%"><?php if($config['count_create_left'] == ''){ echo 'unknown';}else{
echo ($config['count_create_left'] > 1) ? 'nach '.$config['count_create_left'].' D&ouml;rfer' : "";
echo ($config['count_create_left'] == 1) ? 'nach einem Dorf' : "";
echo ($config['count_create_left'] == -1) ? 'inaktiv' : "";
}?></td>
</tr>

<tr>
<td>Kartengrafiken</td>
<td><?php if($config['map_design'] == ''){ echo 'unknown';}else{
echo ($config['map_design'] == 0) ? "alte Kartengrafik" : "";
echo($config['map_design'] == 1) ? "neue Kartengrafik" : ""; }?></td>
</tr>

<tr>       
<td>Himmelsrichtungswahl</td>
<td><?php if($config['village_choose_direction'] == ''){ echo 'unknown';}else{
echo ($config['village_choose_direction'] == true) ? "aktiv" : "";
echo($config['village_choose_direction'] == false) ? "inaktiv" : ""; }?></td>
</tr>

<tr>
<td>Spielgeschehen gestoppt/ Keine Aktionen m&ouml;glich</td>
<td><?php if($config['no_actions'] != true and $config['no_actions'] != false){ echo 'unknown';}else{
echo ($config['no_actions'] == true) ? "aktiv" : "";
echo($config['no_actions'] == false) ? "inaktiv" : ""; }?></td>
</tr>

<tr>
<td>Wird ein Angriff als Besuch angesehen</td>
<td><?php if($config['attack_visit'] == ''){ echo 'unknown';}else{
echo ($config['attack_visit'] == true) ? "aktiv" : "";
echo($config['attack_visit'] == false) ? "inaktiv" : ""; }?></td>
</tr>

                              
</tbody></table>
<br />
</td>

</td></tr></table>
</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</body>
</html>