<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- for css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- for logo -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
<footer class="footer" style="background-color: lightblue;">
  <div class="container-fluid clearfix">
    <?php 
      $cn=mysqli_connect('localhost','root','','medimates');
      $q=mysqli_query($cn,"select * from site_setting");
      $ru=mysqli_fetch_assoc($q);
     ?>
    <span style="color:black;padding-left: 500px;"><?php echo $ru['footer_text']; ?>
      <a href="index.php" target="_blank">PharmaC</a>. All rights reserved.</span></br>
    <span style="padding-left: 550px;">Hand-crafted & made with
      <i class="mdi mdi-heart text-danger"></i>
    </span>
  </div>
</footer>
<!--  js -->
 <!--  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script> -->
</body>
</html>