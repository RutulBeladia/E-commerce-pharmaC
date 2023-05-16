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
  <?php 
$cn=mysqli_connect('localhost','root','','medimates');
 $_SESSION['email']
 ?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="card col-sm-12">
	   		<h3 class="text-center"> My Prescription.</h3>
   			<div class="card-body" style="width:100%">
<div class="" style="margin: 10px;">
        <table id="myTable" class="table table-striped table-responsive" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>patient_name</th>
                  <th>patient_age</th>
                  <th>patient_issue</th>
                  <th>Delivery_each_date</th>
                  <th>Priscription</th>
                  <th>created_date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php $get_order=mysqli_query($cn,"select user.*,prescription.* from prescription INNER JOIN user ON prescription.custmer_id=user.customer_id where user.Email='".$_SESSION['email']."' ");
                while ($row=mysqli_fetch_assoc($get_order)) 
          {//print_r($row); ?>
                <tr>
                  
                  <th><?php echo $row['Pid'];?></th>
                  <th><?php echo $row['patient_name'];?></th>
                  <th><?php echo $row['patient_age'];?></th>
                  <th><?php echo $row['patient_issue'];?></th>
                  <th><?php echo $row['Delivery_each_date'];?></th>
                  <th><img src="<?php echo $row['Priscription'];?>" height="200" width="300"></th>
                  <th><?php echo $row['created_date'];?></th>

                  <th><a href="mypriscriptiondelete.php?delpri=<?php echo $row['Pid'];?>" onclick="return confirm('Are you sure?');">Delete</a>
                </tr>
            

        <?php }

              ?>


                    </table>
      </div>




	</div></div></div>
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