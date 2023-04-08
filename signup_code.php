<?php
 session_start();
require "conn.php";
require "classes/signup_class.php";
if(isset($_POST['submit'])){
	//echo "<pre>"; print_r($_POST);die;
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['mobile']) && !empty($_POST['gender'])){
		if($_POST['password'] == $_POST['confirm_password']){
			// create object
			$signupObj = new signup();
			$total = $signupObj->sign($conn, $_POST);
			if($total==false){
				//$_SESSION['postedData'] = $_POST;
				echo"<p style='color:red'>Email is already taken.</p>";
				//header("location:signup.php");
				exit;
			}else{				
				//unset($_SESSION['postedData']);
				$_SESSION['success'] = "User Registerd Sucessfully";
				header('location:signup.php');
				// echo "<p style='color:red'>User Registerd Sucessfully</p>";
				//header("location:signup.php");
				exit;
			}		
		}else{	
			$_SESSION['error'] = " The  Password Is Not Match.";
				header('location:signup.php');
			//$_SESSION['postedData'] = $_POST;
			//echo "<p style='color:red'>Plz enter the correct password</p>";
			//header("location:signup.php");
			exit;				
		}
	}else{
		$_SESSION['error'] = " All Feiled are Requried";
		header('location:signup.php');
		//$_SESSION['postedData'] = $_POST;
		//echo "<p style='color:red'>All Feiled are Requried</p>";
		//header("location:signup.php");
		exit;
	}
}
?>