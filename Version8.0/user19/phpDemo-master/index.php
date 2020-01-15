<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Test One Page Web Web ">

    <!-- code obtained from https://frimmy.github.io/api-test/  -->

    <title>Games</title> 
      
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
            <li class="active"><a href="../NewGames.html">Newest Games of 2020</a></li>
                <li><a href="../JavascriptGame.html">Java Games</a></li>
               <li><a href="../Weather/index.php">Weather</a></li>
                <li><a href="index.php">Refresh</a></li>
               

            <li><a href="mailto:aidanmusil@gmail.com?Subject=Hello">Contact</a></li>

          </ul>

        </div><!--/.nav-collapse -->

      </div>

    </div>

<br>
<br>
<br>
      <br>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Newest Game Releases</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Game</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Game</th>";
                                        echo "<th>Release Year</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <button onclick="window.location.href='../NewGames.html';" class="BackfromCustomList">Go back to Main Page</button>
</body>
</html>