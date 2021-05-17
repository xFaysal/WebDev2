function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function changeText2() {
    document.getElementById("doubleClickChange").innerHTML = "Here's your cookie🍪";
}

var x = document.getElementById("num1");
var y = document.getElementById("num2");
var value = x + y
function numberAdder() {
    document.getElementById("change").innerHTML = value;
}

function textChange3() {
    alert("You pressed a key!");
}

function changeText3() {
    document.getElementById("textChange3").innerHTML = "Your cursor touched the text!";
}

function upperCase() {
    var x = document.getElementById("inputText");
    x.value = x.value.toUpperCase();
  }