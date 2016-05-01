<?php
$connect =  mysqli_connect('localhost','admin','admin');
	if(!$connect){ 
		echo "Could not connect !!! " . mysqli_error();
		}
	
$db_select =  mysqli_select_db($connect,'mas_db');
	if(!$db_select){
		echo "Could not select DB !!! ". mysqli_error();
		}
?>