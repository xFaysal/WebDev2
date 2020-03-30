<?php
$apiKey = "e492046fa637c4996e0e5903864807f0"; //You will need to add in the 
$cityId = "4058076"; //5046997 Shakopee City Id
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

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

if(($data->main->temp_min) >= 45){
    $low='red';
}
else {
    $low='blue';
}

if (($data->main->temp_max) >= 45){
    $high='red';
}
else {
    $high='blue';
}
?>


<html lang="en">

<head>
    <title>Professional Soccer Teams</title>
    <meta charset="UTF-8">
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/SampleJS.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">
</head>

<body class="dallas">
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link" tabindex="-1">Home</a>
                    <a href="barcelona.php" class="nav-item nav-link" tabindex="-1">FC Barcelona</a>
                    <a href="lafc.php" class="nav-item nav-link" tabindex="-1">Los Angeles FC</a>
                    <a href="dallas.php" class="nav-item nav-link active">FC Dallas</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Real Madrid C.F.</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Liverpool F.C.</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Manchester City F.C.</a>
                    <a href="movies.php" class="nav-item nav-link" tabindex="-1">Soccer Movies</a>
                    
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link active">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>  
    </body>
</html>