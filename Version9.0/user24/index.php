<?php
// Initialize the session
session_start();
 

?>
<html lang="en">
<!--Version 7.0 
	Name: Jacob Poolos
	Date Completed: 2/21/2020
    -->

<head>

    <title>Football Players</title>
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <link rel="stylesheet" href="JS/SampleJS.js">
    <link rel="icon" type="image/png" sizes="32x32" href="images/footballfire.png">



</head>

<body class="main">
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="stefon.php">Stefon Diggs</a>
        <a href="thielen.php">Adam Thielen</a>
        <a href="dalvin.php">Dalvin Cook</a>
        <a href="jamal.php">Jamal Adams</a>
        <a href="taylor.php">Sean Taylor</a>
        <a href="USbank.php">USBank Stadium</a>
        <a href="MyFottballLife.php">My Football Life</a>
        <div class="mr-auto">
        <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
echo "<a href='logout.php' class='btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
} else { echo "<a href='login.php'> Login </a>";} ?>
        </div>

    </div>

    <center class="color">
        <h1>Favorite NFL Players</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/nfl.png" alt="NFL Football" width="100%">
                <center>
                    <h2>NFL Football</h2>
                </center>
            </div>
            <div class="col-sm-4">
                <img src="images/nike.0-football-gloves-mens" alt="" width="100%">
                <center>
                    <h2>Nike Gloves</h2>
                </center>
            </div>
            <div class="col-sm-4">
                <img src="images/helmet.png" alt="" width="100%">
                <center>
                    <h2>Helmet</h2>
                </center>
            </div>
        </div>
    </div>


    <dl class='accordion'>
        <dt>I love to play Football?</dt>
        <dd>I love football because it is a fun sport to play.</dd>
        <dt>My favorite wide reciever is Stefon Diggs?</dt>
        <dd>Because he made the winning catch on the Sants .</dd>
        <dt>My favorite running back is Dalvin Cook?</dt>
        <dd>Because he is from the Vikings and also he has goo juke moves.</dd>
        <dt>My favorite seftey is Sean Taylor?</dt>
        <dd>Because he hit sticks people a lot each game.</dd>
        <dt>My favorite team in the Nfl is the Vikings ?</dt>
        <dd>Because I loved them since I started watching them.</dd>
    </dl>
    
    <div class="page-header">
        <h1 style="color: white">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


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

    </script>
    
    <div id="footer">
        <footer class="page-footer font-small white">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://shakonet.isd720.com/WebDev2/Version9.0/user24/index.php/"> Jacob Poolos</a>
            </div>
            <!-- Copyright -->

        </footer>
    </div>
    
    
    
    

</body>

</html>
