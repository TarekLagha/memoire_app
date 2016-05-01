<?php 
	include("include_header.php");
?>	
<?php 
	session_start();
	unset($_SESSION['username']);
?>

<?php 
	session_destroy();
	header('Location: pg_login.php');
?>
<?php 
	include("include_footer.php");
?>