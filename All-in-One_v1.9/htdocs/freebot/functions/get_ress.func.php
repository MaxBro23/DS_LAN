<?php
function ress_woodb($building)
{
  global $cl_builds;
  global $village;
  $out = NULL;
  $out .= $cl_builds->get_wood($building, $village[$randbuild]+1);
  return $out;
}

function ress_stoneb($building)
{
  global $cl_builds;
  global $village;
  $out = NULL;
  $out .= $cl_builds->get_stone($building, $village[$randbuild]+1);
  return $out;
}

function ress_ironb($building)
{
  global $cl_builds;
  global $village;
  $out = NULL;
  $out .= $cl_builds->get_iron($building, $village[$randbuild]+1);
  return $out;
}
?>