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
<title>View User |MediMates</title>
<!-- for css -->
<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
</head>
<body>
  <?php
    include('header.php');
  ?>
<div class="container-fluid page-body-wrapper m">
  <!-- side bar -->
    <?php include('sidebar.php'); ?>
    <!--view Oreder -->
    <div class="container">
      <div class="" style="margin: 10px;">
        <table id="myTable" class="table table-striped  table-responsive" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>Customer Id</th>
                  <th>Fname</th>
                  <th>Lname </th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>PCode</th>
                  <th>Country</th>
                  <th>State</th>
                  <th>Question</th>
                  <th>Answer</th>
                </tr>
              </thead>
              <?php
                    $cn=mysqli_connect('localhost','root','','medimates');
                    if(isset($_GET['pid']))
                    {
                      $pid=$_GET['pid'];
                      $del=mysqli_query($cn,"delete from user where customer_id='$pid'");
                    }
                    $i=1;
                    $qry=mysqli_query($cn,"select * from user");
                    while ($ans=mysqli_fetch_assoc($qry))
                    {
                     ?>
                     <tr>
                       <td><?php echo $i; $i++; ?></td>
                       <td><?php echo $ans['Fname']; ?></td>
                       <td><?php echo $ans['Lname']; ?></td>
                       <td><?php echo $ans['Email']; ?></td>
                       <td><?php echo $ans['Mobile'];?></td>
                       <td><?php echo $ans['Address'];?></td>
                       <td><?php echo $ans['City'];?></td>
                       <td><?php echo $ans['Pcode'];?></td>
                       <td><?php echo $ans['Country'];?></td>
                       <td><?php echo $ans['State'];?></td>
                       <td><?php echo $ans['Question'];?></td>
                       <td><?php echo $ans['Answer']; ?></td>
                       <td><a href="?pid=<?php echo $ans['customer_id']; ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                     </tr> 
                    <?php } ?>
            </table>
      </div>
    </div>
    
</div>
<?php include('footer.php'); ?>
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