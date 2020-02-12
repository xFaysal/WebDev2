function changeText() {
    document.getElementById("textChange").innerHTML = "<div class='js'>Thanks for liking my Webpage</div>";
}

var space = " ";
var pos = 0;
var msg = "This is really bad...";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

function myFunction() {
  alert("You are typing in the wrong box you intelligent-ish human being.");
}

function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname + ". Click the link on the next page to win your iPhone 4s.");
}

function myFunctiontwo() {
  alert("If you submit your name, phone number, credit card number, security code, expiration date and social scurity number in the text box, then you can win a FREE IPHONE 4S!");
}