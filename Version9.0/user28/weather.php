<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$apiKey = "d5b48c294d75420b8b01a90d4d11c3d8"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

$ch = curl_init();
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
    <script src="jquery-3.4.1%20copy.js"></script>

    <!-- Custom styles for this template -->
    <script>
        $(document).ready(function() {
            $("#hc").mouseover(function() {
                $("body").css({
                    "background-color": "#B22222"
                });
            });
        });
        $(document).ready(function() {
            $("#rd").mouseover(function() {
                $("body").css({
                    "background-color": "darkred"
                });
            });
        });
        $(document).ready(function() {
            $("#fuji").mouseover(function() {
                $("body").css({
                    "background-color": "darksalmon"
                });
            });
        });
        $(document).ready(function() {
            $("#abro").mouseover(function() {
                $("body").css({
                    "background-color": "#FF4500"
                });
            });
        });
        $(document).ready(function() {
            $("#gala").mouseover(function() {
                $("body").css({
                    "background-color": "#800000"
                });
            });
        });

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
        <center>
            <h1 style="font-family: Courier New">Today's Weather</h1>
            <table>
                <thead>
                    <tr>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                    </tr>
                </thead>
                <tr>
                    <div class="weather-forecast" style= "font-size: 3.5em">
                        <td><img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" height='120' width='120' /></td>
                        <td style= "font-size: 3.5em"> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?></td>
                        <td style= "font-size: 3.5em"><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span></td>
                    </div>

                </tr>
                <thead>
                    <tr>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                    </tr>
                </thead>

            </table>
        </center>
    </div>

    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
</body>

</html>
