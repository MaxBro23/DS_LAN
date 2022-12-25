<?php
$cl_units = new units();
#$lang = new aLang("configs_units", $config['lang'], $path);
//////////// Zeitfaktor vom Bau der Einehiten ////////////

$cl_units->set_unitfactor("0.665","0.94355");

///////////////////// Alle EINHEITEN /////////////////////

$cl_units->add_unit($lang->grab("configs_units", "spear"),"unit_spear");
$cl_units->set_woodprice("50");
$cl_units->set_stoneprice("30");
$cl_units->set_ironprice("10");
$cl_units->set_bhprice("1");
$cl_units->set_time("1000");
$cl_units->set_att("10","1.045");
$cl_units->set_def("15","1.045");
$cl_units->set_defcav("45","1.045");
$cl_units->set_defarcher("20","1.045");
$cl_units->set_speed("720");
$cl_units->set_booty("25");
$cl_units->set_needed(array());
$cl_units->set_recruit_in("barracks");
$cl_units->set_specials(array());
$cl_units->set_group("foot");
$cl_units->set_col("A");
$cl_units->set_attType("def");
$cl_units->set_description($lang->grab("configs_units", "spear_des"));

$cl_units->add_unit($lang->grab("configs_units", "sword"),"unit_sword");
$cl_units->set_woodprice("30");
$cl_units->set_stoneprice("30");
$cl_units->set_ironprice("70");
$cl_units->set_bhprice("1");
$cl_units->set_time("1500");
$cl_units->set_att("25","1.045");
$cl_units->set_def("50","1.045");
$cl_units->set_defcav("25","1.045");
$cl_units->set_defarcher("40","1.045");
$cl_units->set_speed("900");
$cl_units->set_booty("15");
$cl_units->set_needed(array("smith"=>"1"));
$cl_units->set_recruit_in("barracks");
$cl_units->set_specials(array());
$cl_units->set_group("foot");
$cl_units->set_col("A");
$cl_units->set_attType("def");
$cl_units->set_description($lang->grab("configs_units", "sword_des"));

$cl_units->add_unit($lang->grab("configs_units", "axe"),"unit_axe");
$cl_units->set_woodprice("60");
$cl_units->set_stoneprice("30");
$cl_units->set_ironprice("40");
$cl_units->set_bhprice("1");
$cl_units->set_time("1250");
$cl_units->set_att("40","1.0455");
$cl_units->set_def("10","1.045");
$cl_units->set_defcav("5","1.045");
$cl_units->set_defarcher("10","1.045");
$cl_units->set_speed("720");
$cl_units->set_booty("10");
$cl_units->set_needed(array("smith"=>"2"));
$cl_units->set_recruit_in("barracks");
$cl_units->set_specials(array());
$cl_units->set_group("foot");
$cl_units->set_col("A");
$cl_units->set_attType("off");
$cl_units->set_description($lang->grab("configs_units", "axe_des"));

$cl_units->add_unit($lang->grab("configs_units", "archer"),"unit_archer");
$cl_units->set_woodprice("100");
$cl_units->set_stoneprice("30");
$cl_units->set_ironprice("60");
$cl_units->set_bhprice("1");
$cl_units->set_time("1250");//???
$cl_units->set_att("15","1.045");
$cl_units->set_def("50","1.045");
$cl_units->set_defcav("40","1.045");
$cl_units->set_defarcher("5","1.045");
$cl_units->set_speed("1080");
$cl_units->set_booty("10");
$cl_units->set_needed(array("barracks"=>5,"smith"=>5));
$cl_units->set_recruit_in("barracks");
$cl_units->set_specials(array());
$cl_units->set_group("foot");
$cl_units->set_col("A");
$cl_units->set_attType("off");
$cl_units->set_description($lang->grab("configs_units", "archer_des"));

$cl_units->add_unit($lang->grab("configs_units", "spy"),"unit_spy");
$cl_units->set_woodprice("50");
$cl_units->set_stoneprice("50");
$cl_units->set_ironprice("20");
$cl_units->set_bhprice("2");
$cl_units->set_time("1250");
$cl_units->set_att("0","1.045");
$cl_units->set_def("2","1.045");
$cl_units->set_defcav("1","1.045");
$cl_units->set_defarcher("2","1.045");
$cl_units->set_speed("360");
$cl_units->set_booty("0");
$cl_units->set_needed(array("stable"=>1));
$cl_units->set_recruit_in("stable");
$cl_units->set_specials(array());
$cl_units->set_group("cav");
$cl_units->set_col("B");
$cl_units->set_attType("spy");
$cl_units->set_description($lang->grab("configs_units", "spy_des"));

$cl_units->add_unit($lang->grab("configs_units", "light"),"unit_light");
$cl_units->set_woodprice("125");
$cl_units->set_stoneprice("100");
$cl_units->set_ironprice("250");
$cl_units->set_bhprice("4");
$cl_units->set_time("2400");
$cl_units->set_att("130","1.045");
$cl_units->set_def("30","1.045");
$cl_units->set_defcav("40","1.045");
$cl_units->set_defarcher("30","1.045");
$cl_units->set_speed("390");
$cl_units->set_booty("80");
$cl_units->set_needed(array("stable"=>3));
$cl_units->set_recruit_in("stable");
$cl_units->set_specials(array());
$cl_units->set_group("cav");
$cl_units->set_col("B");
$cl_units->set_attType("off");
$cl_units->set_description($lang->grab("configs_units", "light_des"));

