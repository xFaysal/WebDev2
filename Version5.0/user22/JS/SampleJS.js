function changeText() {
    document.getElementById("textChange").innerHTML = "<div class='soccer'> Thanks for liking my Page";
}

var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function holaFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function mouseFunction(elmnt, clr) {
  elmnt.style.color = clr;
}

function isKeyPressed(event) {
  var text = "The shift key was NOT pressed!";
  if (event.shiftKey == 1) {
    text = "The shift key was pressed!";
  }
  document.getElementById("demo").innerHTML = text;
}

function blurFunction() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}

function pressFunction() {
  alert("You pressed a key inside the input field");
}

function whichButton(event) {
  document.getElementById("demo").innerHTML = event.keyCode;
}

function coordinates(event) {
  document.getElementById("demo").innerHTML = "X = " + event.screenX + "<br>Y = " + event.screenY;
}