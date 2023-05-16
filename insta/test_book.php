<?php
ob_start();           

$book=$this->db->get_where('agency',array('aid'=>$this->session->userdata('aid')))->result();
$amt='';
$phone='';
$bname='';
$email='';
$booking_id='';
$booking_id='New Booking Purchase'.'_'.$this->session->userdata('aid');
 


foreach ($book as $keyb) 
{
      $phone=$keyb->phone;
        $bname=$keyb->agency_name;
        $email=$keyb->email;
        $amt=$keyb->last_amount;
    
}
 


include('src/Instamojo.php');
$api = new Instamojo\Instamojo('e80f795decf3a06bb59f8624d71770ea', '01a7190d0246617770636f4f55686961','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
            //'purpose' => "New Booking Purchase",
             'purpose' => $booking_id,
            'status'=>'completed',
             'amount' => $amt,
            'phone' => $phone,
            'buyer_name' => $bname,
            'redirect_url' => 'http://viataxis.com/Agency/thankyou_payment',
            'webhook' => 'http://viataxis.com/Agency/webhook',
            'send_email' => true,
            'send_sms' => true,
            'email' =>$email,
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


