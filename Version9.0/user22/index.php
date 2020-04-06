<?php

?>


<html lang="en">

<head>
    <title>Professional Soccer Teams</title>
    <meta charset="UTF-8">
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/SampleJS.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    
    <link rel="icon" type="image/png" sizes="32x32" href="images/color.png">
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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="barcelona.php" class="nav-item nav-link" tabindex="-1">FC Barcelona</a>
                    <a href="lafc.php" class="nav-item nav-link" tabindex="-1">Los Angeles FC</a>
                    <a href="dallas.php" class="nav-item nav-link" tabindex="-1">FC Dallas</a>
                    <a href="madrid.php" class="nav-item nav-link" tabindex="-1">Real Madrid C.F.</a>
                    <a href="liverpool.php" class="nav-item nav-link" tabindex="-1">Liverpool F.C.</a>
                    <a href="manchester.php" class="nav-item nav-link" tabindex="-1">Manchester City F.C.</a>
                    
                    <link rel="icon" type="image/png" sizes="32x32" href="images/color.png">

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link active">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>
    <h1>ALL ABOUT THE TOP SOCCER TEAMS!</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="https://www.laliga.com/en-GB" alt="LaLiga Website">
                <img src="images/liga.png" alt="La Liga League" width="100%">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.mlssoccer.com/" alt="MLS Website">
                    <img src="images/mls.png" alt="MLS League" width="100%">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.premierleague.com/" alt="Premier League Website">
                <img src="images/premier.png" alt="Premier League" width="100%">
                </a>
            </div>
        </div>
    </div>
    <h2>Click the a picture to visit the website!</h2>
    
    
    
     <center>
        
        <img src="images/color.png" border="0px" width="400px" height="235px" 
          
    </center>
    </br>
    </br>
    <center>
        <form method='post' action='processStudentLogin.php'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6">
                        <input type="text" class="form-control" placeholder="First Name" name='firstName'>
                    </div>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" placeholder="Last Name" name='lastName'>
                    </div>
                    </br>
                    </br>
                    </br>
                    </br>
                    <div class="col-xs-12">
                        <input type="text" class="form-control" placeholder="Position" name='Position'>
                    </div>
                    </br>
                    </br>
                    </br>
                    </br>
                    <div class="col-xs-12">
                        <input type="text" class="form-control" placeholder="Club" name='Club'>
                    </div>
                    </br>
                    </br>
                    </br>
                    </br>
                    <p><label for='Authentication Code'>Authentication Code</label></p>
                    <input type='password' name='password' placeholder="Club Code">
                    </br>
                    </br>
                    <p><input type='submit' value="Give Pass">
                        <!-- <input name = 'edit2' type='submit' value = 'Edit'>
               <input name = 'find2' type='submit' value = 'Find Student'>
               <input name = 'del2' type='submit' value = 'Remove Record'>-->
                    </p>
                    </br>
                    </br>
                    </br>
        </form>
    </center>
        
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                    <p>© 2014 BS3 UI Kit, All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pages">
                                <li><a href="https://www.google.com/search?q=soccer+teams&surl=1&safe=active&ssui=on">Teams</a></li>
                                <li><a href="https://www.google.com/search?ei=NT6HXr2CGOOD9PwP9N2p2Ag&q=soccer+leagues&oq=soccer+lea&gs_lcp=CgZwc3ktYWIQAxgAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADoECAAQR1DA3gFYxOEBYI3xAWgAcAN4AIABhAGIAfMCkgEDMC4zmAEAoAEBqgEHZ3dzLXdpeg&sclient=psy-ab&surl=1&safe=active&ssui=on">Leagues</a></li>
                                <li><a href="https://www.espn.com/soccer/schedule">Schedules</a></li>
                                <li><a href="https://www.google.com/search?q=soccer+stadiums&surl=1&safe=active&ssui=on">Stadiums</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Sign Up for Weekly Newsletter!</h4>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Here">
                        <span class="input-group-btn">
                            <button onclick="EAlert()"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </footer>
        <section style="text-align:center; margin:10px auto;">
            <p>Designed by <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/">Bootstrap</a></p>
        </section>
</body>

</html>
