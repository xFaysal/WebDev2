<html lang="en">
<!--Version 9.0 
	Name:Ava Frey
	Date Completed:4/2/20
    -->
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/135675/isolated/preview/16f4c29c562be3910fca66d182d42f04-blue-cloud-weather-icon-by-vexels.png">
    <head>
<body style="background-color:#add8e6;">
    
            <head>
        <title>Weather</title>
        <link rel="stylesheet" type="text/css" href="sampleCSS.css"

        
        <!-- These are needed to get the responsive menu to work -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom styles for this template -->
        
<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.html" class="nav-item nav-link active">Favorite Countries</a>
                    <a href="usa2.html" class="nav-item nav-link active">USA</a>
                    <a href="usa2%20copy.html" class="nav-item nav-link active" tabindex="-1">Brazil</a>
                    <a href="canada2.html" class="nav-item nav-link active" tabindex="-2">Canada</a>
                    <a href="australia2.html" class="nav-item nav-link active" tabindex="-2">Australia</a>
                    <a href="philippines2.html" class="nav-item nav-link active" tabindex="-2">Philippines</a>
                    <a href="weather2.php" class="nav-item nav-link active" tabindex="-2">Weather</a>
                    <a href="contact.html" class="nav-item nav-link active" tabindex="-2">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="wheresMyStudent%20copy.html" class="nav-item nav-link active">Login</a>
                </div>
            </div>
        </nav>
    </div>

</html>

<center>
                
<?php
$apiKey = "9d3c2bdf0e66f7fe0b658441d03d6107"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "metric";//metric-Farhenheit  imperial-Farhenheit
$units = "metric";//metric-Farhenheit  imperial-Farhenheit
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
     <h1></h1>
     
<footer>       
<div class="footer">
  <p>Webpage made by: Ava Frey</p>
</div>
    </footer>