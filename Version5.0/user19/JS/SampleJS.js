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
function lol(){var msg="are you looking for event #8?";
return msg;}