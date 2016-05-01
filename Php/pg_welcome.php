<?php 
	include("include_header.php");
?>
<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		echo '<br/><br/><br/><center>Welcome '.$_SESSION['username'].'<center/>';
		echo '<br/> <a href="../Php/pg_logout.php">Logout</a>';
	}else die("<br/><br/><br/><center>You must be logged in !!!<center/>")
?>

<?php 
	include("include_footer.php");
?>