<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style type="text/css">
		#loading
   		 {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
    	}
    	.back{
    		background: url('images/top-banner.png') no-repeat center;
    		 width: 1140px;
    		height: 500px;
    	}
	</style>
</head>
<body onload="myfunction()">
	<div id="loading">
        
    </div>
	<?php   include('header.php');?>
	<div class="container">
		<div class="banner">
			<div class="back">
				<h1 style="text-align: center;padding-top:200px;color: #fff;font-size: 50px; ">We make healthcare</br>
				Understandable, Accessible and Affordable.</h1>
			</div>
			<div style=" width:100%; ">
				<h1 style="text-align: center;color:; "><u>About PharmaC</u></h1>
				<br> 
				<div class="row" style="border: 1px solid black;padding: 50px;">
					<div class="col-sm-4" >
						<div style="margin-left: 100px;">
						<img src="images/medicine-icon.png">
						</div>
						<br>
						<div>
							<b style="padding:90px;   ">E-Pharmacy</b><br>
							<p style="padding-left: 90px;">Order medicines and health products online and get it delivered
							at home from licensed pharmacies</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div style="margin-left: 100px;">
						<img src="images/ask-a-doctor-icon.png">
						</div>
						<br>
						<div>
							<b style="padding:90px;   ">Online Consultations</b><br>
							<p style="padding-left: 90px;">Consult qualified and registered doctors on chat for free</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div style="margin-left: 100px;">
						<img src="images/authentic.png">
						</div>
						<br>
						<div>
							<b style="padding:90px;   ">Authentic Information</b><br>
							<p style="padding-left: 90px;">Read medicine and health content written by qualified doctors and health professionals</p>
						</div>
					</div>
					
				</div>
				<div>
						<br>
						<p style="padding-left: 90px; font-size: 18px;padding-top: 10px; ">www.PharmaC.com brings to you an online platform, which can be accessed for all your health needs. We are trying to make healthcare a hassle-free experience for you. Get your allopathic, ayurvedic, homeopathic medicines, vitamins & nutrition supplements and other health-related products delivered at home. Lab tests? That too in the comfort of your home. Doctor consult? Yes, we got that covered too.</p>
					</div>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>

	<script>
      var preloader=document.getElementById('loading');

      function myfunction()
      {
        preloader.style.display='none';
      }
  </script>
</body>
</html>