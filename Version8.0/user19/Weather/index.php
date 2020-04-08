<?php
$apiKey = "889afab4d13c6f0328d4506c2cb2ddba"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "metric";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}
if ($data->main->temp_min > 10){
    
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

if($data->main->temp_max > 10){
   echo '<body style="background-color:blue">';
        
}
else{
    echo '<body style="background-color:red">';
}
?>

<!doctype html>
<html>

<head>
    <title>Forecast Weather using OpenWeatherMap with PHP</title>

    <style>
        body {
            font-family: Arial;
            font-size: 0.95em;
            color: #929292;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
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

<body onload="on()">

    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?>
            <span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
            <p id="wo"></p>
            <p id="fee"></p>
            <p id="fan"></p>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
    <button onclick="clic()">click for Fahrenheit</button>
    <p id='wo'></p>
    <p><?php echo 'User IP - '.$_SERVER['REMOTE_ADDR'];?></p>
    <script>
        function on() {
            var hot = <?php echo $data->main->temp_min; ?>;
            if (hot < 5) {
                alert("it is less then 10 C do not go out side");
            }
            else{alert("hi "+"<?php echo 'User - '.$_SERVER['REMOTE_ADDR'];?>")}
            //https://www.codexworld.com/how-to/get-user-ip-address-php/
            //https://www.calcunation.com/calculator/wind-chill-celsius.php
            
            var oil = 13.12 + (.6215 * <?php echo $data->main->temp_min; ?>) - (11.37 * <?php echo $data->wind->speed; ?>**0.16) + (.3965 * <?php echo $data->main->temp_min; ?> * <?php echo $data->wind->speed; ?>**0.16);
            document.getElementById("fee").innerHTML = ("feel like "+ oil + " C");
            var ave = (<?php echo $data->main->temp_min; ?> + <?php echo $data->main->temp_max; ?>)/2;
                document.getElementById("fan").innerHTML = ("avrige "+ ave + " C");
        }

        function clic() {
            var oof = (<?php echo $data->main->temp_min; ?> * 9 / 5 + 32);
            document.getElementById("wo").innerHTML = (oof + " F");
        }
        
    </script>
</body>

</html>
