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
<title>Site Setting</title>
<!-- for css -->
<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div>
  <?php
    include('header.php');
  ?>
  </div>
<div class="container-fluid page-body-wrapper m">
  <!-- side bar -->
    <?php include('sidebar.php'); ?>
<div class="container" style="background: powderblue; padding: 150px;">
  <div class="row">
    <?php 
     $con=mysqli_connect('localhost','root','','medimates');
        
        $q=mysqli_query($con,"select * from site_setting where site_id='1'");
        $r= mysqli_fetch_assoc($q);
    ?>
    <form method="post" action="psite.php" enctype="multipart/form-data">
      <div class="col-sm-4">
        <label>LOGO</label>
       <input type="file" name="img" value=" <?php echo $r['logo']; ?>" id="pimg" class="form-control" >
      </div>
      <div class="col-sm-4">
        <label>CONTACT</label>
        <input type="text" name="cnt" value="<?php echo $r['contact']; ?>" class="form-control" placeholder="contact">
      </div>
       <div class="col-sm-4">
        <label>EMAIL</label>
        <input type="text" name="eml" value="<?php echo $r['email']; ?>" class="form-control" placeholder="Email">
      </div>
      <div class="col-sm-12">
        <label>FOOTER TEXT</label>
        <input type="text" name="footer" value="<?php echo $r['footer_text']; ?>" class="form-control"><br>
      </div>
      <div>
        <input type="submit" name="submit" value="Update" class="btn btn-default" style="float: right;background:#fff;">
      </div>
    </form>
  </div>
</div>
</div>
<div>
  <?php include('footer.php');?>
</div>
<!-- js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>