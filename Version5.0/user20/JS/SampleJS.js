function changeText() {
    document.getElementById("textChange").innerHTML = "<div class='kavya'> Thanks for liking my Webpage</div>";
}

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}

function myFunction() {
    document.getElementById("demo").innerHTML = "Good Job Double Clicking";
}
function allCaps() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
function preferedBrowser() {
  prefer = document.forms[0].browsers.value;
  alert("You prefer browsing internet with " + prefer);
}
function message() {
  alert("This alert box was triggered by the onreset event handler");
}