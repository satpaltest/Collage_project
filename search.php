<?php
//error_reporting(0);
require "conn.php";
include "include/header.php";
if(isset($_POST['submit'])){
	//print_r($_POST);die;
	$hn= $_POST['name'];
	$hr= $_POST['rooms'];
	$hp= $_POST['price'];
	$hl= $_POST['location'];	
	

	if(!empty($hn) && !empty($hr))
	{
		$query = "SELECT * FROM hotel_guest WHERE h_name='$hn' AND h_rooms='$hr'";
		$data =mysqli_query($conn, $query);
		$total =mysqli_num_rows($data);
	}

	elseif(!empty($hn) && !empty($hp))
	{
		$query = "SELECT * FROM hotel_guest WHERE h_name='$hn' AND h_prices='$hp'";
		$data =mysqli_query($conn, $query);
		$total =mysqli_num_rows($data);
	}

	elseif(!empty($hn) && !empty($hl))
	{
		$query = "SELECT * FROM hotel_guest WHERE h_name='$hn' AND h_location='$hl'";
		$data =mysqli_query($conn, $query);
		$total =mysqli_num_rows($data);
	}
	elseif(!empty($hr) && !empty($hp))
	{
		$query = "SELECT * FROM hotel_guest WHERE h_rooms='$hr' AND h_prices='$hp'";
		$data =mysqli_query($conn, $query);
		$total =mysqli_num_rows($data);
	}
	elseif(!empty($hr) && !empty($hl))
	{
		$query = "SELECT * FROM hotel_guest WHERE h_rooms='$hr' AND h_location='$hl'";
		$data =mysqli_query($conn, $query);
		$total =mysqli_num_rows($data);
	}

	elseif(!empty($hp) && !empty($hl))
	{
		$query = "SELECT * FROM hotel_guest WHERE h_prices='$hp' AND h_location='$hl'";
		$data =mysqli_query($conn, $query);
		$total =mysqli_num_rows($data);
	}


	else
	{
	$query = "SELECT * FROM hotel_guest WHERE h_rooms='$hr' OR h_name='$hn' OR h_prices='$hp' OR h_location='$hl'";
	$data =mysqli_query($conn,$query);
	$total =mysqli_num_rows($data);
	}
if($total !=0){
?>
	<!-- table css-->
	<style>
	td{
		padding: 15px;
		}
		table {
		counter-reset: tableCount;
		}
	.counterCell:before {
		content: counter(tableCount);
		counter-increment: tableCount;
	}
	</style>
	
	<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-12">
				<div class="breadcrumb-content text-center">
					<h2 class="page-title"> Our Room</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"> Room</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="card-body">
	<table  class="table table-bordered table-hover">
		<tr>
			<th class ="bg-info">SrNo.</th>
			<th class ="bg-info">Hotel Name</th>
			<th class ="bg-info">H Price</th>			
			<th class ="bg-info">H Room</th>			
			<th class ="bg-info">H Loaction</th>
			<th class ="bg-info">BOOKING</th>
		</tr>
		<?php 
			while($result=mysqli_fetch_assoc($data))
			{
				echo"
					<tr>
						<td class='counterCell'></td>				
						<td>".$result['h_name']."</td>
						<td>".$result['h_prices']."</td>
						<td>".$result['h_rooms']."</td>
						<td>".$result['h_location']."</td>
					"?>
						<td><a href="#"><button>View</button></a></td>
						<?php "
					</tr>";		
		}
}else{
			echo"Sorry Guest House Not available "; 
		}
	}	    

	?>
	</table>	
	</div>
<?php 
	include "include/footer.php";
?>

