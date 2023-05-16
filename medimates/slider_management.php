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

if(isset($_REQUEST['btnadd']))
{
    
  $k0=$_FILES['img']['name'];
    $k1=$_FILES['img']['tmp_name'];
    $k2="slider/".uniqid($k0).".jpg";
    move_uploaded_file($k1,$k2);

    if(mysqli_query($cn,"insert into slider values ('','$k2')")or die(mysql_error()))
    {
    ?>
    <script>alert('image Inserted..');</script>
    <?php
    }
    else{
    ?>
    <script>alert('Error..');</script>
    <?php
    }
    
  }

  if(isset($_REQUEST['del']))
    {
        $did=$_REQUEST['del'];
        mysqli_query($cn,"delete from slider where img_id='$did' ")or die(mysql_error());
        header("location:slider_management.php"); 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Slider Management</title>
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
            <strong>ADD SLIDER IMAGES</strong>
          </div>
          <div class="card">
            <div class="card-header text-dark">
            <form action="slider_management.php" method="post" enctype="multipart/form-data">
             
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Product Image</strong>
                  <input type="file" name="img" id="pimg" class="form-control" >
                  <span id="img" class="text-danger form-weight-bold"></span>
                </div>
                <!-- <div class="form-group col-sm-6">
                  <strong>Product Quantity</strong>
                  <input type="number" name="qty" id="pqty" class="form-control" placeholder="Enter number of Quantity">
                  <span id="Quantity" class="text-danger form-weight-bold"></span>
                </div> -->
              </div>
              
             
              
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <input type="submit" name="btnadd"   value="ADD" onclick="return valid()" class="btn btn-success">
                  <input type="reset" name="btnreset" id="btnreset" class="btn btn-default">
                </div>
              </div>
              <script type="text/javascript">
                function valid()
                {
                 
                  var img=document.getElementById('pimg').value;
                  
                 
                  if (img=="")
                  {
                    document.getElementById('img').innerHTML="*Please select Image *";
                    return false;
                  }
                  
                }
              </script>
            </form>
            </div>
          </div>
        </div>
        <hr>
       <table id="myTable" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>No</th>
                  
                  <th>Slider Image</th>
                  <th>Action<th>
                  </tr>
              </thead>
                <?php
                    $count=1;
                    $qry=mysqli_query($cn,"select * from slider");
                    while ($ans=mysqli_fetch_assoc($qry))
                    {
                     ?>
                     <tr>
                      <td><?php echo $count++;?></td>
                    <td><img src="<?php echo $ans['image'];?>" class="img-responsive" style="border-radius: 0px; width: 350px; height: 100px;" ></td>
                    <td><a href="slider_management.php?del=<?php echo $ans['img_id']; ?>">Delete</a></td>
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