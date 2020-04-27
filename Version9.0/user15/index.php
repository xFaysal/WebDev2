<?php
$apiKey = "54af25e56bf2cbb896b264a7cca5fb8d"; //You will need to add in the 
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


<link rel="shortcut icon" href="images/Football%20copy.jpeg">
<title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.html">Home</a></li>
      <li><a href="Rod.html">Rod Carew</a></li>
      <li><a href="Kirby.html">Kirby Puckett</a></li>
      <li><a href="Harmon.html">Harmon Killebrew</a></li>
      <li><a href="Joe.html">Joe Mauer</a></li>
      <li><a href="Dave.html">Dave Winfield</a></li>
      <li><a href="Bert.html">Bert Blyleven</a></li>
    </ul>
  </div>
</nav>
 <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>Welcome to my site.</h1>
    </div>
<h1 style="color: red;"><link rel="stylesheet" href="CSS/SampleCSS.css">As you go through this website you will see some of the greatest Minnesota Twins players to step on to the field, you will also learn some intresting facts about them to.</h1>
<div class="container">
<body style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZOVfzwjCSv_NkZhDnaBBu64IFVNTbahM_3KtEVKQ9fU-bdN8%3Ahttps%3A%2F%2Fwww.publicdomainpictures.net%2Fpictures%2F30000%2Fvelka%2Fplain-white-background.jpg&usqp=CAU); background-size: 100% 100%;"></body>

<style>
body {
    font-family: Arial;
    font-size: 25px;
    color: #0000ff;
    
}

.report-container {
    border: #ff0000 20px solid;
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
    color: #ff0000;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
}

span.min-temperature {
    margin-left: 15px;
    color: #ff0000;
}

.time {
    line-height: 25px;
}
</style>
    

<div>
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
</div>



