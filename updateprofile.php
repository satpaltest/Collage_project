<?php
session_start();
error_reporting(0);
require "conn.php";

if(empty($_SESSION['username'])){
header('location:index.php');exit;
}
	$id =  $_SESSION['id'];	
  $query = "SELECT * FROM hotel_user WHERE id = '$id'";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html> 
<html>
<head>
		<title>Update Profile</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
	<body class="bg-cyan">
		<div class="body body-s">
		
			<form action="updateprofile_code.php" method="POST"class="sky-form">
				<header>Update Profile Form
					<?php 	if(!empty($_SESSION['error'])){
								echo "<h5 style='color:red'>".$_SESSION['error']."</h5>";
								}
								if(!empty($_SESSION['success'])){
								echo "<h5 style='color:green'>".$_SESSION['success']."</h5>";
							} 
					?>
				</header>
				
				<fieldset>					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" placeholder="Username" name="username" value="<?php echo $result['name'];?> ">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" name="email" value="<?php echo $result['email'];?>"disabled>
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append fa fa-mobile"></i>
							<input type="text" placeholder="Mobile Number" name="mobile" value="<?php echo $result['phone'];?>">
							<b class="tooltip tooltip-bottom-right">Only latin 10 digit numbers</b>
						</label>
					</section>
					<section>
						<label class="select">
							<select name="gender">
								<option value="0" selected disabled>Gender</option>
								<option value="M"<?php if($result['gender']==1){echo selected;}?>>Male</option>
								<option value="F"<?php if($result['gender']==2){echo selected;}?>>Female</option>
								<option value="O"<?php if($result['gender']==3){echo selected;}?>>Other</option>
							</select>
							<i></i>
						</label>
					</section>
					
					<section>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I agree to the Terms of Service</label>
					</section>
				</fieldset>
				<footer>
					<input type="hidden" name="id" value=<?php echo $id;?> >
					<button type="submit" class="button" name="submit">Update</button>
					<a href="#" class="text-center">Click Update to save Changes</a>
				</footer>
				<?php unset($_SESSION['postedData']); ?>
			</form>
			
			
		</div>
	</body>
	<?php if(!empty($_SESSION['success'])){unset($_SESSION['success']);}?>
	<?php if(!empty($_SESSION['error'])){unset($_SESSION['error']);}?>
</html>
