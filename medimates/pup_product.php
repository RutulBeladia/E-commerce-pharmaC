<?php
  global $flag;
  $flag=1;

  $mcate=$_POST['mcate'];
  $cate=$_POST['cate'];
  $subcate=$_POST['subcate'];
  $pname=$_POST['pname'];
  $pqty=$_POST['pqty'];
  $pby=$_POST['pby'];
  $stock=$_POST['stock'];
  $sell=$_POST['sprice'];
  $price=$_POST['price'];
  $desc=$_POST['desc'];
  $imgname=$_FILES['pimg']['name'];
  $imgtmpname=$_FILES['pimg']['tmp_name'];
  $fileupload= "upload/".$imgname;
  move_uploaded_file($imgtmpname,$fileupload);

  $cn=mysqli_connect('localhost','root','','medimates');

  if ($flag==1)
  {
      $pid=$_POST['pid'];
      $update=mysqli_query($cn,"update product set product_category='$mcate',category='$cate',sub_category='$subcate',product_name='$pname',product_image='$fileupload',total_product_quantity='$pqty',product_by='$pby',stock='$stock',selling_price='$sell',product_price='$price',description='$desc' where product_id='$pid' ");

      if ($update) 
      {
        echo "<script>alert('record updated.!!!');window.location='add_product.php'</script>";
      }
      else
      {
        echo "<script>alert('record not updated');</script>";
      }
  }

?>
