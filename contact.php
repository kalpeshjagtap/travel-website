<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<style type="text/css">

        * {
            box-sizing: border-box
        }

        body {
            background-image: url(./images/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }

        header {
            background: transparent;
            height: 15vh;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            position: relative;
        }

        .wrapper {
            width: 1170px;
            margin: auto;
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
            font-size: 16px;
        }

        .nav-area li a:hover {
            background: #fff;
            color: #333;
        }

        .logo {
            float: left;
        }

        .main {
            max-width: 1000px;
            margin: auto;
        }


        h2 {
            font-size: 50px;
            word-break: break-all;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 16px;
        }

        input[type=text], input[type=email], textarea {
            width: 40%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=email]:focus, textarea {
            background-color: #f1f1f1;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 40%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        a {
            color: dodgerblue;
        }
        
</style>
<body>
    <?php include('navbar.php');?>
    <div class="main">

        <h2>Contact Us</h2>
        <hr>

        <div id="box">

            <form method="post">
                <div class="container">
                    <input id="text" type="text" placeholder="Subject" name="user_name" required><br><br>
                    <textarea id="subject" name="subject" placeholder="Describe your Issue.."
                        style="height:200px"></textarea><br>

                    <input id="button" type="submit" class="registerbtn" value="Submit" onClick="myFunction()"><br>
                </div>
            </form>
        </div>

    </div>
</body>
<script>
    function myFunction() {

        alert("Your Issue has been noted!✅");
        window.location.href = "index.php";
    }
</script>
</html>