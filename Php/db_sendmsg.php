<?php 
	include("include_header.php");
?>
<?php
    $first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phone=$_POST['tel'];
	$message=$_POST['comments'];
    if (($first_name=="")||($last_name=="")||($email=="")||($message==""))
        {
        echo "<div class=\"error\">Missing a require fields <a href='spg_contact.php'>try again</a>.</div>";
        }
    else{   
		$to='xdzxfireboyx@gmail.com';	
		$name=$first_name.' '.$last_name.' Phone : '.$phone;
        $header="From: $name <$email> \r\n Return-path: $email";
        $subject="Message sent to contact you ...";
        mail($to, $subject, $message, $header);
        echo "<div class=\"correctness\">Email sent!</div>";
        }  
?>
<?php 
	include("include_footer.php");
?>
