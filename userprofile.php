<?php 
session_start();
error_reporting(0);
include('conn.php');

if(empty($_SESSION['username'])) {
  header('location:index.php');exit;
}
$id =  $_SESSION['id'];?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<style>
.body{
	margin-left:30%;
}
			.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
	.styled-table thead tr {
	    background-color: #4d79ff;
	    color: #ffffff;
	    text-align: left;
	}
	.styled-table th,
	.styled-table td {
	    padding: 12px 15px;
	}
	.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
	}

	.styled-table tbody tr:nth-of-type(even) {
	    background-color: #f3f3f3;
	}

	.styled-table tbody tr:last-of-type {
	    border-bottom: 2px solid #668cff;
	}
	.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
	}
	</style>
</head>
<body class="body">
<?php
          $query = "SELECT * FROM hotel_user WHERE id='$id' ";
          $data = mysqli_query($conn,$query);
          $total = mysqli_num_rows($data);

          if ($total != 0) {
          ?>
		  <?php 	if(!empty($_SESSION['error'])){
								echo "<h5 style='color:red'>".$_SESSION['error']."</h5>";
								}
								if(!empty($_SESSION['success'])){
								echo "<h5 style='color:green'>".$_SESSION['success']."</h5>";
							} 
			?>
	<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>Gender</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
             while ($result = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                      <td><?php echo $result['name'] ?></td>
                      <td><?php echo $result['email'] ?></td>
                      <td><?php echo $result['phone'] ?></td>
                      <td><?php echo $result['gender'] ?></td>
                      <td><a href="updateprofile.php?id=<?php echo $result['id']?>"><button type='button' class='btn btn-outline-info'>Update</button></a></td>
                      
                    </tr>
                <?php }
                  } else {
                  echo "No Record Found ?";
                  }
                  ?>
    </tbody>
</table>

</body>
<?php if(!empty($_SESSION['success'])){unset($_SESSION['success']);}?>
<?php if(!empty($_SESSION['error'])){unset($_SESSION['error']);}?>
</html>