<?php

//$link=mysqli_connect("localhost","root","","test");
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['telephone'];
$add=$_POST['address_1'];
$city=$_POST['city'];
$pcode=$_POST['postcode'];
$country=$_POST['country_id'];
$state=$_POST['zone_id'];
$pass=$_POST['password'];
$squestion=$_POST['squ'];
$answer=$_POST['answer'];
/*echo $email;
echo $pwd;*/

$cn=mysqli_connect('localhost','root','','medimates');

$q=mysqli_query($cn,"insert into user values('','$fname','$lname','$email','$mobile','$add','$city','$pcode','$country','state','$pass','$squestion','$answer')");

require "class.phpmailer.php";

$mail = new PHPMailer;
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  	// Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'pharmacstore@gmail.com'; // sender email id                            // SMTP username suratrealestate2015@gmail.com
		$mail->Password = 'Rutul@7717'; // sender password                          // SMTP password suratrealestate
		$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = '465';						//Port Number
		
		$mail->From = '';			//From Email Id
		$mail->FromName = 'PharmaC|Online Pharmacy';		//From Email Id Display Name
		//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
		$mail->addAddress($email);               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('');         // Add attachments
		//$mail->addAttachment('','');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Registration Successfully';
		$mail->Body    = ' Dear '.$fname.' &nbsp;' .$lname. ' <br><br> welcome and thank you for Registering With PharmaC |Online Pharmacy www.pharmacstore.com <br><br> Your account has been created and you may now login in to using your login details
			below: <br><br>

			<b>Your Email:</b>'.$email.'<br>
			<b>Your Password:</b>'.$pass;					
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send())
		 {
			//header("location:thanks.php");
		   echo 'Message could not be sent.';
		   echo 'Mailer Error: ' . $mail->ErrorInfo;
		   exit;
		 }
		else
		{
			echo "<script>location.href='login.php'</script>";
		}



?>