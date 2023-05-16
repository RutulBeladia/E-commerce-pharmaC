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
</head>

<body>
<nav class="navbar default-layout col-lg-12 fixed-top p-0 ">
  <div class="text-center align-items-top justify-content-center">
    <?php
      $con=mysqli_connect('localhost','root','','medimates');
      $q=mysqli_query($con,"select * from site_setting");
      $result=mysqli_fetch_assoc($q);
     ?>
    <img src="<?php echo $result['logo']; ?>" style="padding-left: 25px;" width="200px" height="50px">
 </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a href="#" class="nav-link dropdown-toggle"  data-toggle="dropdown" aria-expanded="false" style="color:#fff;font-size:20px;font-family: Trajan Pro;text-decoration: none;">
            <?php 
             $profilename=$_SESSION['name'];
             $cn=mysqli_connect('localhost','root','','medimates');
             $q=mysqli_query($cn,"select profile from  aregistration where Name='$profilename'");
             $result=mysqli_fetch_assoc($q);
              if(isset($_SESSION['name']))
              {
                echo $_SESSION['name']; 
              }
             ?>    
             <img src='<?php echo $result['profile']; ?>' style="border-radius: 20px;"width="50px" height="50px">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item" href="changepass.php">
            Change Password
          </a>
          <a class="dropdown-item" href="signout.php">
            Sign Out
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>