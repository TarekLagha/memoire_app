<?php
	include("include_header.php");
	require('db_connect.php');
?>

<?php 
	if (isset($_POST['submit']))
	{
		$username= $_POST['username'];
		$usermail= $_POST['usermail'];
		$query= mysqli_query($connect,'SELECT * FROM user WHERE username = "'.$username.'"');
		$numrow= mysqli_num_rows($query);
		if($numrow!=0){
			while($row = mysqli_fetch_assoc($query)){
				$db_mail= $row['usermail'];
			};
			if ($usermail == $db_mail){
				$gencode = rand(100000,999999);
				mysqli_query($connect,'UPDATE user SET usergencode="'.$gencode.'" WHERE username="'.$username.'"');
				$tomail= $db_mail;
				$submail= 'Password Reset';
				$bodmail= '
						Cilck On The Link Below :
						http://localhost/mem/Php/pg_entercode.php?gencode=$gencode&username=$username
						';
				mail($tomail,$submail,$bodmail);
				echo"<div class=\"correctness\">Check Your E-mail Please</div>";
			}
			else{
				echo"<div class=\"error\">The Email you entered is incorrect !!!</div>";
			};
		}
		else {
			echo"<div class=\"error\">The username you entered does not exist !!!</div>";
		}
	}
?>
<?php 
	mysqli_close($connect);
	include("include_footer.php");
?>
