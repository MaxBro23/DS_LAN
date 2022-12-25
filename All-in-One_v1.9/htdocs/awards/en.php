<?php
$achieved_awards = array('Achieved awards','Awards that have not been achieved yet');
$material = array('Wood','Bronze','Silver','Gold');
$level = array('Level 1','Level 2','Level 3','Level 4');
// Award: Score champion //
$score_champion_name = 'Score champion';
$score_champion_title = array('Record: ',' points.');
$score_champion_already = array('You have already reached ',' points!');
$score_champion_next = array('Next level: ','Reach ',' points!');
//
// Award: Robber //
$robber_name = 'Robber';
$robber_title = array('So far you have looted ',' resources.');
$robber_already = array('You have already looted ',' resources!');
$robber_next = array('Next level: ','Loot ',' resources!');
//
// Award: Plunderer //
$plunderer_name = 'Plunderer';
$plunderer_title = array('You have plundered other villages ',' times so far.');
$plunderer_already = array('You have already plundered other villages ',' times!');
$plunderer_next = array('Next level: ','Plunder other villages ',' times!');
//
// Award: Top scorer //
$topscorer_name = 'Top scorer';
$topscorer_title = array('Record: Rank ','');
$topscorer_already = array('You have made it into the top ',' in this world!');
$topscorer_next = array('Next level: ','Make it into the top ',' in this world!');
//
// Award: Demolisher //
$demolisher_name = 'Demolisher';
$demolisher_title = array('You have destroyed ',' building levels so far.');
$demolisher_already = array('You have destroyed ',' building levels so far!');
$demolisher_next = array('Next level: ','Destroy ',' building levels!');
//
// Award: Unlucky fellow //
$unlucky_fellow_name = 'Unlucky fellow';
$unlucky_fellow = array('The loyalty of a village has to drop to +1 due to your attack!','The loyalty of a village dropped to +1 due to one of your attacks!');
//
// Award: Lucky fellow // 
$lucky_fellow_name = 'Lucky fellow';
$lucky_fellow = array('The loyalty of a village has to be 0 after you conquered it!','The loyalty of a village was 0 after you conquered it!');
//
// Award: Wealth comes in gold //
$coins_name = 'Wealth comes in gold';
$coins_title = array('You have minted ',' gold coins so far.');
$coins_already = array('You minted ',' gold coins!');
$coins_next = array('Next level: ','Mint ',' gold coins!');
//
// Award: Leader //
$leader_name = 'Leader';
$leader_title = array('You have defeated ',' enemy units so far.');
$leader_already = array('You have already defeated ',' enemy units!');
$leader_next = array('Next level: ','Defeat ',' enemy units!');
//
// Award: Conquest //
$conquest_name = 'Conquest';
$conquest_title = array('You have conquered ',' villages so far.');
$conquest_already = array('You already conquered ',' villages!');
$conquest_next = array('Next level: ','Conquer ',' villages!');
//
// Award: Market guru //
$market_guru_name = 'Market guru';
$market_guru_title = array('You traded resources using your market ',' times so far.');
$market_guru_already = array('You traded resources using your market ',' times so far!');
$market_guru_next = array('Next level: ','Trade using your market ',' times!');
//
// Award: Scout Hunter //
$scout_hunter_name = 'Scout Hunter';
$scout_hunter_title = array('You have defended yourself against ',' scout attacks so far.');
$scout_hunter_already = array('You have defended yourself against ',' scout attacks!');
$scout_hunter_next = array('Next level: ','Fend off ',' scout attacks!');
//

//// Ranking ////
$table_names = array('Rank','Name','Points','Awards');

//// Admin Panel ////
$admin_reset = 'Really reset the MySQL-table ?';
$admin_reset_status = array('The Reset was successful','The Reset wasn´t successful!');
$admin_headline = 'Awards';
$admin_text = '<h5>Awards (create and reset)</h5>Here you can reset the MySQL-table "awards" resp. at first time the table "awards" will be created!<br/>
It is very important to reset/create the MySQL-table and to reset the dslan-round, otherwise the Awards doesn´t work right!<br/><br/>
<b>Caution:</b> Only click the Reset-button if you create the table at first time, or you want to reset the dslan-round!!';
$admin_version = 'Current version: 1.5';
?>