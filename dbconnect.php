<?php
  $mysqli = new mysqli("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820680");

if ($mysqli->connect_errno) {
  echo "Connect Failed ".$mysqli->connect_error;
  
  exit();
}
?>
