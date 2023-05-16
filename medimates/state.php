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
    <?php include('sidebar.php');?>
    <!-- country -->
    <div class="main-panel float-right">
      <div class="container"> 
        <h1 style="font-family:Trajan Pro;">State</h1>
          <form method="POST" action="pstate.php">
            <div class="row">
              <div class="col-md-3">
                <div>
                  <select id="cntry" name="cntry" class="form-control">
                    <option selected="">Choose Country</option>
                    <?php
                      $cn=mysqli_connect('localhost','root','','medimates');
                      $q=mysqli_query($cn,"select * from tblcountry");
                      while($result=mysqli_fetch_assoc($q))
                      {
                        ?>
                        <option value="<?php echo  $result['Country']; ?>"><?php echo  $result['Country']; ?></option>
                        <?php
                      }

                    ?>
                  </select>
                </div>  
              </div>
              <div class="col-md-3">
                <div>
                  <input type="text" class="form-control" placeholder="enter state" name="state">
                </div>  
              </div>
              <div class="col-md-2">
                <div>
                  <input type="submit" class="btn btn-info" name="insert" value="INSERT">
                </div>  
              </div>
            </div> 
            <br>
            <br>
          </form>
      </div>
        <table id="myTable" class="table table-striped  table-hover table-responsive ">
            <thead>
            <tr>
              <th style="padding-right: 200px;">NO.</th>
              <th style="padding-right: 200px;">Country Name</th>
              <th style="padding-right: 200px;">State Name</th>
              <th style="padding-right: 200px;">Action</th>
            </tr>
            </thead>
            <?php
            $cn=mysqli_connect('localhost','root','','medimates');
          if(isset($_GET['did']))
          {
            $id= $_GET['did'];
            $del = mysqli_query($cn,"delete from tblstate where ID='$id'");
          }
          $i=1;
          $qyu = mysqli_query($cn,"select * from tblstate");
          while($ans=mysqli_fetch_assoc($qyu))
          {
        ?>
        <tr>
          <td><?php echo $i; $i++; ?></td>
          <td><?php echo $ans['Country']; ?></td>
          <td><?php echo $ans['State']; ?></td>
          <td><a href="pustate.php?did=<?php echo $ans['ID']; ?>" class="btn btn-warning"> Update</a>
            <a href="?did=<?php echo $ans['ID']; ?>" class="btn btn-danger"> Delete</a></td>
        </tr>
      <?php } ?>
          </table>
        </div>
    </div>
</div>
<?php
  include('footer.php');
?>
</div>
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