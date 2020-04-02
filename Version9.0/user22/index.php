<?php

?>


<html lang="en">

<head>
    <title>Professional Soccer Teams</title>
    <meta charset="UTF-8">
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/SampleJS.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">
</head>

<body class="main">
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="barcelona.php" class="nav-item nav-link" tabindex="-1">FC Barcelona</a>
                    <a href="lafc.php" class="nav-item nav-link" tabindex="-1">Los Angeles FC</a>
                    <a href="dallas.php" class="nav-item nav-link" tabindex="-1">FC Dallas</a>
                    <a href="madrid.php" class="nav-item nav-link" tabindex="-1">Real Madrid C.F.</a>
                    <a href="liverpool.php" class="nav-item nav-link" tabindex="-1">Liverpool F.C.</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Manchester City F.C.</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link active">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>
    <h1>ALL ABOUT THE TOP SOCCER TEAMS!</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="https://www.laliga.com/en-GB" alt="LaLiga Website">
                <img src="images/liga.png" alt="La Liga League" width="100%">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.mlssoccer.com/" alt="MLS Website">
                    <img src="images/mls.png" alt="MLS League" width="100%">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.premierleague.com/" alt="Premier League Website">
                <img src="images/premier.png" alt="Premier League" width="100%">
                </a>
            </div>
        </div>
    </div>
    <h2>Click the a picture to visit the website!</h2>
</body>

</html>
