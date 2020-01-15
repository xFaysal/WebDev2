<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
     <br>
    <br>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Test One Page Web Web ">

    <!-- code obtained from https://frimmy.github.io/api-test/  -->

    <title>Newest Games</title>


    <!-- Bootstrap core CSS -->

    <link href="CSS/bootstrapEdit.css" rel="stylesheet">

 

    <!-- Custom styles for this template -->

    <link rel="stylesheet" type="text/css"

          href="https://fonts.googleapis.com/css?family=Lobster">

    <link href="CSS/MainCSS.css" rel="stylesheet">


  </head>


  <body>
<style>
body {
    background-image: url('images/download.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
    </style>
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
               <li><a href="delete.php">Refresh</a></li>
            <li><a href="mailto:aidanmusil@gmail.com?Subject=Hello">Contact</a></li>

          </ul>

        </div><!--/.nav-collapse -->

      </div>

    </div>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>