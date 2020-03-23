<!DOCTYPE html>
<html lang="en">
<!--Movie Poster Database
        Name:
        Date Completed:
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Movie Poster Finder App</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JS needed to load poster -->
    <script type="text/javascript" src="scripts.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

    </style>


</head>

<body class="main">
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
                    <a href="barcelona.php" class="nav-item nav-link" tabindex="-1">FC Barcelona</a>
                    <a href="lafc.php" class="nav-item nav-link" tabindex="-1">Los Angeles FC</a>
                    <a href="dallas.php" class="nav-item nav-link" tabindex="-1">FC Dallas</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Real Madrid C.F.</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Liverpool F.C.</a>
                    <a href="#" class="nav-item nav-link" tabindex="-1">Manchester City F.C.</a>
                    <a href="movies.php" class="nav-item nav-link active">Soccer Movies</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link active">Sign Up</a>
                </div>
            </div>
        </nav>

    </div>

    <h1>Find a Soccer Movie</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <section id="fetch">
                    <form name="fetch">
                        <input type="text" placeholder="Enter a soccer movie title" id="term" value="Pele" />
                        <input type="submit" id="search" value="Find me a poster" />
                    </form>
                </section>

                <section id="poster">

                </section>
                <footer>
                    <p>The MovieDB</p>
                </footer>
            </div>
            <div class="col-sm-6">
                <h2>Some Ideas</h2>
                <ul>
                    <li>Alex and me</li>
                    <li>She's the Man</li>
                    <li>Kicking and Screaming</li>
                    <li>The Two Escobars</li>
                    <li>Air Bud World Pup</li>
                </ul>
            </div>
        </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>

</html>
