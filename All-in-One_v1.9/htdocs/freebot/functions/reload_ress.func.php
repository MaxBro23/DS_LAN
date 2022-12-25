<?php
/**
 * Reload Ress
 * Beta
 */
function reload_ress($vid)
{
  global $config;
  global $arr_production;
  global $arr_maxstorage;
  
  $sql = mysql_query("SELECT * FROM villages WHERE id = '".$vid."'");
  $village = mysql_fetch_assoc($sql);
  
  $time = time();
  
  $wood = $arr_production[$village["wood"]];
  $stone = $arr_production[$village["stone"]];
  $iron = $arr_production[$village["iron"]];
  $storage = $arr_maxstorage[$village["storage"]];
  $last_prod = $village["last_prod_aktu"];
  
  $end_wood = $village["r_wood"] + ($wood * $config["speed"] / 60 / 60 * ($time - $last_prod));
  $end_iron = $village["r_stone"] + ($stone * $config["speed"] / 60 / 60 * ($time - $last_prod));
  $end_stone = $village["r_iron"] + ($iron * $config["speed"] / 60 / 60 * ($time - $last_prod));
  
  if ($end_wood > $storage)
  {
    $end_wood = $storage;
  }
  if ($end_stone > $storage)
  {
    $end_stone = $storage;
  }
  if ($end_iron > $storage)
  {
    $end_iron = $storage;
  }
  
  mysql_query("UPDATE villages SET r_wood = '".$end_wood."' WHERE id = '" . $vid . "'");
  mysql_query("UPDATE villages SET r_stone = '".$end_stone."' WHERE id = '" . $vid . "'");
  mysql_query("UPDATE villages SET r_iron = '".$end_iron."' WHERE id = '" . $vid . "'");
  mysql_query("UPDATE villages SET last_prod_aktu = '".$time."' WHERE id = '" . $vid . "'");
}
?>