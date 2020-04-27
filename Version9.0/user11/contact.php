<html lang="en">
<!--Version 7.0 
	Name:Christian Lachica
	Date Completed:
    -->

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<head>

    <title>Contact</title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>


    <style>
        .prem {
            background-color: white;
        }

        .bundesliga {
            background-color: white;
        }

        .footer {
            position: fixed;
            height: 55px;
            bottom: 0;
            width: 100%;
            background-color: #e6e6e6;
        }

    </style>
</head>

<link rel="icon" type="image/png" href="images/favicon.ico">

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About Site</a>
                    <a href="lewandowski.php" class="nav-item nav-link active" tabindex="-1">Robert Lewandowski</a>
                    <a href="quintero.php" class="nav-item nav-link active" tabindex="-1">Darwin Quintero</a>
                    <a href="salah.php" class="nav-item nav-link active" tabindex="-1">Mohamed Salah</a>
                    <a href="contact.php" class="nav-item nav-link active" tabindex="-1">Contact</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
    </div>
    </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->
    <h1>Contact Info</h1>

    <center>
        <p class="back"><img src="images/mls.jpg" length="100" height="300" alt="MLS Logo">
            <img class="prem" src="images/premier_league.png" length="250" height="300" alt="Premier League Logo">
            <img class="bundesliga" src="images/Bundesliga.svg" alt="Bundesliga Logo">
            <img src="images/laliga.png" length="100" height="300" alt="Laliga Santander Logo">
            <img src="images/serie_a.jpg" length="100" height="300" alt="Serie A Logo"></p>
    </center>

    <center>
        <div class="form">
            <form onsubmit="confirmInput()" action="http://localhost:8080/WebDev2/Version9.0/user11/more.php">
                Enter your name if you want to learn more about one of the players. <input id="fname" type="text" size="20">
                <input type="submit">
            </form>
        </div>

        <button class="bright" id="hide">Hide Logos</button>
        <button class="bright" id="show">Show Logos</button> <br> <br>

    </center>
    <div class="row">
        <div class=col-sm-4>
            <center><img src="images/mail.png" width="75" height="75" alt="envelope"></center>
        </div>
        <div class="col-sm-4">
            <center><img src="images/location.png" width="75" height="75" alt="location marker"></center>
        </div>
        <div class="col-sm-4">
            <center><img src="images/call.png" width="75" height="75" alt="telephone"></center>
        </div>
    </div>

    <div class="row">
        <div class=col-sm-4>
            <center><span class="fa fa-envelope-square"></span> School Email: 226450@shakopeeschools.org</center>
        </div>
        <div class="col-sm-4">
            <center><span class="fa fa-map-marker"></span> Address: 100 17th Ave W, Shakopee, MN 55379</center>
        </div>
        <div class="col-sm-4">
            <center><span class="fa fa-mobile-phone"></span> Phone: 952-###-####</center>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("p").hide();
                $this = $(this)
                $this.attr('disabled', true)
                $('#show').removeAttr('disabled')
            });

            $("#show").click(function() {
                $p = $('p')
                $p.show()
                $this = $(this)
                $this.attr('disabled', true)
                $('#hide').removeAttr('disabled')

            });
        });

    </script>

    <footer class="footer">
        <center>
            <div class="container">
                <div>© <a href="https://www.shakopee.k12.mn.us/">Shakopee Public Schools</a> | <a href="https://www.shakopee.k12.mn.us/domain/61">About Company</a>
                </div>
            </div>
        </center>
    </footer>

</body>

</html>
