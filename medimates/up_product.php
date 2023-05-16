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
<title>Update Product | MadiMates</title>
<!-- for css -->
<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include('header.php');
  ?>
<div class="container-fluid page-body-wrapper m">
  <!-- side bar -->
  <div>
    <?php include('sidebar.php'); ?>
  </div>
    <!-- update Product -->
    <div class="container">
        <div class="card" style="margin:10px; ">
          <div class="card-header bg-dark text-white text-center">
            <strong>UPDATE  PRODUCT</strong>
          </div>
          <div class="card">
            <div class="card-header text-dark">
            <form action="pup_product.php" method="post" enctype="multipart/form-data">
              <?php
                  $cn=mysqli_connect('localhost','root','','medimates');
                  if(isset($_GET['id']))
                  {
                    $pid=$_GET['id'];
                    $query=mysqli_query($cn,"select * from product where product_id='$pid'");
                    $u=mysqli_fetch_assoc($query);
                  }
              ?>
               <input type="hidden" name="pid" value="<?php echo $_GET['id']; ?>">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Master Catagory</strong>
                  <select class="form-control" name="mcate"> 
                    <option class="text-muted"hidden disabled selected>Select Master Category</option>
                    <option name="non-prescription" <?php if($u['product_category']=="0"){ echo "selected"; } ?> >Non-prescription</option>
                    <option name="prescription" <?php if($u['product_category']=="1"){ echo "selected"; } ?> >Prescription</option>
                  </select>
                  <span id="mcateg" class="text-danger  form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Catagory</strong>
                  <select class="form-control" name="cate" id="cate"> 
                    <option class="text-muted" hidden disabled selected>Select Category</option>
                    <?php 
                      $con=mysqli_connect('localhost','root','','medimates');
                      $query=mysqli_query($cn,"select * from product where product_id='$pid'");
                      while($a=mysqli_fetch_assoc($query))
                      {
                    ?>
                    <option  value="<?php echo $a['category']; ?>"><?php echo $a['category']; ?></option><?php } ?>
                  </select>
                  <span id="categ" class="text-danger  form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Sub-Catagory</strong>
                  <select class="form-control" name="subcate" id="subcate"> 
                    <option class="text-muted" hidden disabled selected>Select Sub-Category</option>
                    <?php 
                      $con=mysqli_connect('localhost','root','','medimates');
                      $query=mysqli_query($cn,"select * from Product where product_id='$pid'");
                      while($ans=mysqli_fetch_assoc($query))
                      {
                    ?>
                    <option value="<?php echo $ans['sub_category']; ?>"><?php echo $ans['sub_category']; ?></option><?php } ?>
                  </select>
                  <span id="scate" class="text-danger  form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Product Name</strong>
                  <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Product Name" value="<?php echo $u['product_name'];?>">
                  <span id="productname" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Product Image</strong>
                  <input type="file" name="pimg" id="pimg" value="<?php echo $ans['product_image']; ?>" class="form-control" >
                  <span id="img" class="text-danger form-weight-bold"></span>
                  <img src="<?php echo $u['product_image'];?>" width="50" height="50">
                </div>
                <div class="form-group col-sm-6">
                  <strong>Product Quantity</strong>
                  <input type="number" name="pqty" id="pqty" class="form-control" placeholder="Enter number of Quantity" value="<?php echo $u['product_quantity'];?>">
                  <span id="Quantity" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Product By</strong>
                  <input type="text" name="pby" id="pby" class="form-control" placeholder="Made by" value="<?php echo $u['product_by'];?>">
                  <span id="productby" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Stock</strong>
                  <select class="form-control" name="stock" id="stock" value="<?php 
                  echo $u['stock'];?>"> 
                    <option class="text-muted" hidden disabled selected>IN-Stock/Out-Of-Stock</option>
                    <option name="in-stock">In-Stock</option>
                    <option name="out-of-stock">Out-Of-Stock</option>
                  </select>
                   <span id="stk" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Selling Price</strong>
                  <input type="text" name="sprice" id="sprice" class="form-control" placeholder="Selling price" value="<?php echo $u['selling_price'];?>">
                  <span id="sell" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Product Price</strong>
                  <input type="text" name="price" id="price" class="form-control" placeholder="Enter Product Price" value="<?php echo $u['product_price'];?>">
                  <span id="pprice" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <strong>Description</strong>
                  <textarea class="form-control" name="desc" id="desc" placeholder="description about product....."><?php echo $u['description'];?></textarea>
                </div>
                
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <input type="submit" name="btnadd" id="btnadd" onclick="return upvalid()" value="UPDATE"  class="btn btn-success">
                 <a href="add_product.php"><< Go back</a>&nbsp;|
                 <a href="view_product.php"> View Product List</a>
                </div>
              </div>
              <script type="text/javascript">
                function upvalid()
                {
                  var cate=document.getElementById('cate').value;
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
            </div>
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