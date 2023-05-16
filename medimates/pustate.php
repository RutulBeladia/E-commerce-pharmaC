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
<title>State</title>
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
    <?php include('sidebar.php'); ?>
<!-- state -->
    <div class="main-panel float-right">
      <div class="container"> 
        <h1 class="">State</h1>
          <form method="POST" action="#">
            <div class="row">
              <div class="col-md-6">
                <?php
                  $cn=mysqli_connect('localhost','root','','medimates');
                  if(isset($_GET['did']))
                  {
                    $id=$_GET['did'];
                    $q=mysqli_query($cn,"select * from tblstate where ID='$id'");
                    $ans = mysqli_fetch_assoc($q);
                  }
                ?>
                <div>
                <input type="text" class="form-control" name="cntry" value="<?php echo $ans['Country']; ?>">
                </div>  
              </div>
              <div class="col-md-3">
                <div>
                  <input type="text" class="form-control" value="<?php echo $ans['State']; ?>" placeholder="enter state" name="state">
                </div>  
              </div>
              <div class="col-md-2">
                <div>
                  <input type="submit" class="btn btn-warning" name="insert" value="UPDATE">
                </div>  
              </div>
              <?php
                global $flag;
                $flag=1;
                if(empty($_POST['cntry']))
                {}
                else
                {
                  $cntry=$_POST['cntry'];
                  $state=$_POST['state'];
                  $cn=mysqli_connect('localhost','root','','medimates');
                  if($flag==1)
                  {
                    $id=$_GET['did'];
                    $up=mysqli_query($cn,"update tblstate set Country='$cntry',State='$state' where ID='$id'");
                    if($up)
                    {
                      echo "<script>alert('record updated');window.location='state.php'</script>";
                    }
                    else
                    {
                      echo "<script>alert('mysqli_error($cn);');window.location='state.php'</script>";
                    }
                  }
                  else
                  {
                    echo "<script>alert('check connection');window.location='state.php'</script>";
                  }
                }

              ?>
            </div> 
          </form>
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