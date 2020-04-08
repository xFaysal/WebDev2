<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:Diya Thomas 
        Date Completed:01/30/2020
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <link rel="shortcut icon" href=images/applefavicon.png />
    <script src="jquery-3.4.1%20copy.js"></script>

    <title>Apple Recipes</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <script>
        $(document).ready(function() {
            $("#fadeinButton").click(function() {
                $("#p1").fadeToggle();
                $("#p2").fadeToggle();
                $("#p3").fadeToggle();

            });
            $("#fadetoggleButton").click(function() {
                $("#p111").fadeToggle();
                $("#p11").fadeToggle();
                $("#p12").fadeToggle();
                $("#p33").fadeToggle();
                $("#p4").fadeToggle();
                $("#p5").fadeToggle();

            });
            $("#fadeFritter").click(function() {
                $("#fr1").fadeToggle();
                $("#fr2").fadeToggle();
                $("#fr3").fadeToggle();

            });
            $("#fadeCobbler").click(function() {
                $("#co1").fadeToggle();
                $("#co2").fadeToggle();
                $("#co3").fadeToggle();
                $("#co4").fadeToggle();
                $("#co5").fadeToggle();

            });
        });

    </script>



</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">APPLES</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                        <a href="index.html" class="nav-item nav-link active">Home</a>

                    <a href="types.php" class="nav-item nav-link active" tabindex="-1">Types</a>
                    <a href="ranking.php" class="nav-item nav-link active" tabindex="-2">Ranking</a>
                    <a href="recipes.php" class="nav-item nav-link active" tabindex="-2">Recipes</a>
                    <a href="game.php" class="nav-item nav-link active" tabindex="-2">Facts</a>
                    <a href="faqs.php" class="nav-item nav-link active" tabindex="-2">FAQs</a>
                    
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
    <div>

        <div class="row">




        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="col demo-content">
                    <button id="fadeinButton">Crisp</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="col demo-content bg-alt">
                    <button id="fadetoggleButton">Pie</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="col demo-content">
                    <button id="fadeFritter"> Fritter</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="col demo-content">
                    <button id="fadeCobbler">Cobbler</button>
                </div>
            </div>
        </div>


        <div>
            <p id=p111 style="display:none">Instructions</p>
            
            <p id=p11 style="display:none">1. Preheat oven to 425 degrees F. Bring refrigerated pie crusts to room temperature.
                Unroll 1 pie crust and press it into a 9-inch glass pie plate.
                In a large bowl, toss together all of the filling ingredients.</p>

            <p id=p12 style="display:none">2. Transfer filling to the pie plate. Unroll the second pie crust and place it on top of the apples.</p>

            <p id=p33 style="display:none">3. Tuck the extra top crust under the bottom crust edge, pinching together with your fingers to seal.
                Cut slits in the top of the pie (to allow steam to vent).</p>

            <p id=p4 style="display:none">4. Bake for 40-45 minutes, or until apples are tender and crust is golden brown. About halfway through the baking time, cover the edge of the crust with strips of aluminum foil to prevent the edges from becoming too dark.</p>
            <p id=p5 style="display:none">5. Cool pie on a wire rack for at least 2 hours before slicing and serving.</p>
        </div>


        <div>
            <p id=p1 style="display:none">1. Preheat oven to 375 degrees F (190 degrees C). Lightly grease an 8-inch square baking dish.</p>

            <p id=p2 style="display:none">2. Arrange apple slices evenly in prepared baking dish. Sift flour, sugar, cinnamon, and salt in a bowl. Cut in butter using a pastry blender or 2 knives until mixture resembles coarse cornmeal; sprinkle over apples.
            </p>

            <p id=p3 style="display:none">3. Bake in preheated oven until topping is golden, 40 to 45 minutes. Cool slightly before serving.</p>
        </div>

        <div>
            <p id=fr1 style="display:none">1. Heat a couple of inches of vegetable oil in a heavy pot or Dutch oven over medium to medium-low heat until a deep-fry thermometer inserted in the oil registers 340 degrees F.</p>

            <p id=fr2 style="display:none">2. In a mixing bowl, combine the flour, granulated sugar, baking powder, cinnamon and salt. In a separate bowl, beat the eggs with a fork, then add the milk, melted butter and vanilla. Gently fold the dry and wet ingredients together until just combined (do not over-mix). Fold in the apples, adding enough to make a very chunky batter.</p>

            <p id=fr3 style="display:none">3. Drop heaping tablespoons of batter into the hot oil, 6 to 8 at a time. Fry until golden brown, 4 to 6 minutes. Remove and drain on paper towels. Dust generously with powdered sugar and serve warm with sausage and bacon!</p>

        </div>

        <div>
            <p id=co1 style="display:none">1. Heat oven to 350°F.</p>

            <p id=co2 style="display:none">2. Place sliced apples in ungreased 13x9-inch baking dish.</p>

            <p id=co3 style="display:none">3. Combine 3/4 cup sugar and 1/2 teaspoon cinnamon in bowl; sprinkle over apples.</p>

            <p id=co4 style="display:none">4. Combine remaining cinnamon, flour, sugar, eggs, baking powder and salt in bowl; mix until mixture resembles coarse crumbs. Sprinkle over apples. Pour melted butter over topping. Bake 45-55 minutes or until lightly browned and apples are tender.</p>

            <p id=co5 style="display:none">Serve warm with ice cream, if desired.</p>


        </div>






    </div>
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
</body>

</html>
