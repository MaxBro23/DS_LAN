<?php
function transfer($to, $sec)
{
  sleep($sec);
  
  echo "<script>location = '".$to."';</script>";
}
?>