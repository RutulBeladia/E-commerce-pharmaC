<?php 
$cn=mysqli_connect('localhost','root','','medimates');
session_start();
$aname=$_SESSION['name'];
$result=mysqli_query($cn,"select * from aregistration where Name='$aname'");
if (mysqli_num_rows($result)>0) 
{
  while ($row=mysqli_fetch_assoc($result)) 
  {
  }
}
else
{
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sales Managment|MediMates</title>
<!-- for css -->
<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/dataTables.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include('header.php');
  ?>
<div class="container-fluid page-body-wrapper m">
  <!-- side bar -->
    <?php include('sidebar.php'); ?>
    <!-- user manage -->
        <div class="container">
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
    </div>
</div>
<!-- js -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.dataTables.min.js"></script>
<script type="text/javascript" src="dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>