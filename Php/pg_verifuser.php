<?php 
	include("include_header.php");
	require('db_connect.php');
?>
<div id="page" >
			<div class="center">
				<div class="title">Reseting password</div>
				<form method="post" action="pg_sendcodetomail.php">
					<center>
					<table>
						<tr>
							<td>Username :  </td>
							<th><input type="text" name="username" style="width:180px" /> </th>
						</tr>
												<tr>
							<td>E-mail :  </td>
							<th><input type="email" name="usermail" style="width:180px" /> </th>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value=" Reset Password " />
							</td>
						</tr>
					</table>
					</center>
				</form>
			</div>
		</div>

<?php 
	mysqli_close($connect);
	include("include_footer.php");
?>
