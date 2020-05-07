<!DOCTYPE html>

<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>sign up</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-content">
			<div class="form-left">
				<img src="images/form.jpg" alt="form">
				<p class="text-1">Sign Up</p>
				
			</div>
			<form class="form-detail" action="" method="post" id="myform">
				<div class="form-row">
					<label for="firstname">FIRSTNAME</label>
					<input type="text" name="firstname" id="firstname" class="input-text">
				</div>
				<div class="form-row">
					<label for="lastname">LASTNAME</label>
					<input type="text" name="lastname" id="lastname" class="input-text">
				</div>
				
				<div class="form-row">
					<label for="username">USERNAME</label>
					<input type="text" name="username" id="username" class="input-text">
				</div>				
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password" id="password" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="comfirm_password">CONFIRM PASSWORD</label>
					<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="submit">
					
				</div>
			</form>
		</div>
	</div>

	

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		
		$( "#myform" ).validate({
		  	rules: {
			    firstname: {
			      	required: true,
			      	firstname: true
			    },
			    lastname: {
			      	required: true,
			      	lastname: true
			    },
			    username: {
			      	required: true,
			      	username: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		firstname: {
		  			required: "Please Enter first name"
		  		},
		  		lastname: {
		  			required: "Please Enter last name"
		  		},
		  		username: {
		  			required: "Please enter an user name"
		  		},
		  		
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		comfirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body>
</html>

<?php
	$fn=$_GET['firstname'];
	$ln=$_GET['lastname'];
	$un=$_GET['username'];
	$pwd=$_GET['password'];
	$cpwd=$_GET['comfirm_password'];

	echo "$fn";
	echo "$ln";
	echo "$un";
	echo "$pwd";
	echo "$cpwd";

	$query="INSERT INTO LOGIN VALUES 	('$fn', '$ln', '$un', '$pwd' , '$cpwd')" ;

	$data = mysqli_query($conn, $query);

	// if($data){
	// 	echo "data inserted into database";
	// }
	// else {
	// 	echo "Failed to data inserted into database";
	// }



?>



