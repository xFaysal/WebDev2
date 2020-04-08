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
    <title>priceing</title>
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

    <div class="row">
        <div class="col-12">
            <img src="../images/the%20landing%20buildings.jpg">
        </div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12">
            <b>Tickets and general emission:
            </b>
            <p>
                Guided sight tours by staff in and outside historic buildings that give you a sense of what life was like between the late 18th century threw the 19th century. See the homes In a completely new way on this educational journey into the past.
                Adults (ages 18-64) : $8
                Children (ages 2-17) and seniors (ages 65+) : $5
                Children 2 and under : free
            </p>
        </div>
        <div class="col-md-5 col-sm-12">
            <img src="../images/images-1.jpg " height="350" width="350">
        </div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12" id='events'>
            <b>Events:
            </b>
            <p>Story of memorial day: $5</p>
            <p>Victorian tea party : $40 for a day event.</p>
        </div>
        <div class="col-md-5 col-sm-12">
            <img src="../images/EBTRCN5XYAcyzB9.jpg" height="350" width="350">
        </div>
        <div class="col-1"></div>
        <div class="col-md-6 col-sm-12" id="camp">
            <b>Camps: (click for more information and for dates please click the Event tab)

            </b>
            <p>Build a camp : $37 for one day, $70 for two days, $93 for three days.</p>
            <p>Civil war camp: $160 for 3 days</p>
            <p>Wilderness survival and wilderness advanced : $160 for 3 days.</p>
            <p>Little house on the river and advanced $160 for 3 days.</p>
            <p>River pirates camp (Huckleberry Finn camp) : $160 for 3 days.</p>
            <p>Voyagers camp : 160 for 3 days.</p>
            <p>Paul Bunyan camp : 160 for 3 days.</p>
            <p>Circus camp: 160 for 3 days.</p>
            <p>Archery camp: 113 for 3 days.</p>
        </div>
        <div class="col-md-5 col-sm-12">
            <img src="../images/Camp%20Civil%20war.JPG" width="400" height="400">
        </div>
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
