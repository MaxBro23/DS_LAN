<?php
$cl_builds = new builds();
//////////// Zeitfaktor vom Bau der Gebäude ////////////

$cl_builds->set_mainfactor("1.00","0.952381");

////////////////// BAUSCHLEIF KOSTEN ///////////////////

$cl_builds->set_buildsharpens("1.25","20");

///////////////////// Alle Gebäude /////////////////////
$cl_builds->add_build($lang->grab("configs_buildings", "main"), "main");
$cl_builds->set_woodprice("90","1.26");
$cl_builds->set_stoneprice("80","1.275");
$cl_builds->set_ironprice("70","1.26");
$cl_builds->set_bhprice("5","1.17");
$cl_builds->set_time("1080","1.2");
$cl_builds->set_points("10","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("30");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "main_des"), "main");
$cl_builds->set_graphicCoords("373,187,417,129,407,72,329,65,306,99,311,150");


$cl_builds->add_build($lang->grab("configs_buildings", "barracks"), "barracks");
$cl_builds->set_woodprice("200","1.26");
$cl_builds->set_stoneprice("170","1.28");
$cl_builds->set_ironprice("90","1.26");
$cl_builds->set_bhprice("7","1.17");
$cl_builds->set_time("1800","1.2");
$cl_builds->set_points("16","1.2");
$cl_builds->set_needbuilds(array("main"=>"3"));
$cl_builds->set_maxstage("25");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "barracks_des"));
$cl_builds->set_graphicCoords("392,289,444,313,506,283,481,235,442,216,392,252");


$cl_builds->add_build($lang->grab("configs_buildings", "stable"),"stable");
$cl_builds->set_woodprice("270","1.26");
$cl_builds->set_stoneprice("240","1.28");
$cl_builds->set_ironprice("260","1.26");
$cl_builds->set_bhprice("8","1.17");
$cl_builds->set_time("6000","1.2");
$cl_builds->set_points("20","1.2");
$cl_builds->set_needbuilds(array("main"=>"10","barracks"=>"5","smith"=>"5"));
$cl_builds->set_maxstage("20");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "stable_des"));
$cl_builds->set_graphicCoords("64,241,70,265,150,307,189,289,184,232,99,202");


$cl_builds->add_build($lang->grab("configs_buildings", "garage"), "garage");
$cl_builds->set_woodprice("300","1.26");
$cl_builds->set_stoneprice("240","1.28");
$cl_builds->set_ironprice("260","1.26");
$cl_builds->set_bhprice("8","1.16");
$cl_builds->set_time("6000","1.2");
$cl_builds->set_points("24","1.2");
$cl_builds->set_needbuilds(array("main"=>"10","smith"=>"10"));
$cl_builds->set_maxstage("15");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "garage_des"));
$cl_builds->set_graphicCoords("284,358,362,361,402,321,369,283,346,278,291,320");


$cl_builds->add_build($lang->grab("configs_buildings", "snob"), "snob");
$cl_builds->set_woodprice("15000","2");
$cl_builds->set_stoneprice("25000","2");
$cl_builds->set_ironprice("10000","2");
$cl_builds->set_bhprice("80","1.17");
$cl_builds->set_time("64800","1.2");
$cl_builds->set_points("512","1.2");
$cl_builds->set_needbuilds(array("main"=>"20","smith"=>"20","market"=>"10"));
if ($config['ag_style'] == 2) {
  $cl_builds->set_maxstage("1");
}
else {
$cl_builds->set_maxstage("3");
}
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "snob_des"));
$cl_builds->set_graphicCoords("206,149,257,125,229,60,185,80,156,111");


$cl_builds->add_build($lang->grab("configs_buildings", "smith"),"smith");
$cl_builds->set_woodprice("220","1.26");
$cl_builds->set_stoneprice("180","1.275");
$cl_builds->set_ironprice("240","1.26");
$cl_builds->set_bhprice("40","1.17");
$cl_builds->set_time("6000","1.2");
$cl_builds->set_points("19","1.2");
$cl_builds->set_needbuilds(array("main"=>"5","barracks"=>"1"));
$cl_builds->set_maxstage("20");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "smith_des"));
$cl_builds->set_graphicCoords("174,335,222,361,271,342,283,301,216,262");


