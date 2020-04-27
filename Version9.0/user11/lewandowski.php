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

    <title>Robert Lewandowski</title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>


    <style>
        .robert {
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
    <h1>Robert Lewandowski</h1> <br>

    <center><img class="robert" onmouseover="giantImg(this)" onmouseout="antImg(this)" border="0" src="images/robert_lewandowski.png" alt="Picture of Robert Lewandowski" width="250" height="250"></center>
    <center class="cap">
        <caption>Hover Over Image To Enlarge It.</caption>
    </center>
    <img src="images/bayern.png" alt="Bayern Munich Logo" width="200" height="200">
    <img src="images/bayern.png" alt="Bayern Munich Logo" width="200" height="200" align="right">


    <table>
        <tr class="bayern">
            <td>Height</td>
            <td>6 Foot 0 Inches</td>
        </tr>
        <tr class="bayern">
            <td>Age</td>
            <td>31 Years Old</td>
        </tr>
        <tr class="bayern">
            <td>League</td>
            <td>Bundesliga</td>
        </tr>
        <tr class="bayern">
            <td>Team 2019-20</td>
            <td>Bayern Munich FC</td>
        </tr>
        <tr class="bayern">
            <td>Number</td>
            <td>9</td>
        </tr>
        <tr class="bayern">
            <td>Position</td>
            <td>Forward</td>
        </tr>
        <tr class="bayern">
            <td>Matches Played</td>
            <td>23 Matches Played</td>
        </tr>
        <tr class="bayern">
            <td>Goals Scored</td>
            <td>25 Goals</td>
        </tr>
        <tr class="bayern">
            <td>Assists</td>
            <td>3 Assists</td>
        </tr>
        <tr class="bayern">
            <td>Yellow Cards</td>
            <td>4 Yellow Cards</td>
        </tr>
        <tr class="bayern">
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
