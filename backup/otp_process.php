<?php
session_start();

$ch = $_POST['ch'];

switch ($ch) {
	// case 'send_otp':
		
			

	// 		$num = $_POST['mobile'];
			
	// 		$otp = rand(10000,999999);
	// 		$_SESSION['otp']  = $otp;

	// 		$curl = curl_init();








	// 		$response = curl_exec($curl);
	// 	$err = curl_error($curl);

	// 	curl_close($curl);

	// 	if ($err) {
	// 	  echo "cURL Error #:" . $err;
	// 	} else {
	// 	  echo 'success';
	// 	}
						

	// 	break;

		case 'verify_otp':


				$user_otp = $_POST['otp'];
				$verify_otp = $_SESSION['otp'];

				if($verify_otp == $user_otp){

					echo "success";
				}


		break;


	default:
		# code...
		break;
}

?>