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
    <title>events</title>
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
<html lang="en">
<!--Version 6.0 
	Name:
	Date Completed:
    -->


    <img src="../images/THe%20landing%202.jpg">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-6" id="hist">
            <b>Free:</b>
            <p>
                Spring in Minnesota river valley; walk around with a naturalist in the woods and learn about plants and animals 5/17/2020.
            </p>
            <P>
                History of exporashion; event from 12:00am to 4:00pm 5/23/2020
            </P>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/TheLanding1.jpg" height="350" width="350"></div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12"id='ticket'>
            <b>Events - Regular event pricing (click for details)</b>
            <p>
                Maple syruping living history; event from 10:00am to 2:00pm 3/21/2020 weather dependent, this event will have you in the woods tapping maple trees and visiting cabins with reenactors getting a chance to warm up and learn about the cabins history and get a taste of maple syrup.
            </p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/1.jpg" height="350" width="350"></div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12" id='ticket'>
            <b>Day events (different pricing applies)
            </b>
            <p>
                Story of memorial day: event from 12:00am to 3:00pm 5/23/2020
            </p>
            <p> Victorian tea party: bake play games and experience a victorian tea party event on 9:30 am 3:00 pm friday 7/31/2020
            </p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/fah.jpg" height="350" width="350"></div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12" id="camp">
            <b>Camps: (click for more nformation)
            </b>
            <p>Build a camp; 6/23/2020 6/24/2020 6/25/2020 // 7/21/2020 7/22/2020 7/23/2020 // 8/18/2020 8/19/2020 8/20/20 all days from 9:30am 2:00pm.</p>
            <p> Civil war camp; 6/16/2020 - 6/18/2020 from 9:30am - 3:30pm</p>
            <P>Wilderness survival and advanced camp; 7/14/2020-7/16/2020 from 9:30am - 3:30pm
            </P>
            <P>Little house on the river; 6/9/2020-6/11/2020 7/7/2020-7/9/2020 8/4/2020-8/6/2020 from 9:30am - 3:30pm</P>
            <P>advanced Little house on the river; 6/16/2020-6/18/2020 from 9:30am - 3:30pm
            </P>
            <p>River pirates camp (Huckleberry Finn camp); 7/7/2020-7/9/2020 from 9:30am - 3:30pm

            </p>
            <p>Voyageurs camp; 7/28/2020-7/30/2020 from 9:30am - 3:30pm
            </p>
            <p>Paul Bunyan camp; 8/11/2020-8/13/2020 from 9:30am - 3:30pm
            </p>
            <p>Circus camp; 8/4/2020-8/6/2020 from 9:30am - 3:30pm</p>
            <p>Archery camp; 8/24/2020-8/27/2020 from 9:00am - 12:00am</p>
            <p>For more info see the three rivers cite.</p>
        </div>
        <div class="col-md-5 col-sm-12"> <img src="../images/Camp%20Civil%20war%202.JPG" height="350" width="350"></div>
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
            $("#hist").click(function() {
                window.location.href = "../html/history.html";
            });
        });
        $(document).ready(function() {
            $("#ticket").click(function() {
                window.location.href = "../html/Ticket.html";
            });
        });
        $(document).ready(function() {
            $("#camp").click(function() {
                window.location.href = "../html/camp.html";
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
