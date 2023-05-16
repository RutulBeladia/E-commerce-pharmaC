<?php 
    include('src/Instamojo.php');
$api = new Instamojo\Instamojo('c54b34df69e82f4ed50f3061db265e69', '9382aa55e53bab841faddd3a880d5f14','https://www.instamojo.com/api/1.1/');
$payid= $_GET["payment_request_id"];
try
{
    $response=$api->paymentRequestStatus($payid);
    
if($response['status'] =='Credit')
{   
                                                                             
  header('location:http://www.aksheshagoldbusiness.com/profileuser.php?payment_failed='$id);
        }
    

else
{
        header('location:http://www.aksheshagoldbusiness.com/profileuser.php?payment_success='$id); 
} 
    //echo "<h4>Payment ID".$response['payments'][0]['payment_id']."</h4>";
    //echo "<h4>Payment NAME".$response['payments'][0]['buyer_name']."</h4>";
    //echo "<h4>Payment EMAIL".$response['payments'][0]['buyer_email']."</h4>";
    //echo "<h4>Payment EMAIL".$response['payments'][0]['status']."</h4>";
//    echo "<h4>Payment Purpose".$response['purpose']."</h4>";
  // print_r($response);
    // $id=$response['purpose'];      
  //  echo $stats=;
    
                       
}

catch (Exception $e) {
    print('Error: ' . $e->getMessage());
};

?>