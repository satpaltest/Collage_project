<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Phone Number Verification</h1>
			<div class="card">
				<div class="card-body">
					<div class="col-md-6">

						<form action="" method="POST">
							<div class="form-group">
								<label for="exampleInputPassword1">Mobile number</label>
								<input type="text" name="mobile" class="form-control" id="number" placeholder="Enter your number">

							</div>
							<button type="submit" name="sendotp" class="btn btn-success">Send OTP</button>
							
						</form>
				</div>
			</div>
			
		</div>
		
	</div>

</body>
</html>
<!-- // <?php
// $authKey = "YourAuthKey";
// $senderId = "102234";

// if (isset($_POST['sendotp'])) {
	
// 	$mobileNumber =$_POST['number'];
// 	$message = 'Welcome';

// 	$postData = array(
//     'authkey' => $authKey,
//     'mobiles' => $mobileNumber,
//     'message' => $message,
//     'sender' => $senderId,
//     'route' => $route
// );

// //API URL
// $url="http://api.msg91.com/api/sendhttp.php";

// }


?> -->
























<?php



//Your authentication key
// $authKey = "YourAuthKey";

// //Multiple mobiles numbers separated by comma
// $mobileNumber = "9999999";

// //Sender ID,While using route4 sender id should be 6 characters long.
// $senderId = "102234";

// //Your message to send, Add URL encoding here.
// $message = urlencode("Test message");

// //Define route 
// $route = "default";
// //Prepare you post parameters
// $postData = array(
//     'authkey' => $authKey,
//     'mobiles' => $mobileNumber,
//     'message' => $message,
//     'sender' => $senderId,
//     'route' => $route
// );

// //API URL
// $url="http://api.msg91.com/api/sendhttp.php";
?>