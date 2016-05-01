<?php
	include("include_header.php");
	require('db_connect.php');
?>

<?php 
	$newpassword= $_POST['password'];
	$confirmnewpassword= $_POST['confirm_password'];
	$sendusername= $_POST['username'];
	$code= $_GET['gencode'];
	
	if($newpassword == $confirmnewpassword ){
		$query= 'UPDATE user SET userpassword = "'.$newpassword.'" WHERE username= "'.$sendusername.'"' ;
		mysqli_query($connect,$query);
		$query= 'UPDATE user SET usergencode = "0" WHERE username= "'.$sendusername.'"' ;
		mysqli_query($connect,$query);
		echo 'Your Password has been updated !!!';
		
	}
	else {
		echo 'Passwords does not match !!!';
	};
?>
<?php 
	mysqli_close($connect);
	include("include_footer.php");
?>
