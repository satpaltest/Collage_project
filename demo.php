<?php
session_start();

$ch = $_POST['ch'];

switch ($ch) {

		case 'verify_otp':


				$user_otp = $_POST['sendotp'];
				$verify_otp = $_SESSION['verifyotp'];

				if($verify_otp == $user_otp){

					echo "success";
				}


		break;


	default:
		
		break;
}

?>