<!DOCTYPE html>
<html>
<head>
	<title>MyAccount</title>
	<style type="text/css">
		#loading
   		 {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
    	}
    	.card{
	
	background:#fff; 
	box-shadow: 0 0 10px 1px powderblue;
	width: 500px;
	padding: 10px;
	margin: 20px;
}
	</style>
</head>
<body onload="myfunction()">
	<div id="loading">
        
    </div>
	<?php   include('header.php');?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="card col-sm-5">
	   		<h3 class="text-center">Your Profile Info.</h3>
   			<div class="card-body ">
   				<form method="post" action="pmyaccount.php">
   					<?php 
						$con=mysqli_connect('localhost','root','','medimates');
						$qqq=mysqli_query($con,"select * from user where Email='".$_SESSION['email']."'");
						$rrr=mysqli_fetch_assoc($qqq);
					?>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Firstname" class="form-control" name="fname" value="<?php echo $rrr['Fname']; ?>">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Lastname" class="form-control" name="lname" value="<?php echo $rrr['Lname']; ?>">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Email" class="form-control" name="email" value="<?php echo $rrr['Email']; ?>">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Mobile" name="phno" value="<?php echo $rrr['Mobile']; ?>" class="form-control">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" name="city" value="<?php echo $rrr['City']; ?>" placeholder="City" class="form-control">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" name="state" value="<?php echo $rrr['State']; ?>" placeholder="state" class="form-control" >
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" name="country" value="<?php echo $rrr['Country']; ?>" placeholder="country" class="form-control" >
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" name="pincode" placeholder="Pincode" class="form-control" value="<?php echo $rrr['Pcode']; ?>">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" name="pass" placeholder="Pincode" class="form-control" value="<?php echo $rrr['Password']; ?>">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<textarea placeholder="Flat Number, Building Name, Street/Locality" class="form-control" rows="3" name="street1" draggable="false"><?php echo $rrr['Address']; ?></textarea>
	   						</div>	
	   					</div>
	   					</br>
	   					<div class="row" style="margin: 10px;">
	   						<div class="col-md-4"></div>
	   						<div class="col-md-3">
	   							<div class="btn1">
	   								<input type="submit" name="submit" value="UPDATE" class="btn btn-info form-control">
	   							</div>
	   						</div>
	   					</div>
   					</form>	

   			</div>
   		</div>
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