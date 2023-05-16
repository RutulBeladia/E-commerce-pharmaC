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
<title>Product By</title>
<!-- for css -->
<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include('header.php');
  ?>
  <div class="container-fluid page-body-wrapper m">
    <!-- side bar -->
    <?php include('sidebar.php');?>
    <!-- product by -->
    <div class="main-panel float-right">
      <div class="container"> 
        <h1 style="font-family: Trajan Pro;">Product By</h1>
          <form method="POST" action="pp_by.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-3">
                <div>
                  <span>Company Name</span>
                 <input type="text" name="cname" id="cname" placeholder="Enter Company Name" class="form-control">
                </div>  
              </div>
              <div class="col-md-3">
                <div>
                  <span>Head Office City</span>
                  <input type="text" name="city" id="city" class="form-control" placeholder="Enter city name">
                </div>  
              </div>
               <div class="col-md-3">
                  <span>Product Image</span>
                  <input type="file" name="file" id="file" class="form-control" >
              </div>
               <div class="col-md-3">
                <div>
                  <span>Description</span>
                  <textarea name="desc" id="desc" class="form-control"></textarea>
                </div>  
              </div>
              <div class="col-md-2">
                <div>
                  <input type="submit" class="btn btn-info" name="insert" value="INSERT">
                </div>   
              </div>
            </div>
          </form>
          <br>
            <br>
      </div>
        <div class="container bg-country">
          <table class="table table-bordered table-hover">
            <tr>
              <th>NO.</th>
              <th>Company Name</th>
              <th>Head Office City</th>
              <th>Logo</th>
              <th>Action</th>
            </tr>
            <?php
            $cn=mysqli_connect('localhost','root','','medimates');
          if(isset($_GET['did']))
          {
            $id= $_GET['did'];
            $del = mysqli_query($cn,"delete from product_by where ID='$id'");
          }
          $i=1;
          $qyu = mysqli_query($cn,"select * from product_by");
          while($ans=mysqli_fetch_assoc($qyu))
          {
        ?>
        <tr>
          <td><?php echo $i; $i++; ?></td>
          <td><?php echo $ans['Company_name']; ?></td>
          <td><?php echo $ans['City']; ?></td>
          <td><img src="<?php echo $ans['Logo']; ?>" style="border-radius: 0px;height: 100px;width: 100px;"></td>
          <td><a href="pup_by.php?did=<?php echo $ans['ID']; ?>" class="btn btn-warning">Update</a>
            <a href="?did=<?php echo $ans['ID']; ?>" class="btn btn-danger"> Delete</a></td>
        </tr>
      <?php } ?>
          </table>
        </div>
      </div>
    </div>
</div>
<?php
  include('footer.php');
?>
</div>
<!-- js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>