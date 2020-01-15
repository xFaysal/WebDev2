<?php
$apiKey = "565190dbf0e371fe1726f3c23121552c"; //You will need to add in the 
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

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<html>
<head>
<title>Weather in Shakopee</title>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Test One Page Web Web ">

    <!-- code obtained from https://frimmy.github.io/api-test/  -->

    <title>Home</title> 
      
    <!-- CSS -->

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
      
    <link href="CSS/MainCSS.css" rel="stylesheet">


    <!-- Custom styles for this template -->

    <link rel="stylesheet" type="text/css"

          href="https://fonts.googleapis.com/css?family=Lobster">

    <link href="style.css" rel="stylesheet">


  </head>


  <body>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

         

        </div>

        <div class="collapse navbar-collapse">

           <ul class="nav navbar-nav">
               <li><a href="../index.html">Index</a></li>
               
               <li><a href="../FAQ.html">Apps</a></li>
               
            <li><a href="../index.html">Home</a></li>
               <li><a href="../favthings.html">Best and Worst Games of 2019</a></li>
            <li><a href="../NewGames.html">Newest Games of 2020</a></li>
                <li><a href="../JavascriptGame.html">Java Games</a></li>
               <li class="active"><a href="../Weather/index.php">Weather</a></li>
                <li><a href="index.php">Refresh</a></li>
               

            <li><a href="mailto:aidanmusil@gmail.com?Subject=Hello">Contact</a></li>

          </ul>

        </div><!--/.nav-collapse -->

      </div>

    </div>

<style>
body {
    font-family: Arial;
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
<body>
<br>
<br>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>


</body>
</html>