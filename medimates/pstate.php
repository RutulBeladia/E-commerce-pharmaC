<?php
$cntry=$_POST['cntry'];
$state=$_POST['state'];
    $cn = mysqli_connect('localhost','root','','medimates');
            
    $q = mysqli_query($cn,"insert into tblstate values('','$cntry','$state')");
    if($q)
    {
      echo "<script>window.location='state.php'</script>";
    }
    else
    {
      echo mysqli_error($cn);
    }
?>