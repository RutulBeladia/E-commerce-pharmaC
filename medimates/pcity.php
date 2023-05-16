<?php
$cntry=$_POST['cntry'];
$state=$_POST['state'];
$city=$_POST['city'];
    $cn = mysqli_connect('localhost','root','','medimates');
            
    $q = mysqli_query($cn,"insert into tblcity values('','$cntry','$state','$city')");
    if($q)
    {
      echo "<script>window.location='city.php'</script>";
    }
    else
    {
      echo mysqli_error($cn);
    }
?>