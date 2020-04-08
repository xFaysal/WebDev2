<?php
// Initialize the session
session_start(); 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:Diya Thomas 
        Date Completed:01/30/2020
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <link rel="shortcut icon" href=images/applefavicon.png />

    <title>Apples</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/SampleJS.js"></script>

    <!-- Custom styles for this template -->
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">APPLES</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link active">Home</a>

                    <a href="types.php" class="nav-item nav-link active" tabindex="-1">Types</a>
                    <a href="ranking.php" class="nav-item nav-link active" tabindex="-2">Ranking</a>
                    <a href="recipes.php" class="nav-item nav-link active" tabindex="-2">Recipes</a>
                    <a href="game.php" class="nav-item nav-link active" tabindex="-2">Facts</a>
                    <a href="faqs.php" class="nav-item nav-link active" tabindex="-2">FAQs</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                
                
                    
                <div class="navbar-nav ml-auto">
                   <div style="color:#000000"><?php echo '<time style="color:white" datetime="'.date('c').'">'.date('Y - m - d').'</time>'; ?> </div> 
                    
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>

                </div>
            </div>
        </nav>
    </div>

    <div>

        <div>
            <style>
                img {
                    height: 200px;
                    width: 278.3px;

                }

            </style>


            <img src="https://i0.wp.com/www.wfla.com/wp-content/uploads/sites/71/2019/10/apples.jpg?resize=2560%2C1440&ssl=1" alt="Apples">
            <img src="https://cdn.aarp.net/content/dam/aarp/health/healthy-living/2017/09/1140-3-reasons-apples-good-for-you.imgcache.revb759b8143e7e61eac34a2605992c048f.jpg" alt="Apples">
            <img src="https://www.dw.com/image/47425871_401.jpg" alt="Apples">
            <img src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2019/09/apples-still-life-fruit-1296x728-header-1296x728.jpg?w=1155&h=1528" alt="Apples">
            <img src="https://i2.wp.com/hellofreshus.wpengine.com/wp-content/uploads/2016/10/HF160920_Global_Blog_All_About_Apples_15_low.jpg" alt="Apples">
        </div>

        <div style="padding: 170px">
            <center>
                <h1 id="textChange" style="font-family: Courier New" onmouseover="changeText()">
                    Apples!
                </h1>
            </center>
        </div>




        <div><img src="https://i0.wp.com/www.wfla.com/wp-content/uploads/sites/71/2019/10/apples.jpg?resize=2560%2C1440&ssl=1" alt="Apples">
            <img src="https://cdn.aarp.net/content/dam/aarp/health/healthy-living/2017/09/1140-3-reasons-apples-good-for-you.imgcache.revb759b8143e7e61eac34a2605992c048f.jpg" alt="Apples">
            <img src="https://www.dw.com/image/47425871_401.jpg" alt="Apples">
            <img src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2019/09/apples-still-life-fruit-1296x728-header-1296x728.jpg?w=1155&h=1528" alt="Apples">
            <img src="https://i2.wp.com/hellofreshus.wpengine.com/wp-content/uploads/2016/10/HF160920_Global_Blog_All_About_Apples_15_low.jpg" alt="Apples">
        </div>

    </div>

    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
</body>

</html>
