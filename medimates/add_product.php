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
<title>Add Product</title>
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
            <strong>ADD PRODUCT</strong>
          </div>
          <div class="card">
            <div class="card-header text-dark">
            <form action="paddproduct.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Master Catagory</strong>
                  <select class="form-control" name="category" id="category"> 
                    <option class="text-muted" hidden disabled selected>Select Category</option>
                    <option value="0">Non-prescription</option>
                    <option value="1">Prescription</option>
                  </select>
                  <span id="cate" class="text-danger  form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Catagory</strong>
                  <select class="form-control" name="cate" id="cate"> 
                    <option class="text-muted" hidden disabled selected>Select Sub-Category</option>
                    <?php 
                      $con=mysqli_connect('localhost','root','','medimates');
                      $query=mysqli_query($cn,"select * from category");
                      while($ans=mysqli_fetch_assoc($query))
                      {
                    ?>
                    <option value="<?php echo $ans['product_name']; ?>"><?php echo $ans['product_name']; ?></option><?php } ?>
                  </select>
                  <span id="cate" class="text-danger  form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Sub-Catagory</strong>
                  <select class="form-control" name="subcate" id="subcate"> 
                    <option class="text-muted" hidden disabled selected>Select Sub-Category</option>
                    <?php 
                      $con=mysqli_connect('localhost','root','','medimates');
                      $query=mysqli_query($cn,"select * from sub_category");
                      while($ans=mysqli_fetch_assoc($query))
                      {
                    ?>
                    <option value="<?php echo $ans['sub_category']; ?>"><?php echo $ans['sub_category']; ?></option><?php } ?>
                  </select>
                  <span id="cate" class="text-danger  form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Product Name</strong>
                  <input type="text" name="name" id="pname" class="form-control" placeholder="Enter Product Name">
                   <span id="productname" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Product Image</strong>
                  <input type="file" name="img" id="pimg" class="form-control" >
                  <span id="img" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Product Quantity</strong>
                  <input type="number" name="qty" id="pqty" class="form-control" placeholder="Enter number of Quantity">
                  <span id="Quantity" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <strong>Product By</strong>
                  <select class="form-control" name="pro_by" id="pby">
                    <option class="text-muted">Select Company Name</option>
                    <?php
                      $cn=mysqli_connect('localhost','root','','medimates');
                      $q=mysqli_query($cn,"select Company_name from product_by");

                      while($result=mysqli_fetch_assoc($q))
                      {
                          ?>
                          <option value="<?php echo $result['Company_name']; ?>"><?php echo $result['Company_name']; ?></option>
                          <?php
                      }
                    ?>
                  </select>
                  <span id="productby" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Stock</strong>
                  <select class="form-control" name="stk" id="stock"> 
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
                  <input type="text" name="sellprice" id="sprice" class="form-control" placeholder="Selling price">
                  <span id="sell" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group col-sm-6">
                  <strong>Product Price</strong>
                  <input type="text" name="netprice" id="price" class="form-control" placeholder="Enter Product Price">
                  <span id="pprice" class="text-danger form-weight-bold"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <strong>Description</strong>
                  <textarea class="form-control" name="description" id="desc" placeholder="description about product....."></textarea>
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
            </div>
          </div>
        </div>
        <hr>
        <table id="myTable" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>No</th>
                  <th>Master Category</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Product Quantity</th>
                  <th>Product By</th>
                  <th>Stock</th>
                  <th>Selling Price</th>
                  <th>Product Price</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
                <?php
                    $cn=mysqli_connect('localhost','root','','medimates');
                    if(isset($_GET['id']))
                    {
                      $pid=$_GET['id'];
                      $del=mysqli_query($cn,"delete from product where product_id='$pid'");
                    }
                    $i=1;
                    $qry=mysqli_query($cn,"select * from product");
                    while ($ans=mysqli_fetch_assoc($qry))
                    {
                     ?>
                     <tr>
                      <td><a href="up_product.php?id=<?php echo $ans['product_id']; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                       <td><?php echo $i; $i++; ?></td>
                       <td><?php if($ans['product_category']==0){ echo "Non-prescription";}else{echo "Prescription";} ?></td>
                       <td><?php echo $ans['category']; ?></td>
                       <td><?php echo $ans['sub_category'];?></td>
                       <td><?php echo $ans['product_name'];?></td>
                       <td><img src="<?php echo $ans['product_image'];?>" class="img-responsive" style="border-radius: 0px; width: 350px; height: 100px;" ></td>
                       <td><?php echo $ans['total_product_quantity'];?></td>
                       <td><?php echo $ans['product_by'];?></td>
                       <td><?php echo $ans['stock'];?></td>
                       <td><?php echo $ans['selling_price'];?></td>
                       <td><?php echo $ans['product_price'];?></td>
                       <td><?php echo $ans['description']; ?></td>
                       <td><a href="?id=<?php echo $ans['product_id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>&nbsp;<a href=""><i class="glyphicon glyphicon-eye-open"></i></a></td>
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