<?php 

session_start();

	include("connection.php");
	include("functions.php");

	$usernameErr = $passwordErr = "";
	$password = $username  = "";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(empty($_POST['username'])) {
			$usernameErr = "Username is required!";
		} 
		else {
			$username = $_POST["username"];
		}

		if(empty($_POST['password'])) {
			$passwordErr = "Password is required!";
		} 
		else {
			$password = $_POST["password"];
		}

		if(empty($usernameErr) && empty($passwordErr))
		{
			//read from database
			$query = "select * from user_data where user_name = '$username'";
			$result = mysqli_query($con, $query);

			if(mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password)
				{
					$_SESSION['user_id'] = $user_data['id'];
					header("Location: index.php");
					die;
				}
				else
				{
					$passwordErr = 'Invalid password!';
				}
			}
			else
			{
				$usernameErr = 'Invalid username!';
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<title>Login</title>
</head>
	<style type="text/css">
	
	* {
		box-sizing: border-box
	}

	body {
		font-family: 'Poppins', sans-serif;
        background-image: url(./images/bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;            background-attachment: fixed;
	}

	.container {
		display: flex;
		flex-direction: column;
		align-items: center;
  		padding: 16px;
}

	input[type=text], input[type=password] {
  		width: 33%;
  		padding: 15px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
  		background: #f1f1f1;
  		border-radius: 4px;
	}

	input[type=text]:focus, input[type=password]:focus {
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
<body>
	<div id="box">
		
		<form method="post">
			<div class="container">
			<h1 style="color: white;">LOGIN</h1>
			<h3 style="color: black;">Please Login Your account.</h3>

			<input id="text" type="text" placeholder="Username" name="username" value="<?php echo $username;?>">
			<span class="error"><?php echo $usernameErr;?></span>
			<br>
			<input id="text" type="password" placeholder="Password" name="password" value="<?php echo $password;?>">
			<span class="error"><?php echo $passwordErr;?></span>
			<p>By creating an account you agree to our <a href="tnc.html">Terms & Privacy</a>.</p>
			<input id="button" type="submit" class="registerbtn" value="Login"><br>
			<div class="box signin">
			<p>Don't have an account?<a href="signup.php">Click to Signup</a></p>
			</div>		
			</div>
		</form>

	</div>
</body>
</html>