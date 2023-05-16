<?php 
      $cnt=$_POST['cnt'];
      $eml=$_POST['eml'];
      $footer=$_POST['footer'];
      $imgname=$_FILES['img']['name'];
      $imgtmpname=$_FILES['img']['tmp_name'];
      $fileupload= "logo/".$imgname;
      $con=mysqli_connect('localhost','root','','medimates');
      $q=mysqli_query($con,"update site_setting set logo='$fileupload', contact='$cnt',email='$eml',footer_text='$footer' where site_id='1'")or die(mysqli_error($cn));
      if($q)
      {
        move_uploaded_file($imgtmpname, $fileupload);
        echo "<script>alert('updated');window.location='sitesetting.php'</script>";
      }
      else
      {
        echo "<script>alert('not upadte');</script>";
      }
?>