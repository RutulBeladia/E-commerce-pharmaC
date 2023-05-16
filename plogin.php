<?php
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$cn=mysqli_connect('localhost','root','','medimates');
$q=mysqli_query($cn,"select * from user where Email='$email' and Password='$pwd'");
$num_row=mysqli_num_rows($q);

if($num_row==0)
{
    echo "<script>alert('Password Or Email Incorrect');window.location='login.php'</script>";
}   
while ($result=mysqli_fetch_array($q)) 
{
    if ($email==$result['Email'] && $pwd==$result['Password'])
    {
    	
    	session_start();
    	$_SESSION['email']=$email;
        echo "<script>alert('Welcome To MediMates');window.location='home.php'</script>";
   }

    
}