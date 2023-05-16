<?php 
$cn=mysqli_connect('localhost','root','','medimates');
session_start();
$aname=$_SESSION['name'];
$result=mysqli_query($cn,"select user.*,prescription.* from prescription INNER JOIN user ON prescription.custmer_id=user.customer_id ");
// if (mysqli_num_rows($result)>0) 
// {
//   while ($row=mysqli_fetch_assoc($result)) 
//   {
//   }
// }
// else
// {
//   header("location:login.php");
// }

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
              <?php $get_order=mysqli_query($cn,"select user.*,prescription.* from prescription INNER JOIN user ON prescription.custmer_id=user.customer_id");
                while ($row=mysqli_fetch_assoc($get_order)) 
          {// print_r($row); ?>
              <tr>
                  
                  <th><?php echo $row['Pid'];?></th>
                  <th><?php echo $row['patient_name'];?></th>
                  <th><?php echo $row['patient_age'];?></th>
                  <th><?php echo $row['patient_issue'];?></th>
                  <th><?php echo $row['Delivery_each_date'];?></th>
                  <th><img src="<?php echo '../medistore/'.$row['Priscription'];?>" height="500" width="300"></th>
                  <th><?php echo $row['created_date'];?></th>

                  <th><a href="mypriscriptiondelete.php?delpri=<?php echo $row['Pid'];?>" onclick="return confirm('Are you sure?');">Delete</a>
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