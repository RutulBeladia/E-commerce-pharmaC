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
<title>Dashboard</title>
<!-- for css -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include('header.php');
  ?>
  <div class="container-fluid page-body-wrapper">
    <!-- side bar -->
    <?php include('sidebar.php');?>
    <!-- main containt -->
    <div class="main-panel float-right">
      <div class="content-wrapper">
        <?php 
        $con=mysqli_connect('localhost','root','','medimates');
        $query=mysqli_query($con,"select * from product");
        $num=mysqli_num_rows($query);        

        $non=mysqli_query($con,"select * from product where product_category='0'");
        $n=mysqli_num_rows($non);
        
        $p=mysqli_query($con,"select * from product where product_category='1'");
        $pp=mysqli_num_rows($p);

        $Prescriptons=mysqli_query($con,"select * from prescription");
        $pre=mysqli_num_rows($Prescriptons);

        $order=mysqli_query($con,"select * from order_details");
        $od=mysqli_num_rows($order); 

        $c=0;
        $result=mysqli_query($cn,"select * from order_details");
        if (mysqli_num_rows($result)>0) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
            $c=$c+$row['unitprice'];
          }
        }

        $user=mysqli_query($con,"select * from user");
        $customer=mysqli_num_rows($user);
        ?>
              <div class="row">
                <div class="col-sm-3 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-shopping text-danger icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Total PRoduct</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $num; ?></h3>
                          </div>
                        </div>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-receipt text-warning icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Total Orders</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $od; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-poll-box text-success icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Total Sales</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $c; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="fa fa-users text-info icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Total Users</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $customer; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="fa fa-list text-warning icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Non-prescription<br> Product</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $n ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="fa fa-clipboard text-success icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Prescriptons <br> Product</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $pp; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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