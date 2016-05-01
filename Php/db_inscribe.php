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
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		if($fullname && $username && $password && $email){
			$query = "INSERT INTO `user` (`userfullname`, `username`, `userpassword`,`usermail`, `userphone`) 
						VALUES ('$fullname', '$username', '$password', '$email', '$phone')";
			$result = mysqli_query($connect,$query);
			echo "
				<br />
				<br />
				<br />
				<center> Registration Successful</center>";
		}else echo "
			<br />
			<br />
			<br />
			<center> Sorry, Missing fields.</center>";
	} 
?>
<?php 
	mysqli_close($connect);
?>
<?php 
	include("include_footer.php");
?>