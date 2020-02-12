function changeText() {
    document.getElementById("textChange").innerHTML = "<div class='kavya'> Thanks for liking my Webpage</div>";
}
var space = " ";
var pos = 0;
var msg = "User 20";

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