$cl_builds->add_build($lang->grab("configs_buildings", "place"),"place");
$cl_builds->set_woodprice("10","1.2");
$cl_builds->set_stoneprice("40","1.2");
$cl_builds->set_ironprice("30","1.2");
$cl_builds->set_bhprice("0","1.17");
$cl_builds->set_time("2000","1.2");
$cl_builds->set_points("0","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("1");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "place_des"));
$cl_builds->set_graphicCoords("315,271,379,275,401,229,375,206,343,207");

$cl_builds->add_build("Statue","statue");
$cl_builds->set_woodprice("220","1");
$cl_builds->set_stoneprice("220","1");
$cl_builds->set_ironprice("220","1");
$cl_builds->set_bhprice("10","1");
$cl_builds->set_time("600","1");
$cl_builds->set_points("8","1");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("1");
$cl_builds->set_specials(array());
$cl_builds->set_description("An der Statue huldigen die Dorfbewohner deinem Paladin. Sollte dein Paladin einmal fallen, kannst du hier einen deiner K&auml;mpfer zum neuen Paladin ernennen.");
$cl_builds->set_graphicCoords("277,231,256,265,266,285,292,287,306,266");

$cl_builds->add_build($lang->grab("configs_buildings", "market"),"market");
$cl_builds->set_woodprice("100","1.26");
$cl_builds->set_stoneprice("100","1.275");
$cl_builds->set_ironprice("100","1.26");
$cl_builds->set_bhprice("20","1.17");
$cl_builds->set_time("2700","1.2");
$cl_builds->set_points("10","1.2");
$cl_builds->set_needbuilds(array("main"=>"3","storage"=>"2"));
$cl_builds->set_maxstage("25");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "market_des"));
$cl_builds->set_graphicCoords("214,149,234,228,313,230,330,169,273,122");


$cl_builds->add_build($lang->grab("configs_buildings", "wood"),"wood");
$cl_builds->set_woodprice("50","1.25");
$cl_builds->set_stoneprice("60","1.275");
$cl_builds->set_ironprice("40","1.245");
$cl_builds->set_bhprice("5","1.15");
$cl_builds->set_time("900","1.2");
$cl_builds->set_points("6","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("30");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "wood_des"));
$cl_builds->set_graphicCoords("472,379,523,417,583,373,528,330");


$cl_builds->add_build($lang->grab("configs_buildings", "stone"),"stone");
$cl_builds->set_woodprice("65","1.27");
$cl_builds->set_stoneprice("50","1.265");
$cl_builds->set_ironprice("40","1.24");
$cl_builds->set_bhprice("10","1.14");
$cl_builds->set_time("900","1.2");
$cl_builds->set_points("6","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("30");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "stone_des"));
$cl_builds->set_graphicCoords("34,300,0,349,15,399,67,417,91,402,92,341");


$cl_builds->add_build($lang->grab("configs_buildings", "iron"),"iron");
$cl_builds->set_woodprice("75","1.25");
$cl_builds->set_stoneprice("65","1.275");
$cl_builds->set_ironprice("70","1.24");
$cl_builds->set_bhprice("10","1.17");
$cl_builds->set_time("1080","1.2");
$cl_builds->set_points("6","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("30");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "iron_des"));
$cl_builds->set_graphicCoords("0,55,45,90,93,58,89,6,39,9");


$cl_builds->add_build($lang->grab("configs_buildings", "farm"),"farm");
$cl_builds->set_woodprice("45","1.3");
$cl_builds->set_stoneprice("40","1.32");
$cl_builds->set_ironprice("30","1.29");
$cl_builds->set_bhprice("0","1");
$cl_builds->set_time("1440","1.2");
$cl_builds->set_points("5","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("30");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "farm_des"));
$cl_builds->set_graphicCoords("456,0,477,41,526,75,583,88,597,18,597,0");


$cl_builds->add_build($lang->grab("configs_buildings", "storage"),"storage");
$cl_builds->set_woodprice("60","1.265");
$cl_builds->set_stoneprice("50","1.27");
$cl_builds->set_ironprice("40","1.245");
$cl_builds->set_bhprice("0","1");
$cl_builds->set_time("1224","1.2");
$cl_builds->set_points("6","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("30");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "storage_des"));
$cl_builds->set_graphicCoords("96,192,153,218,195,215,193,148,133,121");


$cl_builds->add_build($lang->grab("configs_buildings", "hide"),"hide");
$cl_builds->set_woodprice("50","1.25");
$cl_builds->set_stoneprice("60","1.25");
$cl_builds->set_ironprice("50","1.25");
$cl_builds->set_bhprice("2","1.20");
$cl_builds->set_time("2160","1.2");
$cl_builds->set_points("5","1.2");
$cl_builds->set_needbuilds(array());
$cl_builds->set_maxstage("10");
$cl_builds->set_specials(array("catapult_protection"));
$cl_builds->set_description($lang->grab("configs_buildings", "hide_des"));
$cl_builds->set_graphicCoords("241,80,261,113,294,93,268,63");


$cl_builds->add_build($lang->grab("configs_buildings", "wall"),"wall");
$cl_builds->set_woodprice("50","1.26");
$cl_builds->set_stoneprice("100","1.275");
$cl_builds->set_ironprice("20","1.26");
$cl_builds->set_bhprice("5","1.18");
$cl_builds->set_time("3600","1.2");
$cl_builds->set_points("8","1.2");
$cl_builds->set_needbuilds(array("barracks"=>"1"));
$cl_builds->set_maxstage("20");
$cl_builds->set_specials(array());
$cl_builds->set_description($lang->grab("configs_buildings", "wall_des"));
$cl_builds->set_graphicCoords("428,333,430,382,472,363,470,318");
?>