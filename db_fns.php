<?php
/* This file stores the function that connects the database and the function that converts query result to an array. */

function db_connect() {
$result = new mysqli('localhost', 'dbusername', 'dbpassword', 'dbname');
if (!$result) {
return false;
} else {
return $result;
}
}

function db_result_to_array($result) {
  $res_array=array();
  
  for($count=0; $row=$result->fetch_assoc(); $count++) {
    $res_array[$count]=$row;
  }
  
  return $res_array;
}

?>
