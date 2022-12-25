<?php
/**
 * Bot by Manuel Mannhardt aka SlimShady95
 * EMail: manuel_mannhardt@web.de
 * ICQ: 479-117-593
 */

// Spieler, die der Bot steuern soll
// Wenn du statt einem Benutzernamen einfach left_villages
// reinschreibst, baut der Bot Barbarendörfer aus
$Player = array();
$Player[] = 'Boti';
$Player[] = 'left_villages';

// Dorfname des Bots
// Platzhalter:
// {N}    = Name des Bots
// {NR}   = Zähler
// {NR_0} = Zähler, mit vorranstehender 0
// {x}    = x-Koordinate 
// {y}    = y-Koordinate
$Vill_Name = '{NR_0} ~ {x}|{y}';

// Soll der Bot Einheiten bauen?
$Build_Units = true;

// Soll der Bot angreifen?
$Farm_Conf = true;

// Was soll der Bot angreifen:
// - 1: Barbarendörfer
// - 2: Spieler (alle)
// - 3: Beides
$Farm_Villages = 1;

// Maximale Einheiten
$Max_Units = array();
$Max_Units['spear'] = 5000;
$Max_Units['sword'] = 5000;
$Max_Units['axe']   = 2500;
$Max_Units['light'] = 1000;

// Berichte gleich löschen
$Delete_Report = true;
?>