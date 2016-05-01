<?php
$connect =  mysqli_connect('localhost','admin','admin');
$db_select =  mysqli_select_db($connect,'mas_db');
	if(!$connect){ 
		echo "<div class=\"error\">Could not connect to DB !!! </div>";
	}elseif(!$db_select){
		echo "<div class=\"error\">Could not select DB !!! </div>";
		}
?>