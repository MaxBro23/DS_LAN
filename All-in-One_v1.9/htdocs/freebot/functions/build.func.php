<?php
function build($building, $villageid)
{
  mysql_query("UPDATE villages SET ".$building." = ".$building." + 1 WHERE id = '".$villageid."'");
}
?>