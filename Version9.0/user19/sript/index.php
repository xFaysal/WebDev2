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
    <div>
        <div class="col-5"> <img src="../images/The%20landing%20egg%20roll.jpg" onmouseover="myFun()" onmouseout="myun()">
            <div id="myDIV">
                <p class='hide'>https://www.threeriversparks.org/location/landing
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-6 col-sm-12" id="hist">
                <b>History:</b>
                <p>
                    the landing is a historical landmark of shakopee and takes from 1840s to 1890s but the scit gose farther back then that with native american burial mounds dotted all over the site. Explore the sites homes and businesses while learning the rich history of the Minnesota river valley. (click for more detail).
                </p>
            </div>
            <div class="col-md-5 col-sm-12"> <img src="../images/TheLanding1.jpg" height="350" width="350" onmouseover="myFun()" onmouseout="myun()">
                <div id="myDIV">
                    <p class='hide'>The landing staff</p>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-md-6 col-sm-12" id="camp">
                <b>Camps: </b>
                <p>
                    Fun summer camps for 6 to 15 year olds. These camps teach historical information and life skills that are important in everyday life. These camps ranged from a messy woodland survival adventure to a Victorian area tea party. These are small day camps that are a great way to have your kid to have fun and learn over the summer at a supervised event. (click for more detail).
                </p>
            </div>
            <div class="col-md-5 col-sm-12"> <img src="../images/one.JPG" height="350" width="350" onmouseover="myFun()" onmouseout="myun()">
                <div id="myDIV">
                    <p class='hide'>The landing staff</p>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-md-6 col-sm-12" id='events'>
                <b>Events: </b>
                <p>
                    The landing has many events from living history, day events, dinners, and more. (click for more detail).
                </p>
            </div>
            <div class="col-md-5 col-sm-12"> <img src="../images/1-1.jpg" height="350" width="350" onmouseover="myFun()" onmouseout="myun()">
                <div id="myDIV">
                    <p class='hide'>The landing staff</p>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-md-6 col-sm-12" id='ticket'>
                <b>Tickets: </b>
                <p>
                    The pricing information can be found on this tab for camps events and guided tours, but if you just want to walk the site it’s free on a non living history day. (click for more detail).
                </p>
            </div>
            <div class="col-md-5 col-sm-12"> <img src="../images/fah.jpg" height="350" width="350" onmouseover="myFun()" onmouseout="myun()">
                <div id="myDIV">
                    <p class='hide'>The landing staff</p>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-md-6 col-sm-12" id="code">
                <b>cool code </b>
                <p>
                    fun code that has "cool" thing in it. (click for more detail).
                </p>
            </div>
            <div class="col-md-5 col-sm-12"> <img src="../images/fah.jpg" height="350" width="350" onmouseover="myFun()" onmouseout="myun()">
                <div id="myDIV">
                    <p class='hide'>The landing staff</p>
                </div>
            </div>
        </div>
        <dl>
            <dt> what are our bissnes hours? </dt>
            <dd> they creantly are 10AM– 5PM</dd>
            <dt> What time preod do we cover?</dt>
            <dd>1840s to the 1880s</dd>
        </dl>
        <button data-file="blue" class="b3">blue</button>
        <button data-file="green" class=b2>green</button>
        <script>
            (function() {

                $('dd').filter(':nth-child(n+4)').addClass('hide');

                $('dl').on('mouseenter', 'dt', function() {
                    $(this)
                        .next()
                        .slideDown(200)
                        .siblings('dd')
                        .slideUp(200);
                });
            })();


            $(document).ready(function() {
                $("button").click(function() {
                    var backgroundColor = $(this).data('file');
                    $("body").css("background-color", backgroundColor);

                });
            });

            $(document).ready(function() {
                $("#camp").click(function() {
                    window.location.href = "../html/camp.html";
                });
            });
            $(document).ready(function() {
                $("#hist").click(function() {
                    window.location.href = "../html/history.html";
                });
            });
            $(document).ready(function() {
                $("#events").click(function() {
                    window.location.href = "../html/segwal.html";
                });
            });
            $(document).ready(function() {
                $("#ticket").click(function() {
                    window.location.href = "../html/Ticket.html";
                });
            });
            $(document).ready(function() {
                $("#code").click(function() {
                    window.location.href = "../html/Cool code.html";
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
