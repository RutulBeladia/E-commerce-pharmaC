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
<title>Add Product</title>
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
    <!-- view Product -->
    <div class="container">
      <div class="" style="margin: 10px;">
        <table id="myTable" class="table  table-bordered table-responsive" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>No</th>
                  <th>Master Category</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Product Quantity</th>
                  <th>Product By</th>
                  <th>Stock</th>
                  <th>Selling Price</th>
                  <th>Product Price</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
                <?php
                    $cn=mysqli_connect('localhost','root','','medimates');
                    if(isset($_GET['pid']))
                    {
                      $pid=$_GET['pid'];
                      $del=mysqli_query($cn,"delete from product where product_id='$pid'");
                    }
                    $i=1;
                    $qry=mysqli_query($cn,"select * from product");
                    while ($ans=mysqli_fetch_assoc($qry))
                    {
                     ?>
                     <tr>
                      <td><a href="up_product.php?id=<?php echo $ans['product_id']; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                       <td><?php echo $i; $i++; ?></td>
                       <td><?php if($ans['product_category']==0){ echo "Non-prescription";}else{echo "Prescription";} ?></td>
                       <td><?php echo $ans['category']; ?></td>
                       <td><?php echo $ans['sub_category'];?></td>
                       <td><?php echo $ans['product_name'];?></td>
                       <td><img src="<?php echo $ans['product_image'];?>" style="border-radius:0px; width:150px; height: 150px;"></td>
                       <td><?php echo $ans['total_product_quantity'];?></td>
                       <td><?php echo $ans['product_by'];?></td>
                       <td><?php echo $ans['stock'];?></td>
                       <td><?php echo $ans['selling_price'];?></td>
                       <td><?php echo $ans['product_price'];?></td>
                       <td><?php echo $ans['description']; ?></td>
                       <td><a href="?pid=<?php echo $ans['product_id']; ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                     </tr> 
                    <?php } ?>
      </table>
      </div>
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