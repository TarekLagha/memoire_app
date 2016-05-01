<?php 
	include("include_header.php");
?>
<?php 
	require_once("db_connect.php");
?>
<?php 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username && $password){
			$query = 'select * from user where username="'.$username.'"';
			$result = mysqli_query($connect,$query);
			if(mysqli_num_rows($result)==1){
				while ($row = mysqli_fetch_assoc($result)){
					$dbusername = $row['username'];
					$dbpassword = $row['userpassword'];
				}
				if($username==$dbusername && $password==$dbpassword){
					session_start();
					$_SESSION['username']=$dbusername;
					header('Location: pg_welcome.php');
				}else 
					echo "<div class=\"correctness\">Incorrect Username or Password !!!</div>";
			}else 
				echo "<div class=\"error\">Account is invalid </div>";
		}else 
			echo "<div class=\"error\">Please check the fields !</div>";
	}; 
?>
<?php 
	mysqli_close($connect);
?>
<?php 
	include("include_footer.php");
?>