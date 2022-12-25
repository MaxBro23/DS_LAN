<?php
require_once("../../include.inc.php");
$wood=$db->query('SELECT wood FROM villages WHERE userid=$id');
$woodb=$db->fetch($wood);
while ($wood<="8")
{
  $builds->build($village=$db->query('SELECT*FROM villages WHERE userid=$id'), $building='wood',$build_villages='wood=>8',$plus_costs='1.25');
};
$stone=$db->query('SELECT stone FROM villages WHERE userid=$id');
$stoneb=$db->fetch($stone);
while ($stone<="8")
{
  $builds->build($village=$db->query('SELECT*FROM villages WHERE userid=$id'), $building='stone',$build_villages='stone=>8',$plus_costs='1.25');
};
$iron=$db->query('SELECT iron FROM villages WHERE userid=$id');
$ironb=$db->fetch($iron);
while ($iron<="8")
{
  $builds->build($village=$db->query('SELECT*FROM villages WHERE userid=$id'), $building='iron',$build_villages='iron=>8',$plus_costs='1.25');
};
$storage=$db->query('SELECT storage FROM villages WHERE userid=$id');
$storageb=$db->fetch($storage);
while ($stable<="8")
{
    $builds->build($village=$db->query('SELECT*FROM villages WHERE userid=$id'), $building='storage',$build_villages='storage=>8',$plus_costs='1.25');
};
$farm=$db->query('SELECT farm FROM villages WHERE userid=$id');
$farmb=$db->fetch($farm);
while ($farm<="8")
{
    $builds->query($village=$db->query('SELECT*FROM villages WHERE userid=$id'), $building='farm', $build_villages='storage=>8',$plus_costs='1.25');
};
$main=$db->query('SELECT main FROM villages WHERE userid=$id');
$mainb=$db->fetch($main);
while ($main<="5")
{
    $builds->build($village=$db->query('SELECT*FROM villages WHERE userid=$id'),$building='main', $build_villages='main=>5',$plus_costs='1.25');
};
 ?>