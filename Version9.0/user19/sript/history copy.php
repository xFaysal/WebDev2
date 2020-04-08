<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} 
require_once "config.php";
$curl_str = 'https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&apikey=B3GVO2Y1AV1L7HXV';
?>

<html lang="en">
<!--Version 6.0 
	Name:
	Date Completed:
    -->

<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="../CSS/JQ-M.css">
    <script src="../JS/JS-M.js"></script>
    <script src="../JS/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../images/ms-icon-310x310.png" />
    <title>The landing Home</title>
    <style>
        .hide {

            display: none;
        }

    </style>
</head>

<body onload="lo()">
    <div class="menu" style=" width: 100%;">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com/WebDev" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="Camp%20copy.php" class="nav-item nav-link active">Camps</a>
                    <a href="history%20copy.php" class="nav-item nav-link active" tabindex="-1">History</a>
                    <a href="segwal%20copy.php" class="nav-item nav-link active" tabindex="-2">Events</a>
                    <a href="Ticket%20copy.php" class="nav-item nav-link active" tabindex="-2">Tickets</a>
                    <a href="Cool%20code%20copy.php" class="nav-item nav-link active" tabindex="-2">Code fun</a>
                    <a href="stock.php" class="nav-item nav-link active" tabindex="-2">Stonks</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>
    <b>History</b>
    <div class="row" id='events'>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12">
            <b>1940s fur post.</b>
            <p>
                This historic fur trader cabin was where in the 1840s a french family traded furs with native americans in a small one room cabin with pelts on display for visitors to feel and see trade items that hunters would trade for.

            </p>
        </div>
        <div class="col-5"> <img src="../images/Faribault%20S%20Elevaion.JPG" height="350" width="350"></div>

        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12">
            <b>1857 farm.</b>
            <p>
                This was a german subsistence farm made by a hopeful german family trying to settle the land and being a subsistence farm it would contain enough food to get them threw the winter without needing to buy anything.
            </p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/1857%20Farm%20Berger%20Residence%20S%20Elevation.JPG" height="350" width="350"></div>

        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12">
            <b>One room school:</b>
            <p>
                A 1887 school where your child can experience a school day from the 18 hundreds area school day do chores and learn about Minnesota history.
            </p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/one.JPG" height="350" width="350"></div>

        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12">
            <b>1889 Market Farm.</b>
            <p>
                This for the time was a modern farm that was part of the transition between subsistence farming and commercial farming choosing to have higher value high profit crops like wheat or on this farm high value animals for profit and buying what they need from a store or catalog.

            </p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/Red%20Barn%2009%202010%20B.JPG" height="350" width="350"></div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12">
            <b>1880s-Village.</b>
            <p>
                This village offers a variety of homes and businesses from a Victorian style home to a black smith shop. Some of the highlights included the dress shop, general store, cobbler and the woodcutter.
            </p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/vill.JPG" height="350" width="350"></div>

    </div>


    <button data-file="blue" class="b3">blue</button>
    <button data-file="green" class=b2>green</button>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                var backgroundColor = $(this).data('file');
                $("body").css("background-color", backgroundColor);

            });
        });
        $(document).ready(function() {
            $("#events").click(function() {
                window.location.href = "../html/segwal.html";
            });
        });

    </script>

<style> table,
        th,
        td {
            border: 5px solid forestgreen;
            background-color: midnightblue;
            color: ghostwhite;
            text-align: center;
            font-size: 30px;

        }

        table {
            margin: 10%;
            width: 80%;
        }

        .table_B {
            font-size: 50px;
        }

        b {
            margin-left: 10%;
            font-size: 45px;
            text-align: center;
        }

        h1 {
            margin: 10%;
            font-size: 25px;
        }

        button {
            margin-left: 10%;
            width: 80%;
            background-color: forestgreen;
            border-radius: 55px;
            border-width: 20px;
            border-color: mediumblue;
            text-align: center;
        }

        .foot {
            width: 100%;
            background-color: darkgreen;
            bottom: 1px;

        }

        img {
            margin-top: 5%;
            margin-left: 10%;
            width: 80%;
        }
        </style>
    <footer>
        <div>
        <table>
        <tr>
                    <th><a href="index.php" class="nav-item nav-link active">Home</a></th>
                    <th><a href="Camp%20copy.php" class="nav-item nav-link active">Camps</a></th>
                    <th><a href="history%20copy.php" class="nav-item nav-link active" tabindex="-1">History</a></th>
                </tr>
                <tr>
                    <th><a href="segwal%20copy.php" class="nav-item nav-link active" tabindex="-2">Events</a></th>
                    <th><a href="Ticket%20copy.php" class="nav-item nav-link active" tabindex="-2">Tickets</a></th>
                    <th><a href="Cool%20code%20copy.php" class="nav-item nav-link active" tabindex="-2">Code fun</a></th>
                </tr>
                <tr>
                    <th><a href="stock.php" class="nav-item nav-link active" tabindex="-2">Stonks</a></th>
                    <th><a href="reset_password.php" class="nav-item nav-link active" tabindex="-2">Reset password</a></th>
                    <th><a href="register.php" class="nav-item nav-link active" tabindex="-2">register</a></th>
                </tr>
                <tr>
                    <th><a href="login.php" class="nav-item nav-link active" tabindex="-2">Log in</a></th>
                    <th><a href="logout.php" class="nav-item nav-link active" tabindex="-2"><?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?></a></th>
                    <th></th>
                </tr>
            </table>
        </div>
    </footer>




</body>
