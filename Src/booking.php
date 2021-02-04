<?php
	include_once 'login/dbconnect.php';
	if(isset($_POST['insert']))
	{
		$vehicle=$_POST['vid'];
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$adrs=$_POST['adrs'];
		$nid=$_POST['nid'];

		  $query = "INSERT INTO booking(v_id,fname, lname, email,mobile,address,nid) VALUES ('$vehicle','$fname','$lname','$email','$mobile','$adrs','$nid')";
		  $result = mysqli_query($conn,$query);

		    // check if mysql query successful

		      if(! $result ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            else{
            	  echo "Entered data successfully\n";
            	  header('Location:booking_confirm.php');
            
            }
            
          
            mysqli_close($conn);
        
         
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/client_reg.css">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Booking</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<form class="" method="post" >

						<div class="form-group">
							<label for="nid" class="cols-sm-2 control-label">Vehicle id</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-align-justify" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="vid" id="vid"  placeholder="Enter Vehicle ID" />
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="firstname" id="name"  placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lastname" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="mobile" class="cols-sm-2 control-label">Your Mobile Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter your Mobile Number"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="adrs" class="cols-sm-2 control-label">Your Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adrs" id="adrs"  placeholder="Enter your Address"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="adrs" class="cols-sm-2 control-label">Your NID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nid" id="nid"  placeholder="Enter your NID "/>
								</div>
							</div>
						</div>


						<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg" name="insert">Register</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html> 
