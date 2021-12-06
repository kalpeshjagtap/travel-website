<?php 
	session_start();
	include("connection.php");
	include("functions.php");

	$nameErr = $emailErr = $usernameErr = $passwordErr = $contactErr = $passwordrepErr = "";
	$name = $email = $password = $username = $contact = $passwordrep = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(empty($_POST['full_name'])) {
			$nameErr = "Name is required!";
		} 
		else {
			$name = $_POST["full_name"];
			// check if name is valid
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Enter valid name!";
			}
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required!";
		} 
		else {
			$email = $_POST["email"];
			// check if e-mail address is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format!";
			}
		}

		if(empty($_POST['user_name'])) {
			$usernameErr = "Username is required!";
		} 
		else {
			$username = $_POST["user_name"];
			// check if username is not already in use
			$query = "select * from user_data where user_name = '$username'";
			$result = mysqli_query($con, $query);
	
			if (mysqli_num_rows($result) > 0) {
				$usernameErr = "Username already in use!";
			}
		}

		if(empty($_POST['phone'])) {
			$contactErr = "Contact number is required!";
		} 
		else {
			$contact = $_POST["phone"];
			// check if phone number is valid
			if (!preg_match("/^[0-9]*$/",$contact) || strlen($contact) != 10) {
				$contactErr = "Enter valid contact number!";
			}
		}

		if(empty($_POST['password'])) {
			$passwordErr = "Password is required!";
		} 
		else {
			$password = $_POST["password"];
			// check if password is valid
			if (preg_match("/\s/",$password)){
				$passwordErr = "Password cannot contain blank-spaces!";
			}
			if (!preg_match("/[0-9]/",$password)){
				$passwordErr .= "<br>Password must contain atleast one digit!";
			}
			if (!preg_match("/[A-Z]/",$password)){
				$passwordErr .= "<br>Password must contain atleast one uppercase letter!";
			}
			if (!preg_match("/[a-z]/",$password)){
				$passwordErr .= "<br>Password must contain atleast one lowercase letter!";
			}
			if (strlen($password) < 8){
				$passwordErr .= "<br>Password must contain atleast 8 characters";
			}
		}

		if(empty($_POST['psw-repeat'])) {
			$passwordrepErr = "Enter password to confirm!";
		} 
		else {
			$passwordrep = $_POST["psw-repeat"];
			// check if passwords match
			if ($password != $passwordrep) {
				$passwordrepErr = "Passwords must match!";
			}
		}

		if(empty($nameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr) && empty($contactErr) && empty($passwordrepErr))
		{
			//save to database
			$query = "insert into user_data (name,email_id,password,user_name,contact) values ('$name','$email','$password','$username','$contact')";
			if(!mysqli_query($con, $query)){
				die(mysqli_error($con));
			}
			header("Location: login.php");
			die;
		}	
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<style type="text/css">

	* {box-sizing: border-box}
	
	body {
		font-family: 'Poppins', sans-serif;
        background-image: url(./images/bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
	}


	.container {
		display: flex;
		flex-direction: column;
		align-items: center;
 	 	padding: 16px;
	}


	input[type=text], input[type=password], input[type=email] {
  		width: 33%;
  		padding: 15px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
	  	background: #f1f1f1;
  		border-radius: 4px;
	}

	input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  		background-color: #ddd;
  		outline: none;
	}

	.registerbtn {
  		background-color: #20262b;
  		color: white;
  		padding: 16px 20px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: 33%;
  		opacity: 0.9;
  		border-radius: 4px;
	}

	.registerbtn:hover {
  		opacity:1;
	}

	a {
  		color: dodgerblue;
	}


	.signin {
  		background-color: #dbeadf;
  		text-align: center;
  		padding: 12px 20px;
  		width: 33%;
  		border-radius: 4px;
	}

	.error {
		color: #FF0000;
	}
	</style>

	<div id="box">
		
		<form method="post">
			<div class="container">
				<h1 style="color: white;">SIGN UP</h1>
    			<h3 style="color: black;">Please fill in this form to create an account.</h3>
    		
				<input id="text" type="text" placeholder="Enter Full Name" name="full_name" value="<?php echo $name;?>">
				<span class="error"><?php echo $nameErr;?></span>
				<input id="text" type="text" placeholder="Enter Username" name="user_name" value="<?php echo $username;?>">
				<span class="error"><?php echo $usernameErr;?></span>
				<input id="text" type="email" placeholder="Enter Email Id" name="email" value="<?php echo $email;?>">
				<span class="error"><?php echo $emailErr;?></span>
				<input id="text" type="text" placeholder="Enter Contact Number" name="phone" value="<?php echo $contact;?>">
				<span class="error"><?php echo $contactErr;?></span>
				<input id="text" type="password" placeholder="Enter Password" name="password" value="<?php echo $password;?>">
				<span class="error"><?php echo $passwordErr;?></span>
				<input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" value="<?php echo $passwordrep;?>">
				<span class="error"><?php echo $passwordrepErr;?></span>			
	
				<p>By creating an account you agree to our <a href="tnc.html">Terms & Privacy</a>.</p>
				<input id="button" type="submit" class="registerbtn" value="Signup"><br>
				<div class="box signin">
				<p>Already have an account? <a href="login.php">Click to Login</a>.</p>
				</div>
			</div>
		</form>

	</div>
</body>
</html>