
<html lang="en">
<head>
<div id="Script and stlye">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link href="CSS/day.css" rel="stylesheet" type="text/css">
<script src="JS/jquery-3.4.1.js"></script>
<script src="JS/WebDevUser22_script.js"></script>
<script src="JS/jquery.rotate.1-1.js"></script>
</div>
<title>Kanji</title>
<meta charset="UTF-8">
<script>
		$(document).ready(function() {
			$("body").css("font-family", "Comic Sans MS")
		});

		$(document).ready(function() {
	var $this = document.getElementById("light");
	$($this).attr('disabled', 'disabled')
});	
</script>

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
		.show {
  			display: block;
		}
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}
	

window.onclick = function (e) {
	if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}


/*jslint node: true */



var link = $('link');
$('#stylebutton .button').on('click', function () {	
			var $this = $(this);
			var stylesheet = $(this).data('file');
			link.attr('href', 'CSS/' + stylesheet + '.css');
			$this
			.siblings('button')
				.removeAttr('disabled')
				.end()
				.attr('disabled', 'disabled')
}); 
    </script>
</head>
<body>
<div class="topnav">
	<a href="index.html">Home</a>
	<a href="HTML/webDevUser22_music.html">Food</a>
	<a href="HTML/WebDevUser22_Games.html">Bad Games</a>
	<a href="HTML/WebDevUser22_lists.html">IDK</a>
	<a href="HTML/FAQ.html">FAQ</a>
	<a class="active" href="kanji.php">Kanji Ranking</a>
	<div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Settings
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
	<div id="stylebutton" display="block">
		<button data-file="day" class="button" id="light">Light Mode</button>
		<button data-file="night" class="button">Objectivly Better Mode</button>
	</div>
  </div>	
  </div> 
</div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Kanji Details</h2>
                        <a href="PHP/create.php" class="btn btn-success pull-right">Add New Record</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "PHP/config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM kanji_ranking";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['kanji'] . "</td>";
                                        echo "<td>" . $row['stroke_count'] . "</td>";
                                        echo "<td>" . $row['difficulty'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='PHP/read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='PHP/update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='PHP/delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</body>
</html>