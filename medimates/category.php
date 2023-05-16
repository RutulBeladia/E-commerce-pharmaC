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
<title>Add Category</title>
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
    <!-- add Product -->
    <div class="container">
      <div class="card" style="margin:10px; ">
        <div class="card-header bg-dark text-white text-center">
          <strong>ADD CATEGORY</strong>
          </div>
          <div class="card">
          <div class="card-header text-dark">
            <form action="pcategory.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <strong>Select Master Category</strong>
                  <select class="form-control" name="cate" id="cate"> 
                    <option class="text-muted" hidden disabled selected>Select Category</option>
                    <option value="0">Non-prescription</option>
                    <option value="1">Prescription</option>
                  </select>
                  <span id="cate" class="text-danger  form-weight-bold"></span>
                </div>  
              </div>
            <div class="form-row">
             <div class="form-group col-sm-12">
                  <strong>Category Name</strong>
                  <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Category Name">
                   <span id="productname" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <strong>Category Image</strong>
                  <input type="file" name="img" id="pimg" class="form-control" >
                  <span id="img" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <strong>Status</strong>
                  <select class="form-control" name="status" id="status"> 
                    <option class="text-muted" hidden disabled selected>IN-Stock/Out-Of-Stock</option>
                    <option name="in-stock">In-Stock</option>
                    <option name="out-of-stock">Out-Of-Stock</option>
                  </select>
                  <span id="stk" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <input type="submit" name="btnadd" id="btnadd"  value="ADD" onclick="return valid()" class="btn btn-success">
                  <input type="reset" name="btnreset" id="btnreset" class="btn btn-default">
                </div>
              </div>
            </form>
            </div>
          </div>
          <table id="myTable" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>No</th>
                  <th>Master Category</th>
                  <th>Category Name</th>
                  <th>Image</th>
                  <th>Status</th>
                </tr>
              </thead>
                <?php
                    $cn=mysqli_connect('localhost','root','','medimates');
                    if(isset($_GET['id']))
                    {
                      $id=$_GET['id'];
                      $del=mysqli_query($cn,"delete from category where ID='$id'");
                    }
                    $i=1;
                    $qry=mysqli_query($cn,"select * from category");
                    while ($ans=mysqli_fetch_assoc($qry))
                    {
                     ?>
                     <tr>
                      <td><a href="?id=<?php echo $ans['ID']; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                       <td><?php echo $i; $i++; ?></td>
                       <td><?php if($ans['category_name']=='0'){ echo 'Non-prescription';}else{echo 'Prescription';}?></td>
                       <td><?php echo $ans['product_name'];?></td>
                       <td><img src="<?php echo $ans['product_image'];?>" class="img-responsive" style="border-radius: 0px; width: 250px; height: 150px;" ></td>
                       <td><?php echo $ans['status'];?></td>
                       <td><a href="?id=<?php echo $ans['ID']; ?>"><i class="glyphicon glyphicon-trash"></i></a>&nbsp;<a href=""><i class="glyphicon glyphicon-eye-open"></i></a></td>
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