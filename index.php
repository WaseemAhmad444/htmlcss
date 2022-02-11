<?php 
session_start();
  include("includes/connection.php");

   
   $output = "";

  if (isset($_POST['login'])) {
  	   
  	   $uname = $_POST['uname'];
  	   $role = $_POST['role'];
  	   $pass = $_POST['pass'];

  	   if (empty($uname)) {
  	   	
  	   }else if(empty($role)){

  	   }else if(empty($pass)){

  	   }else{

         $query = "SELECT * FROM users WHERE username='$uname' AND role='$role' AND password='$pass'";
         $res = mysqli_query($connect,$query);

         if (mysqli_num_rows($res) == 1) {

         	  if ($role == "Student") {

         	  	$_SESSION['student'] = $uname;
         	  	header("Location: CustomerPage.php");
         	  	
         	  }else if($role == "Teacher"){
                
                $_SESSION['teacher'] = $uname;
                header("Location: teacher.php");


         	  }
			   else if($role == "manager"){
                
                $_SESSION['manager'] = $uname;
                header("Location: deliveryAgent.php");


         	  }
         	 $output .= "you have logged-In";
         }else{
             $output .= "Failed to login";
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



	<?php include("includes/header.php"); ?>

<div class="container">
	<div class="col-md-12">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6 shadow-sm" style="margin-top:100px;">
				<form method="post">
					<h3 class="text-center my-3">Login</h3>
					<div class="text-center"><?php echo $output; ?></div>
					<label>Username</label>
					<input type="text" name="uname" class="form-control my-2" placeholder="Enter Username" autocomplete="off">
					 
					 <label>Select type</label>
					<select name="role" class="form-control my-2">
						<option value="">Selete type</option>
						<option value="Student">Customer</option>
						<option value="Teacher">Store Manager</option>
						<option value="manager">Delivery Agent</option>
					</select>

					<label>Password</label>
					<input type="password" name="pass" class="form-control my-2" placeholder="Enter Password">

					<input type="submit" name="login" class="btn btn-success" value="Login">
					<p>Don't have an account? <a href="register.php">Sign up</a> </p>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>