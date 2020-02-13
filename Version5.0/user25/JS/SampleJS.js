function changeText() {
 document.getElementById("textChange").innerHTML="<div class=Zach> Your amazing for liking my page</div>";
}


function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}

function preferedBrowser() {
  prefer = document.forms[0].browsers.value;
  alert("You prefer browsing internet with " + prefer);
}

function myFunction() {
  document.getElementById("demo").innerHTML = "You selected some text";
}

function color(color) {
  document.forms[0].myInput.style.background = color;
}

function loadImage() {
  alert("Image is loaded");
}

function myFunction() {
  alert("Thank you for visiting W3Schools!");
}

function myFunction() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}

function openWin() {
  myWindow = window.open("", "", "width=400, height=200");
}

function printPage() {
  window.print();
}

var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();



