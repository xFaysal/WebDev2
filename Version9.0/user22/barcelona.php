<?php
$apiKey = "e492046fa637c4996e0e5903864807f0"; //You will need to add in the 
$cityId = "6356055"; //5046997 Shakopee City Id
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
    <style>
        .report-container {
            border: black 3px dashed;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
            color: black;
            background-color: skyblue;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }

    </style>
</head>

<body class="barcelona">
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
                    <a href="barcelona.php" class="nav-item nav-link active">FC Barcelona</a>
                    <a href="lafc.php" class="nav-item nav-link" tabindex="-1">Los Angeles FC</a>
                    <a href="dallas.php" class="nav-item nav-link" tabindex="-1">FC Dallas</a>
                    <a href="madrid.php" class="nav-item nav-link" tabindex="-1">Real Madrid C.F.</a>
                    <a href="liverpool.php" class="nav-item nav-link" tabindex="-1">Liverpool F.C.</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Manchester City F.C.</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link active">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/bteam.jpg" width="100%">
            </div>
            <div class="col-sm-6">
                <p class="team">Standings for Top 5</p>
                <p class="standings">as of 3-26-2020</p>
                <table>
                    <tr>
                        <th>Position</th>
                        <th>Team</th>
                        <th>Wins</th>
                        <th>Loses</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>FC Barcelona</th>
                        <th>18</th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>R Madrid</th>
                        <th>16</th>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Sevilla</th>
                        <th>13</th>
                        <th>8</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>Real Soociedad</th>
                        <th>14</th>
                        <th>9</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>Gatafe</th>
                        <th>13</th>
                        <th>7</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <p class="team">SOCCER WEATHER IN BARCELONA?</p>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div>
                <h3 style="color:grey"><?php echo ucwords($data->weather[0]->description); ?></h3>
            </div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <span style="color: <?php echo $high ?>;"><?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?></span>
            <span class="min-temperature" style="color:<?php echo $low ?>;"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
<p class="barcelonas">They are Sponsored by RAKUTEN</p>

</body>

</html>
