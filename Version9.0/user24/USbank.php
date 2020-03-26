<?php
$apiKey = "3358aafa547ddf394d19c0304999740c"; //You will need to add in the 
$cityId = "5037649"; //5046997 Shakopee City Id
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
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>US Bank Stadium</title>

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
            // Start animation
            $(".start-btn").click(function() {
                $("img").animate({
                    left: "+=150px"
                }, 2000);
            });

            // Stop running animation
            $(".stop-btn").click(function() {
                $("img").stop();
            });

            // Start animation in the opposite direction
            $(".back-btn").click(function() {
                $("img").animate({
                    left: "-=150px"
                }, 2000);
            });

            // Reset to default
            $(".reset-btn").click(function() {
                $("img").animate({
                    left: "0"
                }, "fast");
            });
        });

    </script>
    <style>
        img {
            position: relative;
            /* Required to move element */
        }
        
        
        .report-container {
    border: #E0E0E0 1px solid;
    padding: 20px 40px 40px 40px;
    border-radius: 2px;
    width: 100%;
    margin: 0 auto;
            color: mediumpurple ;
}


    </style>





</head>

<body class="main">
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="stefon.html">Stefon Diggs</a>
        <a href="thielen.html">Adam Thielen</a>
        <a href="dalvin.html">Dalvin Cook</a>
        <a href="jamal.html">Jamal Adams</a>
        <a href="taylor.html">Sean Taylor</a>
        <a class="active" href="USbank.html">US Bank Stadium</a>

    </div>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/dalvin.jpg" width="100%">
                </div>
                <div class="col-sm-6">
                    <div class="report-container">
                        <h2><?php echo $data->name; ?> Weather Status</h2>
                        <div class="time">
                            <div><?php echo date("l g:i a", $currentTime); ?></div>
                            <div><?php echo date("jS F, Y",$currentTime); ?></div>
                            <div><?php echo ucwords($data->weather[0]->description); ?></div>
                        </div>
                        <div class="weather-forecast">
                            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
                        </div>
                        <div class="time">
                            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <p style="font-size:45px ;color: white">One of my favorite running backs is Dalvin Cook. I'v never met him before but I would love to and also I would love to get a autograph from him. Another thing is that if he had a camp that you can go to I would because it would be fun to do. </p>

    <button type="button" class="start-btn">Start</button>
    <button type="button" class="stop-btn">Stop</button>
    <button type="button" class="back-btn">Back</button>
    <button type="button" class="reset-btn">Reset</button>







</body>

</html>
