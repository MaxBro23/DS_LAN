<?php
/**
 * DS-Lan Adminpannel Extension :: Play Pause v1.0
 * 
 * @author Alexander Thiemann
 * @version 1.0
 * @copyright 2007 by Alexander Thiemann
 */

/**
 * Config
 */
$path_to_general_config = "../include/config.php";
$cfg = file_get_contents($path_to_general_config);

/**
 * Programm
 */
if(!isset($config["no_actions"])) {
	include $path_to_general_config;
}

// do action
switch(@$_GET["at"]) {
	case "play":
		$cfg = str_replace("\$config['no_actions'] = true;", "\$config['no_actions'] = false;", $cfg);
		
		// write to file
		$fp = @fopen($path_to_general_config, "w+");
		if(!$fp) {
			die("$path_to_general_config couldn't be opened");
		}
		
		if(!@fwrite($fp, $cfg)) {
			die("$path_to_general_config couldn't be written");
		}
		
		@fclose($fp);
		
		// reload cfg
		include $path_to_general_config;
		break;
		
	case "pause":
		$cfg = str_replace("\$config['no_actions'] = false;", "\$config['no_actions'] = true;", $cfg);
		
		// write to file
		$fp = @fopen($path_to_general_config, "w+");
		if(!$fp) {
			die("$path_to_general_config couldn't be opened");
		}
		
		if(!@fwrite($fp, $cfg)) {
			die("$path_to_general_config couldn't be written");
		}
		
		@fclose($fp);
		
		// reload cfg
		include $path_to_general_config;
		break;
}

// assign current state to template
if($config["no_actions"] == true) {
	$tpl->assign("pp_type", "play");
}
else {
	$tpl->assign("pp_type", "pause");
}
?>