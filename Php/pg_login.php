<?php 
	include("include_header.php");
?>		
		<div id="page" >
			<div class="center">
				<div class="title">Login to your account</div>
				<form method="post" action="db_login.php">
					<center>
					<table>
						<tr>
							<td>Username :  </td>
							<th><input type="text" name="username" style="width:180px" /> </th>
						</tr>
						<tr>
							<td>Password  :  </td>
							<th><input type="password" name="password" style="width:180px" /></th>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value=" Login " />
							</td>
						</tr>
					</table>
					</center>
				</form>
				<p>Forgot your password? <a href="pg_verifuser.php">Reset it</a>.</p>
			</div>
		</div>
<?php 
	include("include_footer.php");
?>

