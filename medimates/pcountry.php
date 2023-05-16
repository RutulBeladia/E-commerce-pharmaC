<?php
$cntry=$_POST['cntry'];
    $cn = mysqli_connect('localhost','root','','medimates');
            
    $q = mysqli_query($cn,"insert into tblcountry values('','$cntry')");
    if($q)
    {
      echo "<script>window.location='country.php'</script>";
    }
    else
    {
      echo mysqli_error($cn);
    }
?>