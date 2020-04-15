<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

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
    <script src="jquery-3.4.1%20copy.js"></script>

    <title>FAQs</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <script>
         $(document).ready(function() {

            $('dd').filter(':nth-child(n+4)').addClass('hide');

            $('dl').on('mouseenter', 'dt', function() {
                $(this)
                    .next()
                    .slideDown(200)
                    .siblings('dd')
                    .slideUp(200);
            });
        })

    </script>



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
                    <a href="weather.php" class="nav-item nav-link active" tabindex="-2">Weather</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                
                
                    
                <div class="navbar-nav ml-auto">
                   <div style="color:white"><?php echo '<time style="color:white" datetime="'.date('c').'">'.date('m/d/y').'</time>'; ?>
                    <?php echo date("g:i a", $currentTime); ?></div> 
                    
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>

                </div>
            </div>
        </nav>
    </div>
    <div>
        <dl>
            <dt id="dl1">What is an apple?</dt>
            <dd id="dl2">A red fruit.</dd>
            <dt id="dl3">Where do apples grow?</dt>
            <dd id="dl4">Trees.</dd>
            <dt id="dl5">Are apples fruits?</dt>
            <dd id="dl6">Yes.</dd>
            <dt id="dl7">Why are some apples green?</dt>
            <dd id="dl8">Don't know.</dd>

        </dl>






    </div>
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
</body>

</html>
