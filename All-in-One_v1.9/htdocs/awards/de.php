<?php
$achieved_awards = array('Erreichte Awards','Noch nicht erreichte Awards');
$material = array('Holz','Bronze','Silber','Gold');
$level = array('Stufe 1','Stufe 2','Stufe 3','Stufe 4');
// Award: Punktekönig //
$score_champion_name = 'Punktek&ouml;nig';
$score_champion_title = array('Rekord: ',' Punkte.');
$score_champion_already = array('Du hast bereits ',' Punkte erreicht!');
$score_champion_next = array('N&auml;chster Level: ','Erreiche ',' Punkte!');
//
// Award: Räuber //
$robber_name = 'R&auml;uber';
$robber_title = array('Bis jetzt hast du ',' Rohstoffe erbeutet.');
$robber_already = array('Du hast bereits ',' Rohstoffe erbeutet!');
$robber_next = array('N&auml;chster Level: ','Erbeute ',' Rohstoffe!');
//
// Award: Plünderer //
$plunderer_name = 'Pl&uuml;nderer';
$plunderer_title = array('Bis jetzt hast du ',' mal fremde D&ouml;rfer gepl&uuml;ndert.');
$plunderer_already = array('Du hast bereits ',' mal fremde Dörfer geplündert!');
$plunderer_next = array('N&auml;chster Level: ','Pl&uuml;ndere ',' mal fremde D&ouml;rfer!');
//
// Award: Topscorer //
$topscorer_name = 'Topscorer';
$topscorer_title = array('Rekord: Rang ','');
$topscorer_already = array('Du hast es in die Top ',' dieser Welt geschafft! ');
$topscorer_next = array('N&auml;chster Level: ','Schaffe es in die Top ',' dieser Welt!');
//
// Award: Vandale //
$demolisher_name = 'Vandale';
$demolisher_title = array('Bis jetzt hast du ',' Geb&auml;udestufen zerst&ouml;rt.');
$demolisher_already = array('Du hast bereits ',' Geb&auml;udestufen zerst&ouml;rt! ');
$demolisher_next = array('N&auml;chster Level: ','Zerst&ouml;re ',' Geb&auml;udestufen!');
//
// Award: Pechvogel //
$unlucky_fellow_name = 'Pechvogel';
$unlucky_fellow = array('Die Zustimmung eines Dorfes muss durch deinen Angriff auf +1 sinken!','Die Zustimmung eines Dorfes sank durch einen deiner Angriffe auf +1!');
//
// Award: Glückspilz // 
$lucky_fellow_name = 'Gl&uuml;ckspilz';
$lucky_fellow = array('Die Zustimmung eines Dorfes muss 0 sein, nachdem du es geadelt hast!','Die Zustimmung eines Dorfes war 0, nachdem du es geadelt hast! ');
//
// Award: Krösus //
$coins_name = 'Kr&ouml;sus';
$coins_title = array('Bis jetzt hast du ',' Goldm&uuml;nzen gepr&auml;gt.');
$coins_already = array('Du hast bereits ',' Goldm&uuml;nzen gepr&auml;gt! ');
$coins_next = array('N&auml;chster Level: ','Pr&auml;ge ',' Goldm&uuml;nzen!');
//
// Award: Anführer //
$leader_name = 'Anf&uuml;hrer';
$leader_title = array('Bis jetzt hast du ',' feindliche Einheiten besiegt.');
$leader_already = array('Du hast bereits ',' feindliche Einheiten besiegt!');
$leader_next = array('N&auml;chster Level: ','Besiege ',' feindliche Einheiten!');
//
// Award: Eroberung //
$conquest_name = 'Eroberung';
$conquest_title = array('Bis jetzt hast du ',' D&ouml;rfer geadelt.');
$conquest_already = array('Du hast bereits ',' D&ouml;rfer geadelt!');
$conquest_next = array('N&auml;chster Level: ','Adel ',' D&ouml;rfer!');
//
// Award: Kaufmann //
$market_guru_name = 'Kaufmann';
$market_guru_title = array('Bis jetzt hast du ',' mal auf dem Marktplatz gehandelt.');
$market_guru_already = array('Du hast bereits ',' mal auf dem Marktplatz gehandelt!');
$market_guru_next = array('N&auml;chster Level: ','Handle ',' mal auf dem Marktplatz!');
//
// Award: Spionageabwehr //
$scout_hunter_name = 'Spionageabwehr';
$scout_hunter_title = array('Bis jetzt hast du ',' Sp&auml;hangriffe abgewehrt.');
$scout_hunter_already = array('Du hast bereits ',' Sp&auml;hangriffe abgewehrt! ');
$scout_hunter_next = array('N&auml;chster Level: ','Wehre ',' Sp&auml;hangriffe ab!');
//

//// Rangliste ////
$table_names = array('Rang','Name','Punkte','Awards');

//// Admin Panel ////
$admin_reset = 'Wirklich den Reset ausführen ?';
$admin_reset_status = array('Der Reset war erfolgreich','Der Reset war nicht erfolgreich!');
$admin_headline = 'Awards';
$admin_text = '<h5>Awards (erstellen und resetten)</h5>Hier kannst du die MySQL-Tabelle "awards" resetten bzw. beim ersten mal wird diese erstellt.<br/>
Es ist sehr wichtig, dass die aktuelle Runde zurückgesetzt wird, ansonsten funktionieren die Awards nicht richtig!<br/><br/>
<b>Achtung:</b> Nur auf den Reset-Button klicken, wenn du die Tabelle erstellst oder du eine neue Runde starten willst, ansonsten gehen einige Fortschritte bei den Awards verloren!!';
$admin_version = 'Aktuelle Version: 1.5';
?>