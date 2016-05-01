<?php 
	include("include_header.php");
?>
<?php 
	require_once("db_connect.php");
?>
<?php 
	if(isset($_POST['submit'])){
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		if($fullname && $username && ($password == $confirm_password) && $email){
			$query = "INSERT INTO `user` (`userfullname`, `username`, `userpassword`,`usermail`, `userphone`) 
					VALUES ('$fullname', '$username', '$password', '$email', '$phone')";
			$result = mysqli_query($connect,$query);
			echo "<div class=\"correctness\">Registration Successful</div>";
		}else echo "<div class=\"error\">Sorry, Missing or inccorect fields.</div>";	 
	}
?>
<?php 
	mysqli_close($connect);
?>
<?php 
	include("include_footer.php");
?>