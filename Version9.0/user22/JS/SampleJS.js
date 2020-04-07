function EAlert() {
    alert("You are now registered for the weekly newsletter");
}

var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
}

$(document).ready(function () {
    $("#div1").fadeIn(3000);
    $("#div2").fadeIn(3000);
    $("#div3").fadeIn(3000);
});


$(document).ready(function(){
  $("button").click(function(){
    $("#hide").hide();
  });
});


$(document).ready(function(){
    $("button").click(function(){
        $("#show").show();
    })
})
