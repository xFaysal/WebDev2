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

    <title>Mohamed Salah</title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>


    <style>
        .mo {
            background-color: white;
        }

        .footer {
            position: fixed;
            height: 55px;
            bottom: 0;
            width: 100%;
            background-color: #e6e6e6;
        }

        s

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
    <h1>Mohamed Salah</h1> <br>

    <center><img class="mo" onmouseover="giantImg(this)" onmouseout="antImg(this)" border="0" src="images/mo_salah.png" alt="Picture of Mohamed Salah" width="250" height="250"></center>
    <center class="cap1">
        <caption>Hover Over Image To Enlarge It.</caption>
    </center>
    <img src="images/liverpool.jpeg" alt="Liverpool F.C. Logo" width="200" height="200">
    <img src="images/liverpool.jpeg" alt="Liverpool F.C. Logo" width="200" height="200" align="right">

    <table>
        <tr class="liverpool">
            <td>Height</td>
            <td>5 Foot 9 Inches</td>
        </tr>
        <tr class="liverpool">
            <td>Age</td>
            <td>27 Years Old</td>
        </tr>
        <tr class="liverpool">
            <td>League</td>
            <td>Premier League</td>
        </tr>
        <tr class="liverpool">
            <td>Team 2019-20</td>
            <td>Liverpool FC</td>
        </tr>
        <tr class="liverpool">
            <td>Number</td>
            <td>11</td>
        </tr>
        <tr class="liverpool">
            <td>Position</td>
            <td>Forward</td>
        </tr>
        <tr class="liverpool">
            <td>Matches Played</td>
            <td>24 Matches Played</td>
        </tr>
        <tr class="liverpool">
            <td>Goals Scored</td>
            <td>15 Goals</td>
        </tr>
        <tr class="liverpool">
            <td>Assists</td>
            <td>6 Assists</td>
        </tr>
        <tr class="liverpool">
            <td>Yellow Cards</td>
            <td>1 Yellow Cards</td>
        </tr>
        <tr class="liverpool">
            <td>Red Cards</td>
            <td>0 Red Cards</td>
        </tr>
    </table>

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
