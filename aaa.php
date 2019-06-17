<?php
$array = array("a" => "moon", "star", "b" => "moon", "star", "sky");
 
// Deleting the duplicate items
$result = array_unique($array);
$myJSON = json_encode($result);

echo $myJSON;
?>