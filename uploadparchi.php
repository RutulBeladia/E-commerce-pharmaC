<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
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
<body>
	<!-- <div id="loading">
        
    </div> -->
	<?php   include('header.php');?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="card col-sm-5">
	   		<h3 class="text-center">Upload Priscription</h3>
   			<div class="card-body ">
   				<form method="post" action="" enctype="multipart/form-data">
   					<?php 
				error_reporting(0);
						$con=mysqli_connect('localhost','root','','medimates');
						$qqq=mysqli_query($con,"select * from user where Email='".$_SESSION['email']."'");
						$rrr=mysqli_fetch_assoc($qqq);


						if(isset($_REQUEST['submit']))
						{
							//echo "neel";exit();
							$why=$_REQUEST['why'];
							$name=$_REQUEST['name'];
								$age=$_REQUEST['age'];
								date_default_timezone_set('Australia/Melbourne');
								$date = date('m/d/Y ');
							//	$parchi=$_REQUEST['parchi'];
								$user=$rrr['customer_id'];


  $k0=$_FILES['parchi']['name'];
    $k1=$_FILES['parchi']['tmp_name'];
    $parchi="images/parchi/".$k0;
    move_uploaded_file($k1,$parchi);
    $qq="insert into prescription values('','$user','$name','$age','$why','$date','$parchi','')";
	$qry = mysqli_query($con,$qq);
    header('location:mypriscription.php');
    
    if($qry)
    {
    ?>
    <script>alert('Data Inserted..');</script>
    <?php
    }
    else{
    ?>
    <script>alert('Error..');</script>
    <?php
    }
    
 
							
						}
					?>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Firstname"  class="form-control" name="fname" value="<?php echo $rrr['Fname']; ?>" disabled>
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Lastname" class="form-control" name="lname" value="<?php echo $rrr['Lname']; ?>" disabled>
	   						</div>	
	   					</div>
	   					<br>
	   					</br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="For : ex Asthma,Diabetics" class="form-control" name="why">
	   						</div>	
	   						
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Patient Name" class="form-control" name="name">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="age" class="form-control" name="age">
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="text" placeholder="Deliver Each Month Date of Ex:4" class="form-control" name="date">
	   						</div>	
	   					</div>
	   					</br>
	   						<div class="row">
	   						<div class="col-md-1"></div>
	   						<div class="col-md-10">
	   						<input type="file"  class="form-control" name="parchi" >
	   						</div>	
	   					</div>
	   					<br>
	   					<div class="row" style="margin: 10px;">
	   						<div class="col-md-4"></div>
	   						<div class="col-md-3">
	   							<div class="btn1">
	   								<input type="submit" name="submit" value="Upload" class="btn btn-info form-control">
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