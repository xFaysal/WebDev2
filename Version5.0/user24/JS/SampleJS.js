function changeText() {
 document.getElementById("textChange").innerHTML="<div class='Jacob'> Have a good weekend";
}

var space = " ";
var pos = 0;
var msg = "Football";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();



function worldFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}

function whichButton(event) {
  document.getElementById("demo").innerHTML = event.keyCode;
}

function loadImage() {
  alert("Image is loaded");
}

function allCaps() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}

function myFunction() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}

function message() {
  alert("This alert box was triggered by the onreset event handler");
}

function writeMessage() {
  document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}