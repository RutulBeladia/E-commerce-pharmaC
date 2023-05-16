<?php
   
    $pid=$_POST['model'];
    $pname=$_POST['product-name'];
    $pqnt=$_POST['product-quantity'];
    $uprice=$_POST['unit-price'];
    $tprice=$_POST['total-price'];

    $cn=mysqli_connect('localhost','root','','users');
    
    $q=mysqli_query($cn,"insert into tbl_order values ('','$pid','$pname','$pqnt','$uprice','$tprice')");
    if($q)
    {
            echo "<script>alert('your product add to cart');window.location='checkout.php'</script>";
    }
    else
    {
            
             echo "<script>alert('Password Or Email Incorrect');window.location='buynow.php'</script>";

    }

?>