<?php 
    session_start();
    include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    
    $id = $_SESSION["user_id"];
    $query = "select * from tours where id = $id";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<style type="text/css">
		* {
            box-sizing: border-box;
        }

		body{
			background-image: url(./images/bg.jpg);
        	background-size: cover;
        	background-repeat: no-repeat;
        	background-attachment: fixed;
			font-family: 'Poppins', sans-serif;
		}

        .wrapper {
            width: 1170px;
            margin: auto;
        }

        header {
            background: transparent;
            height: 15vh;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            position: relative;
        }


        .nav-area {
            float: right;
            list-style: none;
            margin-top: 30px;
        }

        .nav-area li {
            display: inline-block;
        }

        .nav-area li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 20px;
            font-family: poppins;
            font-size: 16px;
        }

        .nav-area li a:hover {
            background: #fff;
            color: #333;
        }

        .logo {
            float: left;
        }

        .logo img {
            width: 100%;
            padding: 15px 0;
        }

		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		#heading {
			text-align: center;
			color: black;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
<body>
	<?php include('navbar.php');?>
	<h1 id="heading">Hello, <?php echo $user_data['name']; ?></h1>
	<hr>

    <section>
		<h1 id="heading">Tour Details</h1>
		<table>
			<tr>
				<th>Destination</th>
				<th>Adults</th>
				<th>Children</th>
				<th>Check-In</th>
				<th>Check-Out</th>
				<th>Pick Up</th>
				<th>Price</th>
			</tr>
			<?php
				while($rows = $result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['destination'];?></td>
				<td><?php echo $rows['adults'];?></td>
				<td><?php echo $rows['children'];?></td>
				<td><?php echo $rows['checkin'];?></td>
				<td><?php echo $rows['checkout'];?></td>
				<td><?php echo $rows['pick_up'];?></td>
				<td><?php echo $rows['price'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
	
</html>