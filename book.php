<?php 
    session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    $destination = $_SESSION["destination"];
    $id = $_SESSION["user_id"];

    $query = "select * from prices where location = '$destination'";
	$result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
	$adult_price = (float)$data['adult_price'];
    $child_price = (float)$data['child_price']; 

	if(isset($_REQUEST['submit']))
	{
        $adults = $_REQUEST['adults'];
        $children = $_REQUEST['children'];
        $checkin = $_REQUEST['checkin'];        
        $checkout = $_REQUEST['checkout'];
        $pickup = $_REQUEST['pickup'];
        $price = $_REQUEST['submit_price'];
        
        $query = "insert into tours (id,adults,children,checkin,checkout,destination,price,pick_up) values ($id,$adults,$children,'$checkin','$checkout','$destination',$price,'$pickup')";
        if(!mysqli_query($con, $query)){
            die(mysqli_error($con));
        }
        header("Location: view.php");
		die;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<style>
	body {
        width: 500px;
        margin: 0 auto;
        padding: 50px;
    }

    div.elem-group {
        margin: 20px 0;
    }

    div.elem-group.inlined {
        width: 49%;
        display: inline-block;
        float: left;
        margin-left: 1%;
    }

    label {
        display: block;
        font-family: 'Nanum Gothic';
        padding-bottom: 10px;
        font-size: 1.25em;
    }

    input,
    select,
    textarea {
        border-radius: 2px;
        border: 2px solid #777;
        box-sizing: border-box;
        font-size: 1.25em;
        font-family: 'Nanum Gothic';
        width: 100%;
        padding: 10px;
    }

    div.elem-group.inlined input {
        width: 95%;
        display: inline-block;
    }

    textarea {
        height: 250px;
    }

    hr {
        border: 1px dotted #ccc;
    }

    button {
        height: 50px;
        background: orange;
        border: none;
        color: white;
        font-size: 1.25em;
        font-family: 'Nanum Gothic';
        border-radius: 4px;
        cursor: pointer;
    }

    a {
		cursor: pointer;
		text-decoration: none;
		color: white;
    }

    button:hover {
        border: 2px solid black;
    }
</style>
<body>
	<button><a href="tours.php">Back To Tours</a></button>
	<br>
	<h1>Hello, <?php echo $user_data['name']; ?></h1>
    <h1>Book a tour to  <?php echo $destination ?></h1> 
	<hr>

	<form method="post">
        <div class="elem-group">
            <label for="phone">Pick Up City</label>
            <input type="text" id="pickup" name="pickup" placeholder="City name" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <hr>
        <div class="elem-group inlined">
            <label for="adult">Adults</label>
            <input type="number" id="adult" name="adults" placeholder="1" min="1" value="1" required>
        </div>
        <div class="elem-group inlined">
            <label for="child">Children</label>
            <input type="number" id="child" name="children" placeholder="0" min="0" value="0" required>
        </div>
        <div class="elem-group inlined">
            <label for="checkin-date">Check-In Date</label>
            <input type="date" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
            <label for="checkout-date">Check-Out Date</label>
            <input type="date" id="checkout-date" name="checkout" required>
        </div>
        <input type="hidden" id="submit_price" name="submit_price" value="">
        <hr>
        <div>
            <label for="price">Price</label>
            <h1 id="price"> ? </h1>
        </div>
        <button name="submit" type="submit">Book Tour</button>		
    </form>
</body>
<script>
    var checkin = Date.now();
    var checkout = Date.now();
    var adults = 1;
    var children = 0;
    var price;
    const _MS_PER_DAY = 1000 * 60 * 60 * 24;
    var disclaimer = false;
    var adult_price = "<?php echo $adult_price; ?>";
    var child_price = "<?php echo $child_price; ?>";
    var addon_adult = (1/10) * adult_price
    var addon_child = (1/10) * child_price

    function dateDiff(a, b){
    // Discard the time and time-zone information.
        const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
        const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());
        return Math.floor((utc2 - utc1) / _MS_PER_DAY);
    }

    document.getElementById("checkin-date").addEventListener("change", function() {
    checkin = new Date(this.value);
    calculatePrice();
    });

    document.getElementById("checkout-date").addEventListener("change", function() {
    checkout = new Date(this.value);
    calculatePrice();
    });

    document.getElementById("adult").addEventListener("change", function() {
    adults = this.value;
    calculatePrice();
    });

    document.getElementById("child").addEventListener("change", function() {
    children = this.value;
    calculatePrice();
    });

    function calculatePrice() {
        var date_diff = dateDiff(checkin,checkout);
        price = 0;
        price += (adult_price * adults) + (child_price * children);
        if(date_diff > 5)
        {
            if(!disclaimer)
            {
            alert("Important : 10% of base price added to total price for each person when the number of days exceed 5.")
            disclaimer = true;
            }
            price += (addon_adult * adults * (date_diff - 5)) + (addon_child * children * (date_diff - 5));
        }
        document.getElementById("price").innerHTML = "Rs. " + price;
        document.getElementById("submit_price").value = price;
    }

	var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = (currentDateTime.getMonth() + 1);
    var date = (currentDateTime.getDate() + 1);
    if (date < 10) {
        date = '0' + date;
    }
    if (month < 10) {
        month = '0' + month;
    }
    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#checkin-date");
    var checkoutElem = document.querySelector("#checkout-date");

    checkinElem.setAttribute("min", dateTomorrow);
    checkinElem.onchange = function () {
        checkoutElem.setAttribute("min", this.value);
    }
</script>
</html>