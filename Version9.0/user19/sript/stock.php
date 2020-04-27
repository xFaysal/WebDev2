<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} 
require_once "config.php";
$curl_str = 'https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&apikey=B3GVO2Y1AV1L7HXV';



$hostname = "localhost";
$username = "root";
$password = "";
$db = "stonks";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

$use = htmlspecialchars($_SESSION["username"]);

?>

<head>

    <meta charset=utf-8>

    <script src="../JS/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../images/ms-icon-310x310.png" />
    <!-- <link rel="stylesheet" href="../CSS/JQ-M.css"> -->
    <link rel="stylesheet" href="../CSS/SampleCSS.css">
    <title>Stonks</title>
    <style>
        table,
        th,
        td {
            border: 5px solid forestgreen;
            background-color: midnightblue;
            color: ghostwhite;
            text-align: center;
            font-size: 30px;

        }

        table {
            margin: 10%;
            width: 80%;
        }

        .table_B {
            font-size: 50px;
        }

        b {
            margin-left: 10%;
            font-size: 45px;
            text-align: center;
        }

        h1 {
            margin: 10%;
            font-size: 25px;
        }

        button {
            margin-left: 10%;
            width: 80%;
            background-color: forestgreen;
            border-radius: 55px;
            border-width: 20px;
            border-color: mediumblue;
            text-align: center;
        }

        .foot {
            width: 100%;
            background-color: darkgreen;
            bottom: 1px;

        }

        img {
            margin-top: 5%;
            margin-left: 10%;
            width: 80%;
        }

    </style>
</head>

<body>
    <div class="menu" style="position: fixed; width: 100%;">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com/WebDev" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="Camp%20copy.php" class="nav-item nav-link active">Camps</a>
                    <a href="history%20copy.php" class="nav-item nav-link active" tabindex="-1">History</a>
                    <a href="segwal%20copy.php" class="nav-item nav-link active" tabindex="-2">Events</a>
                    <a href="Ticket%20copy.php" class="nav-item nav-link active" tabindex="-2">Tickets</a>
                    <a href="Cool%20code%20copy.php" class="nav-item nav-link active" tabindex="-2">Code fun</a>
                    <a href="stock.php" class="nav-item nav-link active" tabindex="-2">Stonks</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>
    <img src="https://bullishbears.com/wp-content/uploads/2018/07/mood.jpg">
    <table>
        <tr>
            <th class="table_B"> Stock 1 </th>
            <th class="table_B"> Stock 2 </th>
            <th class="table_B"> Stock 3 </th>
        </tr>
        <?php

$query = mysqli_query($dbconnect, "SELECT * FROM stonks WHERE user_name = 'Liam the grape'")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
    
    $API_KEY = "B3GVO2Y1AV1L7HXV";
$ch = curl_init();
$stock = $row['stock_1'];
curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=".$stock."&apikey=" . $API_KEY));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
$result = json_decode($server_output);
    
  echo
   "<tr>
    <td>{$row['stock_1']}</td>
    <td>{$row['stock_2']}</td>
    <td>{$row['stock_3']}</td>
   </tr>\n";
   $dataForAllDays = $result->{'Time Series (Daily)'};
   $dataForSingleDate = $dataForAllDays->{'2020-04-03'};
    
    
   echo'<tr>';
   echo'<td>';
   echo $dataForSingleDate->{'1. open'} . '<br/>';
   echo'</td>';

$ch = curl_init();
$stock2 = $row['stock_2'];
curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=".$stock2."&apikey=" . $API_KEY));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output2 = curl_exec ($ch);
curl_close ($ch);
$result2 = json_decode($server_output2);
    
    $dataForAllDays2 = $result2->{'Time Series (Daily)'};
   $dataForSingleDate2 = $dataForAllDays2->{'2020-04-03'};
   echo'<td>';
   echo $dataForSingleDate2->{'1. open'} . '<br/>';
   echo "</td>";
    
    $ch = curl_init();
$stock3 = $row['stock_3'];
curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=".$stock3."&apikey=" . $API_KEY));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output3 = curl_exec ($ch);
curl_close ($ch);
$result3 = json_decode($server_output3);
    
    $dataForAllDays3 = $result3->{'Time Series (Daily)'};
   $dataForSingleDate3 = $dataForAllDays3->{'2020-04-03'};
    
    echo'<td>';
   echo $dataForSingleDate3->{'1. open'} . '<br/>';
   echo "</td>";
   echo"</tr>";
   
   
   ;

}

?>
    </table>
    <b>ADD stock simbles</b>
    <h1>instushions</h1>
    
    <footer>
        <div class="foot">
            <table>
                <tr>
                    <th class="table_B"> Stock 1 </th>
                    <th class="table_B"> Stock 2 </th>
                    <th class="table_B"> Stock 3 </th>
                </tr>
                <?php
                $query = mysqli_query($dbconnect, "SELECT * FROM stonks WHERE user_name = 'Liam the grape'")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
                echo
                    "<tr>
                    <td>{$row['stock_1']}</td>
                    <td>{$row['stock_2']}</td>
                    <td>{$row['stock_3']}</td>
                    </tr>\n";
}
                
                
                echo'<tr>';
                echo'<td>';
                echo $dataForSingleDate->{'1. open'} . '<br/>';
                echo'</td>';
                echo'<td>';
                echo $dataForSingleDate2->{'1. open'} . '<br/>';
                echo "</td>";
                echo'<td>';
                echo $dataForSingleDate3->{'1. open'} . '<br/>';
                echo "</td>";
                echo'</tr>';
                
                ?>
                <tr>
                    <th><a href="index.php" class="nav-item nav-link active">Home</a></th>
                    <th><a href="Camp%20copy.php" class="nav-item nav-link active">Camps</a></th>
                    <th><a href="history%20copy.php" class="nav-item nav-link active" tabindex="-1">History</a></th>
                </tr>
                <tr>
                    <th><a href="segwal%20copy.php" class="nav-item nav-link active" tabindex="-2">Events</a></th>
                    <th><a href="Ticket%20copy.php" class="nav-item nav-link active" tabindex="-2">Tickets</a></th>
                    <th><a href="Cool%20code%20copy.php" class="nav-item nav-link active" tabindex="-2">Code fun</a></th>
                </tr>
                <tr>
                    <th><a href="stock.php" class="nav-item nav-link active" tabindex="-2">Stonks</a></th>
                    <th><a href="reset_password.php" class="nav-item nav-link active" tabindex="-2">Reset password</a></th>
                    <th><a href="register.php" class="nav-item nav-link active" tabindex="-2">register</a></th>
                </tr>
                <tr>
                    <th><a href="login.php" class="nav-item nav-link active" tabindex="-2">Log in</a></th>
                    <th><a href="logout.php" class="nav-item nav-link active" tabindex="-2"><?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?></a></th>
                    <th></th>
                </tr>
            </table>
        </div>
    </footer>


</body>

