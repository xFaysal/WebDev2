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

    <title>More Info</title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>

    <style>
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
    <h1>More Info</h1> <br>
    <div class="light" align="left" onmouseover="style.color='orange'" onmouseout="style.color='white'">Click Here To Learn More About Salah</div>
    <div align="left"><a href='https://en.wikipedia.org/wiki/Mohamed_Salah' onmouseover="style.color='blue'" onmouseout="style.color='black'"><button class="button2">Mohamed Salah</button></a></div><br>
    <div class="light" align="center" onmouseover="style.color='orange'" onmouseout="style.color='white'">Click Here To Learn More About Lewandowski</div>
    <div align="center"><a href='https://en.wikipedia.org/wiki/Robert_Lewandowski'><button class="button1">Robert Lewandowski</button></a></div><br>
    <div class="light" align="right" onmouseover="style.color='orange'" onmouseout="style.color='white'">Click Here To Learn More About Quintero</div>
    <div align="right"><a href='https://en.wikipedia.org/wiki/Darwin_Quintero'><button class="button3">Darwin Quintero</button></a></div>

    <dl>
        <dt>
            <center>Who Is Your Favorite Player?</center>
        </dt>
        <dd>
            <center class="see">Pelé</center>
        </dd>
        <dt>
            <center>What Is Your Favortie Team?</center>
        </dt>
        <dd>
            <center class="see">Minnesota United FC, and Arsenal</center>
        </dd>
        <dt>
            <center>What Is Your Favorite Cleat Brand</center>
        </dt>
        <dd>
            <center class="see">Adidas</center>
        </dd>
        <dt>
            <center>How Long Have You Been Playing Soccer.</center>
        </dt>
        <dd>
            <center class="see">10 Years</center>
        </dd>
        <dt>
            <center>What position do you play?</center>
        </dt>
        <dd>
            <center class="see">I Can Play Anywhere, But I Like To Play Forward and Midfield.</center>
        </dd>
    </dl>

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
