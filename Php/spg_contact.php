<?php 
	include("include_header.php");
?>
	<div id="page">
		<div class="center">
			<div class="title">Contact us</div>			
			<form method="post" action="db_sendmsg.php">
				<center>
					<table >
						<tr>
							<td>First Name <font color="red">*</font> :  </td>
							<td><input type="text" name="first_name" maxlength="50" style="width:250px"></td>
						</tr>
						<tr>
							<td>Last Name <font color="red">*</font> :  </td>
							<td><input type="text" name="last_name" maxlength="50" style="width:250px"></td>
						</tr>
						<tr>
							<td>Email Address <font color="red">*</font> : </td>
							<td><input type="text" name="email" maxlength="80" style="width:250px"></td>
						</tr>
						<tr>
							<td>Telephone Number : </td>
							<td><input type="text" name="tel" maxlength="30" style="width:250px"></td>
						</tr>
						<tr>
							<td>Comments <font color="red">*</font> :  </td>
							<td><textarea name="comments" maxlength="1000" style="width:250px" rows="10"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Send"></td>
						</tr>
					</table>
				</center>
			</form>
		</div>
	</div>

<?php 
	include("include_footer.php");
?>
