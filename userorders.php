<?php 
$cn=mysqli_connect('localhost','root','','medimates');
?>
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
		<div class="card col-sm-12">
	   		<h3 class="text-center">Your Recent Order History.</h3>
   			<div class="card-body" style="width:100%">
<div class="" style="margin: 10px;">
        <table id="myTable" class="table table-striped table-responsive" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>Order Id</th>
                  <th>User Name</th>
                  <th>Shiiping Details</th>
                  <th>Total Amount</th>
                  <th>Order Date</th>
                  <th>Payment Mode</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php $get_order=mysqli_query($cn,"select user.*,tbladd.*,order_details.* from user INNER JOIN order_details ON user.customer_id=order_details.customer_id INNER JOIN tbladd ON user.customer_id=tbladd.customer_id");
                while ($row=mysqli_fetch_assoc($get_order)) 
          {// print_r($row); ?>
                <tr>
                  <th>Edit</th>
                  <th><?php echo $row['order_no'];?></th>
                  <th><?php echo $row['Fname']." ". $row['Lname'];?></th>
                  <th><?php echo $row['Address']."</br> ". $row['City']."</br> ". $row['Pcode']."</br> ". $row['state']."</br> ". $row['country'];?></th>
                  <th><?php echo $row['unitprice'];?></th>
                  <th><?php echo $row['created_date'];?></th>
                  <th><?php echo $row['payment_status'];?></th>
                  <th><a href="Editableinvoice/index.php?invoice_id=<?php echo $row['order_id'];?>" target="_blank">INVOICE</a>
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