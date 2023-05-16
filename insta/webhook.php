<?php 
   mysql_connect("localhost","neeasoft_vastra","Vedam@Neea1") or die(mysql_error());

   mysql_select_db("neeasoft_vastra") or die(mysql_error());

   $con = mysqli_connect('localhost','neeasoft_vastra','Vedam@Neea1','neeasoft_vastra');

$data= $_POST;
$payment_id=$data['payment_id'];

$payment_request_id = $data['payment_request_id'];
$pp=$data['purpose'];
$id=explode('_',$pp);
$idd=$id[1];


?>
<?php

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without <>
$mac_calculated = hash_hmac("sha1", implode("|", $data), "ea4706ad10a24631a94ce7aa9c9a9c14");
if($mac_provided == $mac_calculated){
    if($data['status'] == "Credit"){
mysql_query("INSERT INTO webhook values('','$payment_id','$payment_request_id','success','$idd')");
//header('location:userprofile.php?success');

    }
    else{
		mysql_query("INSERT INTO webhook values('','$payment_id','$payment_request_id','failed','$idd')");
	//	redirect(base_url());
    }
redirect(base_url());
}
else{
    echo "MAC mismatch";
}
?>