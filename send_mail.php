<?php
	echo "Please wait...";
	
	$name=$_POST["name"];
	$emailid=$_POST["email"];
	$sub=$_POST["subject"];
	$mesg=$_POST["message"];
	
	//$agemail="a.kakkanadan@gmail.com";
	$agemail="jerlinkjohn@gmail.com";
    //require("phpmailer/class.phpmailer.php");
	require 'PHPMailer.php';
    $mail = new PHPMailer();
	
    // ---------- adjust these lines ---------------------------------------
    //$mail->Username = "a.kakkanadan@gmail.com"; // your GMail user name
    //$mail->Password = "our123HOUSE"; 
	$mail->Username = "jerlinkjohn@gmail.com"; // your GMail user name
    $mail->Password = "Jer4gmail"; 
    $mail->AddAddress($agemail); // recipients email
    $mail->FromName = $emailid; // readable name

    $mail->Subject = $sub;
    $mail->Body    = $mesg; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
	/*header('Status: 301 Moved Permanently', false, 301);  
	header("location:sent_mail.html");*/
	/*echo'<script> window.location="contact.html"; </script> ';*/
?>