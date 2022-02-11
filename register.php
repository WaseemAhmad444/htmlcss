<?php 

include("includes/connection.php");

$output = "";

if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$uname = $_POST['uname'];
	$gender = $_POST['gender'];
	$role = $_POST['role'];
	$pass = $_POST['pass'];
	$c_pass = $_POST['c_pass'];

	$error = array();

	if (empty($fname)) {
		$error['error'] = "Firstname is Empty";
	}else if(empty($sname)){
		$error['error'] = "Surname is empty";
	}else if(empty($uname)){
		$error['error'] = "username is empty";
	}else if(empty($gender)){
		$error['error'] = "Select Gender";
	}else if(empty($role)){
		$error['error'] = "Select role";
	}else if(empty($pass)){
		$error['error'] = "Enter Password";
	}else if(empty($c_pass)){
		$error['error'] = "Confirm Password";
	}else if($pass != $c_pass){
		$error['error'] = "Both password do not match";
	}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
		$query = "INSERT INTO users(firstname,surname,username,gender,role,password) VALUES('$fname','$sname','$uname','$gender','$role','$pass')";
		$res = mysqli_query($connect,$query);

		if ($res) {
			$output .= "You have successfully registered";
			header("Location:index.php");
		}else{
			$output .= "Failed to register";
		}
	}
}



 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>DRYME</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  
</head>
<body style="background-image: url(fyp/img/carousel-1.jpg);">




<div class="container">
	<div class="col-md-12">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6 shadow-sm" style="margin-top:100px;">
				<form method="post">
					<h3 class="text-center my-3">Register</h3>

					<div class="text_left"  ><?php echo $output; ?></div>

					<label class="text-dark">Firstname</label>
					<input type="text" name="fname" class="form-control my-2" placeholder="Enter Firstname" autocomplete="off">

					<label class="text-dark">Sername</label>
					<input type="text" name="sname" class="form-control my-2" placeholder="Enter Surname" autocomplete="off">


					<label class="text-dark">Username</label>
					<input type="text" name="uname" class="form-control my-2" placeholder="Enter Username" autocomplete="off">

					<label class="text-dark">Select Gender</label>
					<select class="form-control my-2" name="gender">
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					 
					 <label class="text-dark">Select type</label>
					<select name="role" class="form-control my-2">
						<option value="">Selete type</option>
						<option value="Student">Customer</option>
						<option value="Teacher">Store manager</option>
						<option value="manager">Delivery Agent</option>
					</select>

					<label class="text-dark">Password</label>
					<input type="password" name="pass" class="form-control my-2" placeholder="Enter Password">

					<label class="text-dark">Confirm Password</label>
					<input type="password" name="c_pass" class="form-control my-2" placeholder="Enter Confirm Password">

					<input  type="submit" name="register" class="btn btn-success"   value="Register">
				</form>
			</div>
		</div>
	</div>
</div>

<div class="" style="margin-top: 30px;"></div>
</p>

</body>
</html>