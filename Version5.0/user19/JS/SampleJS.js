var texts = 25

function changeText() {
    document.getElementById("textChange").innerHTML = ("Thanks for likeing my Webpage");
}

function changecolor() {
    document.getElementById("textChange").innerHTML = "<div class='red'> weee";
}

function red2() {
    document.getElementById("textChange").innerHTML = "<div class='red-b'>Thanks for likeing my Webpage";
}

function green() {
    document.getElementById("textChange").innerHTML = "<div class='green-b'>Thanks for likeing my Webpage";
}

function blue() {
    document.getElementById("textChange").innerHTML = "<div class='blue-b'>Thanks for likeing my Webpage";
}

function whichButton(event) {
    document.getElementById("demo").innerHTML = event.keyCode;
}

function show_coords(event) {
    document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}

function myFun() {
    document.getElementById("de").innerHTML = "youtube.com/watch?v=jq8-EFzFeyM and https://www.w3schools.com/js/js_events_examples.asp";
}

function lol() {
    alert("are you looking for event #1?");
}
function tex () {
  var y = document.getElementById("li");
  y.value = y.value.toUpperCase();
    document.getElementById("textChange").innerHTML = ("hi "+y.value);

}
function bigImg(x) {
  x.style.height = "180px";
  x.style.width = "180px";
}

function normalImg(x) {
  x.style.height = "100px";
  x.style.width = "100px";

}
function data() {
  document.getElementById("textChange").innerHTML = Date();
}