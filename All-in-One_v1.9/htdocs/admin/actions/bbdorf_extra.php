<?php
include('../include/config.php');
include('../include/configs/farm_limits.php');

class bh_neuberechnen {
    var $db;
    var $doerfer;
    var $doerfer_anzahl;
    var $units;
    var $gebaeude; 
    var $bh = array();
	
	
    function construct($db, $units, $gebaeude) {
        $this->db = $db;
        $this->units = $units;
        $this->gebaeude = $gebaeude;
    }

    function doerfer_laden() {
        $doerfer_sql = $this->db->query('SELECT * FROM `villages`');
        while($row = $this->db->fetch($doerfer_sql)) {
          	$doerfer_array[] = $row;
        }
        $this->doerfer = $doerfer_array;
        $this->doerfer_anzahl = count($doerfer_array);
    }

    function truppen_zaehlen($dorf_info) {
        $truppen = 0;
        foreach ($this->units->bhprice as $key => $value) {
          $truppen += $dorf_info['all_'.$key] * $value;
        }
        $this->bh[$dorf_info['id']]['truppen'] = $truppen;
    }

    function gebaeude_zaehlen($dorf_info) {
        $gebaeude = 0;
        foreach ($this->gebaeude->bh as $key => $value) {
          for ($z = 1; $z <= $dorf_info[$key]; ++$z) {
            $gebaeude += $this->gebaeude->get_bh($key, $z);
          }
        }
        $this->bh[$dorf_info['id']]['gebaeude'] = $gebaeude;
		return $this->bh[$dorf_info['id']]['gebaude'] = $gebaeude;
    }

    function bh_in_db($dorf_info) {
      $dorf_id = $dorf_info['id'];
      $bh_plaetze = $this->bh[$dorf_id]['truppen'] + $this->bh[$dorf_id]['gebaeude'].'<br />';
      $this->db->query('UPDATE villages SET r_bh=\''.$bh_plaetze.'\' WHERE id=\''.$dorf_id.'\' LIMIT 1');
    }
}

$tpl->assign('buildings', $cl_builds->get_array("dbname"));
$tpl->assign('cl_builds', $cl_builds);
$tpl->assign('units', $cl_units->get_array("dbname"));

$bh_neuberechnen = new bh_neuberechnen;
$bh_neuberechnen->construct($db, $cl_units, $cl_builds);
$bh_neuberechnen->doerfer_laden();
		
