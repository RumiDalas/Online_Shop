<?php 
	include_once'login/dbconnect.php';
	$sql="SELECT * FROM booking JOIN vehicle ON booking.v_id=vehicle.v_id";
	$res=mysqli_query($conn,$sql);
	?>
<!DOCTYPE html>
<html>
	<head>
	</head>
		<title> Table </title>
		<style>
			table,th,td{
				border:1px solid black;
				border-collapse:collapse;
				overflow: hidden;
			}
			th,td{
				padding:5px;
				text-align:left;
			}
			.button{
				overflow:hidden;
				margin-top:20px ;
				padding-left: 510px;
				width:100%;
				height:auto;
			}
			.button a {
    				background-color: #4CAF50; /* Green */
				    border-radius:5px;
				    color: white;
				    padding: 15px 32px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
					}
			.button a:hover{
				color:red;
				background-color: transparent;
				border:2px solid #4CAF50;
			} 
		</style>
	<body>
		<h2 style="text-align:center;text-decoration:underline;"><b>Booking Table</b></h2>
		<table style="width:100%">
			<tr>
				<td> Vehicle ID</td>
				<td>First Name</td>
				<td>last Name</td>
				<td>Vehicle Model</td>
				<td>Email</td>
				<td>Price</td>
				<td> Address</td>
				<td> Mobile</td>
				
			</tr>
			<?php
				while ($Row = mysqli_fetch_assoc($res)) { ?>
			<tr>
				<td><?php echo $Row['v_id']; ?></td>
				<td><?php echo $Row['fname']; ?></td>
				<td><?php echo $Row['lname']; ?></td>
				<td><?php echo $Row['model_name']; ?></td>
				<td><?php echo $Row['email']; ?></td>
				<td><?php echo $Row['b_price']; ?></td>
				<td><?php echo $Row['address']; ?></td>
				<td><?php echo $Row['mobile']; ?></td>
				
			</tr>
		<?php }?>	
		</table>
		<div class="button"> 
			<a href="index.php">HOME</a>
		</div>
	</body>
</html>