$cl_units->add_unit($lang->grab("configs_units", "marcher"),"unit_marcher");
$cl_units->set_woodprice("250");
$cl_units->set_stoneprice("100");
$cl_units->set_ironprice("150");
$cl_units->set_bhprice("5");
$cl_units->set_time("1250");//???
$cl_units->set_att("120","1.045");
$cl_units->set_def("40","1.045");
$cl_units->set_defcav("30","1.045");
$cl_units->set_defarcher("50","1.045");
$cl_units->set_speed("600");
$cl_units->set_booty("50");
$cl_units->set_needed(array("stable"=>"5"));
$cl_units->set_recruit_in("stable");
$cl_units->set_specials(array());
$cl_units->set_group("cav");
$cl_units->set_col("B");
$cl_units->set_attType("off");
$cl_units->set_description($lang->grab("configs_units", "marcher_des")); 

$cl_units->add_unit($lang->grab("configs_units", "heavy"),"unit_heavy");
$cl_units->set_woodprice("200");
$cl_units->set_stoneprice("150");
$cl_units->set_ironprice("600");
$cl_units->set_bhprice("6");
$cl_units->set_time("3600");
$cl_units->set_att("150","1.045");
$cl_units->set_def("200","1.045");
$cl_units->set_defcav("80","1.045");
$cl_units->set_defarcher("180","1.045");
$cl_units->set_speed("450");
$cl_units->set_booty("50");
$cl_units->set_needed(array("stable"=>"10","smith"=>"15"));
$cl_units->set_recruit_in("stable");
$cl_units->set_specials(array());
$cl_units->set_group("cav");
$cl_units->set_col("B");
$cl_units->set_attType("def");
$cl_units->set_description($lang->grab("configs_units", "heavy_des"));

$cl_units->add_unit($lang->grab("configs_units", "ram"),"unit_ram");
$cl_units->set_woodprice("300");
$cl_units->set_stoneprice("200");
$cl_units->set_ironprice("200");
$cl_units->set_bhprice("5");
$cl_units->set_time("1250");
$cl_units->set_att("2","1.045");
$cl_units->set_def("20","1.045");
$cl_units->set_defcav("50","1.045");
$cl_units->set_defarcher("20","1.045");
$cl_units->set_speed("1200");
$cl_units->set_booty("0");
$cl_units->set_needed(array("garage"=>"1"));
$cl_units->set_recruit_in("garage");
$cl_units->set_specials(array());
$cl_units->set_group("foot");
$cl_units->set_col("C");
$cl_units->set_attType("off");
$cl_units->set_description($lang->grab("configs_units", "ram_des"));

$cl_units->add_unit($lang->grab("configs_units", "catapult"),"unit_catapult");
$cl_units->set_woodprice("320");
$cl_units->set_stoneprice("400");
$cl_units->set_ironprice("100");
$cl_units->set_bhprice("8");
$cl_units->set_time("1250");
$cl_units->set_att("100","1.045");
$cl_units->set_def("100","1.045");
$cl_units->set_defcav("50","1.045");
$cl_units->set_defarcher("100","1.045");
$cl_units->set_speed("1440");
$cl_units->set_booty("0");
$cl_units->set_needed(array("garage"=>"2","smith"=>"12"));
$cl_units->set_recruit_in("garage");
$cl_units->set_specials(array());
$cl_units->set_group("foot");
$cl_units->set_col("C");
$cl_units->set_attType("undefined");
$cl_units->set_description($lang->grab("configs_units", "catapult_des"));

$cl_units->add_unit("Paladin","unit_knight");
$cl_units->set_woodprice("20");
$cl_units->set_stoneprice("20");
$cl_units->set_ironprice("40");
$cl_units->set_bhprice("10");
$cl_units->set_time("3600");
$cl_units->set_att("150","1.045");
$cl_units->set_def("250","1.045");
$cl_units->set_defcav("400","1.045");
$cl_units->set_defarcher("150","1.045");
$cl_units->set_speed("400");
$cl_units->set_booty("100");
$cl_units->set_needed(array());
$cl_units->set_recruit_in("statue");
$cl_units->set_specials(array());
$cl_units->set_group("cav");
$cl_units->set_col("D");
$cl_units->set_attType("undefined");
$cl_units->set_description("Der edle Paladin besch&uuml;tzt dein Dorf und deine Verb&uuml;ndeten vor feindlichen Angreifern. Jeder Spieler kann nur einen Paladin haben.");

$cl_units->add_unit($lang->grab("configs_units", "snob"),"unit_snob");
if($config['ag_style'] == 2) {
  $cl_units->set_woodprice("40000");
  $cl_units->set_stoneprice("50000");
  $cl_units->set_ironprice("50000");
}
else {
  $cl_units->set_woodprice("28000");
  $cl_units->set_stoneprice("30000");
  $cl_units->set_ironprice("25000");
}
$cl_units->set_bhprice("100");
$cl_units->set_time("12500");
$cl_units->set_att("30","1.045");
$cl_units->set_def("100","1.045");
$cl_units->set_defcav("50","1.045");
$cl_units->set_defarcher("100","1.045");
$cl_units->set_speed("1800");
$cl_units->set_booty("0");
$cl_units->set_needed(array("main"=>20,"smith"=>20,"market"=>10));
$cl_units->set_recruit_in("snob");
$cl_units->set_specials(array("no_investigate"));
$cl_units->set_group("foot");
$cl_units->set_col("D");
$cl_units->set_attType("undefined");
$cl_units->set_description($lang->grab("configs_units", "snob_des"));

?>
