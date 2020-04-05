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
            // Slide up displayed paragraphs
            $(".up-btn").click(function() {
                $("p").slideUp();
            });

            // Slide down hidden paragraphs
            $(".down-btn").click(function() {
                $("p").slideDown();
            });
        });

    </script>




</head>

<body class="main">
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="stefon.php">Stefon Diggs</a>
        <a href="thielen.php">Adam Thielen</a>
        <a href="dalvin.php">Dalvin Cook</a>
        <a class="active" href="jamal.php">Jamal Adams</a>
        <a href="taylor.php">Sean Taylor</a>
        <a href="USbank.php">USBank Stadium</a>
        <a href="MyFottballLife.php">My Football Life</a>
        <div class="mr-auto">
        <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
echo "<a href='logout.php' class='btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
} else { echo "<a href='login.php'> Login </a>";} ?>
        </div>

    </div>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </div>

    

    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/jamal.jpeg" width="100%">
                </div>
                <div class="col-sm-6">
                    <img src="images/jamalstats.png" width=100%>
                </div>
            </div>
        </div>
    </div>
    <p style="font-size:45px ;color: white">Jamal Adams is one of my favorite strong safty. Also he is one of the most hard hitting strong saftys ever. I also would love an autogragh from him. Another thing that I want to do is go and watch Jamal Adams hit stick someone. </p>


    <button type="button" class="up-btn">Slide Up Paragraphs</button>
    <button type="button" class="down-btn">Slide Down Paragraphs</button>

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
