<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- for css -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    #sidebar{
     box-shadow: 0px 0px 2px black;
    }
  </style>
  <!-- for logo -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
  
<nav class="sidebar "  id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
   <li class="nav-item">  
       <a href="#venue" class="nav-link dropdown-toggle " data-toggle="collapse" aria-expanded="false">Venue</a>
     </li>
     <ul class="collapse list-unstyled" id="venue">
        <li class="nav-item">
          <a class="nav-link" href="country.php">
            <i class="menu-icon mdi mdi-earth"></i>
            <span class="menu-title">Country</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="state.php">
            <i class="menu-icon mdi mdi-map-marker"></i>
            <span class="menu-title">State</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="city.php">
            <i class="menu-icon mdi mdi-airplane"></i>
            <span class="menu-title">City</span>
          </a>
        </li>
    </ul>
     <li class="nav-item">
       <a href="#cat" class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false">Disease</a>
     </li>
     <ul class="collapse list-unstyled" id="cat">
        <li class="nav-item">
          <a class="nav-link" href="category.php">
            <span class="menu-title">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sub_category.php">
            <span class="menu-title">Sub categories</span>
          </a>
        </li>
    </ul>
    <li class="nav-item">
       <a href="#prod" class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false">Product Manage</a>
     </li>
     <ul class="collapse list-unstyled" id="prod">
      <li class="nav-item">
          <a class="nav-link" href="product_by.php">
            <span class="menu-title">Product By</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_product.php">
            <span class="menu-title">Add Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_product.php">
            <span class="menu-title">View/Edit Product</span>
          </a>
        </li>
      </ul>
   <!--  <li class="nav-item">
       <a href="#order" class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false">Order Manage</a>
     </li>
     <ul class="collapse list-unstyled" id="order">
        <li class="nav-item">
          <a class="nav-link" href="view_order.php">
            <span class="menu-title">View Order</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="order_shipment.php.php">
            <span class="menu-title">Shipment Order</span>
          </a>
        </li>
      </ul> -->
    <li class="nav-item">
      <a class="nav-link" href="newinventory.php">
        <span class="menu-title">Inventory</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sales.php">
        <span class="menu-title">Sales</span>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="user.php">
        <span class="menu-title">User</span>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="prescription.php">
        <span class="menu-title">Check Prescription</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sitesetting.php">
        <span class="menu-title">Site Setting</span>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="slider_management.php">
        <span class="menu-title">Slider Managment</span>
      </a>
    </li>
  </ul>
</nav>
</body>
</html>