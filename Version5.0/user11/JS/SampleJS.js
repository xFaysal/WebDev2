function changeText() {
    document.getElementById("textChange").innerHTML = "<div class='food'>Thanks for liking my Webpage</div>";
}



function popup() {
  alert("Welcome to the wonderful website!");
}

function button() {
  document.getElementById("demo").innerHTML = "<|ALERT|> Button has been pressed <|ALERT|> <p>Please refrain from pressing the button.</p>";
}

function clicker(elmnt, clr) {
  elmnt.style.color = clr;
}

function whichElement(e) {
  var targ;
  if (!e) {
    var e = window.event;
  }
  if (e.target) {
    targ=e.target;
  } else if (e.srcElement) {
    targ=e.srcElement;
  }
  var tname;
  tname = targ.tagName;
  alert("You clicked on a " + tname + " element.");
}

function bigImg(x) {
  x.style.height = "64px";
  x.style.width = "64px";
}

function normalImg(x) {
  x.style.height = "32px";
  x.style.width = "32px";
}

function show_coords(event) {
  document.getElementById("demo").innerHTML = "<div class='focus'>X= </div>" + event.clientX + "<div class='focus'<br>Y= </div>" + event.clientY;
}

function loadImage() {
  alert("Image is loaded");
}