CREATE TABLE `slimbot` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `spieler` varchar(25) collate latin1_general_ci NOT NULL,
  `admin` varchar(25) collate latin1_general_ci NOT NULL,
  `aktu` int(10) NOT NULL,
  `einheiten` enum('ja','nein') collate latin1_general_ci NOT NULL,
  `angreifen` enum('ja','nein') collate latin1_general_ci NOT NULL default 'ja',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

INSERT INTO `slimbot` VALUES (1, 'BOT NAME', 'DEIN NAME', 3, 'ja', 'ja');