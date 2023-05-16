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
                  
$query=mysqli_query($cn,"select * from category");                
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Add Sub Category</title>
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
            <strong>ADD SUB-CATEGORY</strong>
          </div>
          <div class="card">
            <div class="card-header text-dark">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <strong>Category</strong>
                  <select class="form-control" name="category" id="cate"> 
                     <option class="text-muted" hidden disabled selected>Select Category</option>
                    <?php
                      while($ans=mysqli_fetch_assoc($query))
                      { print_r($ans);
                     ?>
                   
                    <option value="<?php echo $ans['product_name']; ?>"><?php echo $ans['product_name']; ?></option> <?php } ?> 
                  </select>
                  <span id="cate" class="text-danger  form-weight-bold"></span>
                </div> 
              <div class="form-group col-sm-12">
                  <strong>Sub Catagory</strong>
                 <input type="text" name="subcategory" id="subcate" class="form-control" placeholder="Enter Sub-Category Name">
                  <span id="cate" class="text-danger  form-weight-bold"></span>
                </div>  
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <strong>Status</strong>
                  <select class="form-control" name="s" id="status"> 
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
              <script type="text/javascript">
                function valid()
                {
                  var cate=document.getElementById('category').value;
                  var name=document.getElementById('pname').value;
                  var img=document.getElementById('pimg').value;
                  var qty=document.getElementById('pqty').value;
                  var product_by=document.getElementById('pby').value;
                  var stk=document.getElementById('stock').value;
                  var sell=document.getElementById('sprice').value;
                  var price=document.getElementById('price').value;

                  if (cate=="Select Category") 
                  {
                    document.getElementById('cate').innerHTML="*Please select one category*";
                    return false;
                  }
                  if(name=="") 
                  {
                    document.getElementById('productname').innerHTML="*Please fill the field*";
                    return false;
                  }
                  if (img=="")
                  {
                    document.getElementById('img').innerHTML="*Please select Image *";
                    return false;
                  }
                  if (qty=="")
                  {
                    document.getElementById('Quantity').innerHTML="* Enter the Quantity *";
                    return false;
                  }
                  if (product_by=="Select Company Name") 
                  {
                    document.getElementById('productby').innerHTML="* select Company name *";
                    return false;
                  }
                  if (stk=="IN-Stock/Out-Of-Stock") 
                  {
                    document.getElementById('stk').innerHTML="* select Stock *";
                    return false;
                  }
                  if (sell=="") 
                  {
                    document.getElementById('sell').innerHTML="* enter selling Price *";
                    return false;
                  }
                  if (price=="") 
                  {
                    document.getElementById('pprice').innerHTML="* enter Price *";
                    return false;
                  }
                }
              </script>
            </form>
            <?php
if(isset($_POST['btnadd']))
{
$cate=$_POST['category'];
$subcate=$_POST['subcategory'];
$status=$_POST['s'];

$cn=mysqli_connect('localhost','root','','medimates');
$q=mysqli_query($cn,"insert into sub_category values('','$cate','$subcate','$status')") or die(mysqli_error($cn));
if($q)
{
  echo "<script>alert('record inserted');window.location='sub_category.php';</script>";
}
else
{
  echo "<script>alert('record not inserted');window.location='sub_category.php';</script>";
}
}
?>
            </div>
          </div>
          <table id="myTable" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>No</th>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>Status</th>
                </tr>
              </thead>
                <?php
                    $cn=mysqli_connect('localhost','root','','medimates');
                    if(isset($_GET['id']))
                    {
                      $id=$_GET['id'];
                      $del=mysqli_query($cn,"delete from sub_category where ID='$id'");
                    }
                    $i=1;
                    $qry=mysqli_query($cn,"select * from sub_category");
                    while ($ans=mysqli_fetch_assoc($qry))
                    {
                     ?>
                     <tr>
                      <td><a href="?id=<?php echo $ans['ID']; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                       <td><?php echo $i; $i++; ?></td>
                       <td><?php echo $ans['category'];?></td>
                       <td><?php echo $ans['sub_category'];?></td>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>