<html lang="en">

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

    <title>About</title>



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
    <h1>About This Site</h1><br>
    
   <p>This site will include</p>
    
    <td><ul>
    <li class="i">Stats of each player</li>
    <li class="u">Info about each of them</li>
    <li class="i">Pictures of them</li>
    <li class="u">Their Teams logos</li>    
    </ul></td>
    

    

    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQECaYB6mH30h4GxPOfCSzU20Ap34fx2qLS4E99fC8vwJAStZRn%3Ahttps%3A%2F%2Fdaily.jstor.org%2Fwp-content%2Fuploads%2F2018%2F06%2Fsoccer_europe_1050x700.jpg&usqp=CAU" alt="Image of a soccer ball on a field" height=250></center>
    
    <footer class="footer">
        <center><div class="container">
            <div>© <a href="https://www.shakopee.k12.mn.us/">Shakopee Public Schools</a> | <a href="https://www.shakopee.k12.mn.us/domain/61">About Company</a>
            </div></div></center>
    </footer>

</body>

</html>
