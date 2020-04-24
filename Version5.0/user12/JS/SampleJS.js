function changeText() {
    document.getElementById("textChange").innerHTML = "<div class='isiah'> Have a good day</div>";

}

function myFunction() {
    var x = document.getElementById("uppercase");
    x.value = x.value.toUpperCase();
}


var space = " ";
var pos = 0;
var msg = "Isiah";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll()



function Backround(x) {
    x.style.background = "blue";
}

function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
        text = "The shift key was pressed!";
    }
    document.getElementById("shift").innerHTML = text;
}

function confirmInput() {
    fname = document.forms[2].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}

function color(color) {
    document.forms[1].myInput.style.background = color;
}

function WhichButton(event) {
    alert("You pressed button: " + event.button)
}


function show_coords(event) {
    document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}
