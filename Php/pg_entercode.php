<?php
	include("include_header.php");
	require('db_connect.php');
?>

<?php
	if($_GET['gencode']){
		$getusername= $_GET['username'];
		$getgencode= $_GET['gencode'];
		$query= mysqli_query($connect,'SELECT * FROM user WHERE username = "'.$getusername.'"');
		while($row = mysqli_fetch_assoc($query)){
			$db_username= $row['username'];
			$db_gencode= $row['usergencode'];
		};
		if($getusername == $db_username && $getgencode == $db_gencode){
			echo" 
			<div id='page' >
			<div class='center'>
				<div class='title'>Entering new password</div>
				<form method='post' action='passresetcomplite.php'>
					<center>
					<table>
						<tr>
							<td>New Password :  </td>
							<th><input type='password' name='password' style='width:180px' /> </th>
						</tr>
						<tr>
							<td>Confirm Password  :  </td>
							<th><input type='password' name='confirm_password' style='width:180px' /></th>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type='hidden' name='username' value='$db_username' />
								<input type='submit' name='submit' value=' Update Password ' />
							</td>
						</tr>
					</table>
					</center>
				</form>
			</div>
			</div>	
			";
		};
	};
?>


<?php 
	mysqli_close($connect);
	include("include_footer.php");
?>