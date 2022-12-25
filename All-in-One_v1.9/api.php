<?php
/**
 * DSLan API
 *
 * @author Alexander Thiemann <mail@agrafix.net>
 */

include "include/config.php";

if($_GET["password"] != $config['master_pw']) {
	die("wrong_password");
}

//$link = mysql_connect($config['db_host'], $config['db_user'], $config['db_pw']);
//mysql_select_db($config["db_name"], $link);

class dslan_api  {
	/**
	 * Save config contents
	 *
	 * @var string
	 */
	var $cfg_contents = "";
	
	/**
	 * Load config contents
	 *
	 */
	function load_cfg_contents() {
		$this->cfg_contents = file_get_contents("include/config.php");
	}
	
	/**
	 * Change config
	 *
	 * @param string $key
	 * @param string $val
	 * @param string $type
	 */
	function change_config($key, $val, $type="standart") {		
		if($type == "text") {
			$val = "'$val'";
		}
			
		if($type == "numeric" AND !is_numeric($val)) {
			die("not_num_$key");
		}
			
		$this->cfg_contents = preg_replace("#\['".$key."'\] = (.*)#i", "['".$key."'] = ".$val.";", $this->cfg_contents);
	}
	
	/**
	 * Execute actions
	 *
	 */
	function commit() {
		if(empty($this->cfg_contents)) {
			die("cfg_contents_empty");
		}
		$fp = @fopen("include/config.php", "w+");
		@fwrite($fp, $this->cfg_contents);
		@fclose($fp);
		
		include "include/config.php";
		$this->load_cfg_contents();
	}
}

$api = new dslan_api;
$api->load_cfg_contents();

switch(@$_GET["in"]) {
	case "get_cfg":
		if(isset($config[$_GET["key"]])) {
			if(is_bool($config[$_GET["key"]])) {
				if($config[$_GET["key"]] === true) {
					echo "true";
				}
				else {
					echo "false";
				}
			}
			else {
				echo $config[$_GET["key"]];
			}
		}
		else {
			echo "key_doesnt_exist";
		}
		break;
		
	case "set_cfg":
		if(isset($config[$_GET["key"]])) {
			$api->change_config($_GET["key"], $_GET["val"], $_GET["type"]);
			$api->commit();
			echo "ok";
		}
		else {
			echo "key_doesnt_exist";
		}
		break;
		break;
	
	default:
		echo "function_not_defined";
		break;
}
?>