<?php

if(isset($_POST['email'])){
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = "TechWrath Website Contact Form Enquiry";
	$message = $_POST['message'];
	
	$to = "enquiry@techwrath.com.au";
	$headers = "From: $visitor_email \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$subject,$message,$headers);
	  
	header('Location: index.php?id=1');
	}else{
		header('Location: index.php?id=2');
	}
	
  

 ?>