if($_GET['do'] == "create")
	{
	 $bbanzahl = intval($_POST['bbanzahl']);
	 
	 $units = $cl_units->get_array("dbname");
	 $buildings = $cl_builds->get_array("dbname");
	 
	 if($bbanzahl <= 100)
		{
		 $tpl->assign('done', true);
		 for($i = 0; $i < $bbanzahl; $i++)
			{
			
			 // Dorf erstellen
			 create_village("-1", "Barbarendorf", "random");
			 
			 $query = mysql_query("SELECT * FROM villages WHERE userid = '-1' ORDER BY id DESC LIMIT 1");
			 $fetch = mysql_fetch_assoc($query);
			 $last_id = $fetch['id'];
			 
			 // Gebäude
			 
			 foreach($buildings as $number => $dbname)
				{
				 if($dbname != "farm")
					{
				 $min = $_POST[$dbname."_min"];
				 $max = $_POST[$dbname."_max"];
				 
				 if($min == "" && $max == "")
					{
					 $max = $cl_builds->get_maxstage($dbname);
					 if($dbname == "storage")
						{
						$min = 1;
						}
						else
						{
						$min = 0;
						}
					}
					elseif($max == "")
					{
					 $max = $cl_builds->get_maxstage($dbname); 
					}
					elseif($min == "")
					{
					 if($dbname == "storage")
						{
						$min = 1;
						}
						else
						{
						$min = 0;
						}
					}
					
				$stufe = rand($min, $max);
				 
				 $qu = mysql_query("UPDATE villages SET $dbname = $stufe WHERE id = '".$last_id."'");
					}
				}
				
				// Bauernhof auf die Zufallsgeb�udestufen anpassen
				$new = mysql_query("SELECT * FROM villages WHERE id = '".$last_id."'");
				$fetchn = mysql_fetch_assoc($new);
				$bh_buildings = $bh_neuberechnen->gebaeude_zaehlen($fetchn);
				
				foreach($arr_farm as $stufe => $bh_free)
					{
					 if($bh_free >= $bh_buildings)
						{
						 $bh_stufe = $stufe;
						 break;
						}
					}
				$bh_stufe = $bh_stufe + rand(5, 15);
				if($cl_builds->get_maxstage("farm") < $bh_stufe)
					{
					 $bh_stufe = $cl_builds->get_maxstage("farm");
					}
					
				mysql_query("UPDATE villages SET farm = '".$bh_stufe."' WHERE id = '".$last_id."'");
				
				// Truppen
				
				$mysql = mysql_query("SELECT * FROM villages WHERE id = '".$last_id."'");
				$fetch2 = mysql_fetch_assoc($mysql);
				
				$bh_neuberechnen = new bh_neuberechnen;
				$bh_neuberechnen->construct($db, $cl_units, $cl_builds);
				$bh_neuberechnen->doerfer_laden();
				
				$units = array();
				$bh_units = 0;
				$bh_max = $arr_farm[$bh_stufe];
				$bh_builds = $bh_neuberechnen->gebaeude_zaehlen($fetch2);
				
				foreach($_POST['units'] as $dbname => $key)
					{
						
					 if($key == "on")
						{
						 if($_POST['units_anzahl'][$dbname] != "")
							{
							 $min = round($_POST['units_anzahl'][$dbname] / 4);
							 $units[$dbname] = rand($min, $_POST['units_anzahl'][$dbname]);
							}
							else
							{
							 $zufall = rand(1000, 8000);
							 $min = round($zufall / 4);
							 $units[$dbname] = rand($min, $zufall);
							}
						 $bh_units += ($units[$dbname] * $cl_units->get_bhprice($dbname));
						}
					}
				
				if($bh_units > ($bh_max - $bh_builds))
					{
					 $bh_factor = ($bh_max - $bh_builds) / $bh_units;
					 foreach($units as $dbname => $count)
						{
						 $units[$dbname] *= $bh_factor;
						 $units[$dbname] = round($units[$dbname]);
						}
					}
					
				foreach($units as $dbname => $count)
					{
					 mysql_query("UPDATE villages SET all_$dbname = $count WHERE id = '".$last_id."'");
					 mysql_query("UPDATE unit_place SET $dbname = $count WHERE villages_from_id = '".$last_id."'");
					 
					 $bh_unit = $count * $cl_units->get_bhprice($dbname);
					 mysql_query("UPDATE villages SET r_bh = r_bh + $bh_unit WHERE id = '".$last_id."'");
					}
					 
				
				// Techlevel
				
				if($_POST['techlevel'] == "on")
					{
					 $troops = $cl_units->get_array("dbname");
					 foreach($troops as $gername => $dbname)
						{
						 if($dbname != 'unit_snob' AND $dbname != 'unit_knight')
							{
							 $level = rand(0, 3);
							 $dbname_tec_level = $dbname."_tec_level";
							 mysql_query("UPDATE villages SET $dbname_tec_level = $level WHERE id = '".$last_id."'");
							}
						}
					}
						 
				$bh_neuberechnen = new bh_neuberechnen;
				$bh_neuberechnen->construct($db, $cl_units, $cl_builds);
				
	  
				$bh_neuberechnen->doerfer_laden();
				
				for ($c = 0; $c < $bh_neuberechnen->doerfer_anzahl; ++$c) 
					{
					$dorf = $bh_neuberechnen->doerfer[$c];
					$bh_neuberechnen->truppen_zaehlen($dorf);
					$bh_neuberechnen->gebaeude_zaehlen($dorf);
					$bh_neuberechnen->bh_in_db($dorf);
					}
			}		
		}
		else
			{
			 $tpl->assign('done', false);
			 $tpl->assign('err', "<font color='red'>Zu viele Barbarendörfer angegeben!</font>");
			}
		
		reload_all_village_points();
		reload_all_player_points();
	}
?>