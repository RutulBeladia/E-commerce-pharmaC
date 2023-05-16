<?php

//$link=mysqli_connect("localhost","root","","test");
$name=$_POST['name'];
$phone=$_POST['phno'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$imgprofile=$_FILES['img']['name'];
$imgtmpname=$_FILES['img']['tmp_name'];
$fileupload= "profile/".$imgprofile;

/*echo $email;
echo $pwd;*/

//$s="insert into mailtest values('$email','$username','$pwd')";
//$arr=mysqli_query($link,$s);

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
		$mail->FromName = 'PharmaC | Online Pharmacy';		//From Email Id Display Name
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
		$mail->Body    = ' Thank You<br> Dear '.$name. ' <br> You are welcome to PharmaC Admin|Online Pharmacy <br> Your Admin Name is:'.$name;
						
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
			echo "<script>location.href='admin_reg.php'</script>";
		}



?>