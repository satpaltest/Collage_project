<?php
session_start();
require 'conn.php';
require 'classes/signup_class.php';
if(isset($_POST['submit'])){
 //print_r($_POST);die;
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$userObj = new user();
		$result  = $userObj->login($conn, $_POST);
			if($result){
			$_SESSION['username1'] = $result['name']; 
			$_SESSION['id'] = $result['id']; 
				//echo "welcome";
			header('location:index.php');

			}else{
			$_SESSION['error'] = "passsword is not match";
			 header('location:http://localhost/front_end/');
			}
	}else{
			$_SESSION['error'] =  "all fields are required";
			// header('location:login.php');
	}
}
?>