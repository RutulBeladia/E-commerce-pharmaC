<?php
$name=ucwords($_POST['name']);
$pass=$_POST['pass'];

$con=mysqli_connect('localhost','root','','medimates');
$q="select * from aregistration where Name='$name' and Password='$pass' ";
$query=mysqli_query($con,$q);
$numrows=mysqli_num_rows($query);
$record=mysqli_fetch_assoc($query);
if($numrows==0)
{
	echo "<script> alert('invalid username and Password'); window.location.href='login.php'; </script>";
}
else if($record['Name']==$name && $record['Password']==$pass)
{
	session_start();
		$_SESSION['name']=$name;
		echo "<script>alert('Welcome $name');location='index.php'</script>";
}

/*while($result=mysqli_fetch_assoc($query))
{
	if($name==$result['Name'] && $pass==$result['Password'])
	{
		session_start();
		$_SESSION['name']=$name;
		echo "<script>alert('Welcome $name');location='index.php'</script>";
	}
}*/
?>