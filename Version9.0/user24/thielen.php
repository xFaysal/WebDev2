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
            // Fading out displayed paragraphs
            $(".out-btn").click(function() {
                $("p").fadeOut();
            });

            // Fading in hidden paragraphs
            $(".in-btn").click(function() {
                $("p").fadeIn();
            });
        });

    </script>



</head>

<body class="main">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="stefon.php">Stefon Diggs</a>
        <a class="active" href="thielen.php">Adam Thielen</a>
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/thielen.jpg" width=100%>
                </div>
                <div class="col-sm-6">
                    <img src="images/adamstats.png" width=100%>
                </div>
            </div>
        </div>
    </div>
    <p style="font-size:40px ;color: white">Another wide reicver that is one of my favorites is Adam Thielen. I also met him in really life and I got his autograph when I met him. Another thing that I did is that I went to his summer football camp and I also got a picture with him got a adidas bag with a picture in there that was also signed by him. </p>


    <button type="button" class="out-btn">Fade Out Paragraphs</button>
    <button type="button" class="in-btn">Fade In Paragraphs</button>


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
