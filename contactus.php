<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
	<style type="text/css">
		#loading
   		 {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
    	}
    	.banner-d
    	{
    		background:url('images/banner-d.png') no-repeat center ;
    		height:100px;
    		width:100%;  
    	}
    	.con {
  
}
	</style>
</head>
<body onload="myfunction()">
	<div id="loading">
        
    </div>
	<?php   include('header.php');?>
	<div class="container">
		<div>
			<div class="banner-d text-center"><h2>CONTACT US</h2></div>
		</div>
		<div class="container">
			<div class="row">
				<form method="post">
				<div class="col-sm-4"> 
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="Enter your Name">
				</div>
				<div class="col-sm-4"> 
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" placeholder="Enter Mobile Number">
				</div>
				<div class="col-sm-4"> 
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="Enter Email" >
				</div>
					<br>
				<label>Your MAssage</label>
					<div class="col-sm-12">
						<textarea class="form-control" name="msg" placeholder="ENTER YOUR QUERY"></textarea>
					</div>
				</div>
		
		</div>
		<div>
			<input type="submit" name="submit" value="SUBMIT" style="background-color:powderblue; border: none; padding:20px;margin:20px; width:200px;float:right; color: #fff;">
		</div>
			</form>
			<?php 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$con=mysqli_connect('localhost','root','','medimates');
$insert=mysqli_query($con,"insert into contactus values('','$name','$phone','email','msg')");
if($insert)
{
	echo "<script>alert('your query Sent');window.location='home.php'</script>";
}
else
{
	echo "<script>alert('sorry');</script>";
}
}
?>
	</div>
	<?php include('footer.php');?>

	<script>
      var preloader=document.getElementById('loading');

      function myfunction()
      {
        preloader.style.display='none';
      }
  </script>
</body>
</html>