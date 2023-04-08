<?php
session_start();
error_reporting(E_ALL);
require 'conn.php'; 
require "classes/user_profile.php";   

 if(isset($_POST['submit'])){
      //print_r($_POST);die;
      if (!empty($_POST) && count(array_filter($_POST))=='4'){
        //function call
      $updateObj        = new updateuserprofile();
      $result           = $updateObj->profileupdate($conn,$_POST);

			if ($result){
          	unset($_SESSION['postedData']);
			$_SESSION['success'] = 'User update Successfully';
			header("location:http://localhost/front_end/userprofile.php");
			exit;
			}else{
			$_SESSION['postedData'] = $_POST;
			$_SESSION['error'] = 'Error in Update';
			header("location:http://localhost/front_end/userprofile.php");
			exit;
         }     
      }else{
        $_SESSION['postedData'] = $_POST;
		$_SESSION['error'] = 'All Field are Requried';
         header("location:http://localhost/front_end/userprofile.php");
		exit;
        }
  }
    
?>