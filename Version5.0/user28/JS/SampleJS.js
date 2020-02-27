function changeText() {
    document.getElementById("textChange").innerHTML = "<div class= 'diya'> Thanks for liking my Webpage";
}

function changeTexts() {
    document.getElementById("textChange").innerHTML = "<div class= 'diya'> sry u don't like it";
}

function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}

function bigImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
}

function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}

function bigImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
    
}

function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}

function allCaps() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function confirmInput() {
    fname = document.forms[0].fname.value;
}

function show_coords(event) {
    document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}
