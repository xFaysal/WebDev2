<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Jacob's Website</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="images/footballfire.png">

    <script>
        $(document).ready(function() {
            // Start animation
            $(".start-btn").click(function() {
                $("img").animate({
                    left: "+=150px"
                }, 2000);
            });

            // Stop running animation
            $(".stop-btn").click(function() {
                $("img").stop();
            });

            // Start animation in the opposite direction
            $(".back-btn").click(function() {
                $("img").animate({
                    left: "-=150px"
                }, 2000);
            });

            // Reset to default
            $(".reset-btn").click(function() {
                $("img").animate({
                    left: "0"
                }, "fast");
            });
        });

    </script>
    <style>
        img {
            position: relative;
            /* Required to move element */
        }

    </style>





</head>

<body class="main">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="stefon.php">Stefon Diggs</a>
        <a href="thielen.php">Adam Thielen</a>
        <a class="active" href="dalvin.php">Dalvin Cook</a>
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/dalvin.jpg" width="100%">
                </div>
                <div class="col-sm-6">
                    <img src="images/dalvinstats.png" width=100%>
                </div>
            </div>
        </div>
    </div>
    <p style="font-size:45px ;color: white">One of my favorite running backs is Dalvin Cook. I'v never met him before but I would love to and also I would love to get a autograph from him. Another thing is that if he had a camp that you can go to I would because it would be fun to do. </p>

    <button type="button" class="start-btn">Start</button>
    <button type="button" class="stop-btn">Stop</button>
    <button type="button" class="back-btn">Back</button>
    <button type="button" class="reset-btn">Reset</button>

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
