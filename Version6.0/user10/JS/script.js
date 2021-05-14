
function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}
var space = " ";
var pos = 0;
var msg = "User 10";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();
function WhichButton(event) {
    alert("You pressed button: " + event.button)
}
function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}
function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
        text = "The shift key was pressed!";
    }
    document.getElementById("KeyPressed").innerHTML = text;
}
function myCoordinate() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("coordinate").innerHTML = txt;
}
function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}
function message() {
    alert("This is an alert to let you know that the text typed has now been reset.");
  }