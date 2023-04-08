<?php
class user{
	public function login($conn, $formData){
		$query ="SELECT * FROM hotel_user WHERE email='".$formData['username']."' AND password ='".md5($formData['password'])."'";
		// print_r($query);die;
		
		$result = mysqli_query($conn, $query);
		 // print_r($result);die;
		if (mysqli_num_rows($result)) {
			return mysqli_fetch_assoc($result);
		}else{
		 	return false;
		}
	}
}
//closing of class


// Start new class..
class signup{
	public function sign($conn, $formData){
		$sql ="SELECT email  FROM hotel_user WHERE email ='".$formData['email']."'";
		$result= mysqli_query($conn,$sql);

		if ($result->num_rows > 0){
			return false;
		}else{
			$query = "INSERT INTO hotel_user(name, email, password, phone, gender) VALUES('".$formData['name']."','".$formData['email']."','".md5($formData['password'])."','".$formData['mobile']."','".$formData['gender']."')";
			//print_r($query);die;
			$total= mysqli_query($conn,$query);
			//print_r($total);die;
			return true;
		}

	}
}
?>