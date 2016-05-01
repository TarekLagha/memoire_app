<?php 
	include("include_header.php");
?>
		<div id="page" >
			<div class="center">
				<div class="title">Create a new account</div>
				<form method="post" action="db_inscribe.php">
					<center>
					<table>
						<tr>
							<td>Full name <font color="red">*</font> :  </td>
							<th><input type="text" name="fullname" style="width:220px" /> </th>
						</tr>
						<tr>
							<td>Username <font color="red">*</font> :  </td>
							<th><input type="text" name="username" style="width:220px" /> </th>
						</tr>
						<tr>
							<td>Password <font color="red">*</font> :  </td>
							<th><input type="password" name="password" style="width:220px" /></th>
						</tr>
						<tr>
							<td>Confirm Password :  </td>
							<th><input type="password" name="confirm_password" style="width:220px" /></th>
						</tr>
						<tr>
							<td>Email <font color="red">*</font> :  </td>
							<th><input type="email" name="email" style="width:220px" /></th>
						</tr>
						<tr>
							<td>Phone :  </td>
							<th><input type="tel" name="phone" style="width:220px" /></th>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value=" Register " />
							</td>
						</tr>
					</table>
					</center>
				</form>
				<p>Note: Please make sure your informations you just entred are correct before send it and that all fields marked with * are completed!.</p>
			</div>
		</div>
<?php 
	include("include_footer.php");
?>
