<?php 	
$host="localhost";
$user="root";
$password="Koko2009";
$db="statusFlags";
 
$get=mysqli_connect($host,$user,$password);
mysqli_select_db($get,$db);
$sql="UPDATE `openDoor` SET `status` = 'true' WHERE `openDoor`.`id` = 1";
mysqli_query($get,$sql);
echo "Successfully Set reload status to true";

?>