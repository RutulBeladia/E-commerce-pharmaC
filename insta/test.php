<?php 

include('src/Instamojo.php');
$api = new Instamojo\Instamojo('40cbf122af4d1dfb45a568b8f512310b', 'e130b440d1d5e2f8c790cb5d6a936503','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
            'purpose' =>'Thank You For Purchasing Product From Our Medmates Online Pharmacy site.',
            'status'=>'completed',
          'amount' => $_REQUEST['total'],
            //'amount' => 9,
            'phone' => $_REQUEST['phno'],
            'buyer_name' => $_REQUEST['Name'],
            'redirect_url' => 'http://localhost/medistore/aboutus.php',
            'webhook' => '',
            'send_email' => true,
            'send_sms' => true,
            'email' =>$_REQUEST['email'],
            'allow_repeated_payments' => false
        ));
//print_r($response);
  //$pay_url = $response['longurl'];
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
};
try {
    $response = $api->paymentRequestStatus($response['id']);
   header('location:'.$response['longurl']);
   
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}  

?>





