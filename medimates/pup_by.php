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


if(isset($_REQUEST['insert']))
{
 global $flag;
 $flag=1;
echo $id=$_REQUEST['did'];
//exit();
$cname=$_REQUEST['cname'];
$city=$_REQUEST['city'];
$imgname=$_FILES['f']['name'];
$imgtmpname=$_FILES['f']['tmp_name'];
$fileupload= "logo/".$imgname;
$desc=$_REQUEST['desc'];
move_uploaded_file($imgtmpname,$fileupload);
//exit();

 // if($flag==1)
 // {
  $id=$_REQUEST['did'];
  $update=mysqli_query($cn,"update product_by set Company_name='$cname',City='$city',Logo='$fileupload',Description='$desc' where ID='$id'");

  if ($update) 
  {
    echo "<script>alert('record updated.!!!');window.location='product_by.php'</script>";
  }
  else
  {
    echo "<script>alert('record not updated');</script>";
  }
}
 // } }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Product by</title>
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
<!-- product by -->
    <div class="main-panel float-right">
      <div class="container"> 
        <h1 class="">Product by</h1>
          <form method="POST" enctype="multipart/form-data">
                <?php
                 
                  if(isset($_GET['did']))
                  {
                    $id=$_GET['did'];
                    $q=mysqli_query($cn,"select * from product_by where ID='$id'");
                    $ans = mysqli_fetch_assoc($q);
                  }
                ?>
                <div class="row">
                <div class="col-md-3">
                <div>
                  <span>Company Name</span>
                 <input type="text" name="cname" id="cname" value="<?php echo $ans['Company_name']; ?>" placeholder="Enter Company Name" class="form-control">
                </div>  
              </div>
              <div class="col-md-3">
                <div>
                  <span>Head Office City</span>
                  <input type="text" name="city" id="city" value="<?php echo $ans['City']; ?>" class="form-control" placeholder="Enter city name">
                </div>  
              </div>
               <div class="col-md-3">
                  <span>Product Image</span>
                  <input type="file" name="f" id="file" value="<?php $ans['Logo'];?>" class="form-control" >
              </div>
               <div class="col-md-3">
                <div>
                  <span>Description</span>
                  <input type="text" name="desc" id="desc" class="form-control" value="<?php echo $ans['Description']; ?>">
                </div>  
              </div>
              <div class="col-md-2">
                <div>
                  <input type="submit" class="btn btn-warning" name="insert" value="UPDATE">
                </div>   
              </div>
            </div>
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