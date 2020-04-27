<html lang="en">
<!--Version 7.0 
	Name:Christian Lachica
	Date Completed:
    -->
<?php
$apiKey = "fdc557ff07128deb99f398d577bc7476"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}


$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" .  $apiKey;


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


if(($data->main->temp_max) < 40){
    $color= 'blue';
    $text= 'white';
}else{
    $color= 'gray';
    $text= 'white';
}

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<head>

    <title>Home</title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>


    <style>
        .report-container {
            width: 350px;
            color: white;
            background-color: green;
            border: 1px solid black;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: white;
        }

        .time {
            line-height: 25px;
            align-content: center
        }
       
        .footer {
    position: fixed;
    height: 55px;
    bottom: 0;
    width: 100%;
    background-color: #e6e6e6;
}

    </style>

</head>

<link rel="icon" type="image/png" href="images/favicon.ico">

<body onload="popup ()">
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About Site</a>
                    <a href="lewandowski.php" class="nav-item nav-link active" tabindex="-1">Robert Lewandowski</a>
                    <a href="quintero.php" class="nav-item nav-link active" tabindex="-1">Darwin Quintero</a>
                    <a href="salah.php" class="nav-item nav-link active" tabindex="-1">Mohamed Salah</a>
                    <a href="contact.php" class="nav-item nav-link active" tabindex="-1">Contact</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
    </div>
    </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->
    <h1>Home</h1> <br>

    <div>
        <center>
            <h2>Welcome To My Website</h2>
        </center>

        <br>

        <center>To Learn More About The Website Click The <a class="tab" href="about.php">[About Site]</a> Tab. To Learn More About A Specific Player Click The Tab With Their Name On It.</center> <br><br>
    </div>
    <div align=center>
        <div class="report-container" style='color:<?php echo $text ?>'>
            <h2><?php echo $data->name; ?> Weather Status</h2>
            <div class="time">
                <div><?php echo date("l g:i a", $currentTime); ?></div>
                <div><?php echo date("jS F, Y",$currentTime); ?></div>
                <div><?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
            <div class="weather-forecast" style='color:<?php echo $text ?>;'>
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
            </div>
            <div class="time" style='color:<?php echo $text ?>'>
                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <center><div class="container">
            <div>© <a href="https://www.shakopee.k12.mn.us/">Shakopee Public Schools</a> | <a href="https://www.shakopee.k12.mn.us/domain/61">About Company</a>
            </div></div></center>
    </footer>
</body>

</html>
