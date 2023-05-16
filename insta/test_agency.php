<?php

$kk=$this->db->get_where('seo',array('seo_id'=>4))->result();
foreach ($kk as $keyk) {
    $disc='';
    $disc=$keyk->discount;
}


$book=$this->db->get_where('booking_master',array('bid'=>$bid))->result();
$amt='';
$phone='';
$bname='';
$email='';
$booking_id='';
$booking_id='Payment For Booking'.'_'.$bid;


foreach ($book as $keyb) 
{

    if($keyb->trip_type=='fix')
    {  $amt1=($keyb->final_amount-$disc);   }
    else
    { $amt1=$keyb->final_amount; }

 $udata=$this->db->get_where('user_register',array('u_id'=>$keyb->user_id))->result();
    foreach ($udata as $keyu) 
    {
        $phone=$keyu->contact;
        $bname=$keyu->name;
        $email=$keyu->email;
	
    }

$amt=$keyb->final_amount;
}

include('src/Instamojo.php');
$api = new Instamojo\Instamojo('e80f795decf3a06bb59f8624d71770ea', '01a7190d0246617770636f4f55686961','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
            'purpose' => $booking_id,
            'status'=>'completed',
          'amount' => $amt1,
            //'amount' => 9,
            'phone' => $phone,
            'buyer_name' => $bname,
            'redirect_url' => 'http://viataxis.com/Agency/thankyou_bill',
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





