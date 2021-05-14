function changeText() {
  document.getElementById("textChange").innerHTML = "thank you for liking";
}

function uppercase() {
  var x = document.getElementById("number two");
  x.value = x.value.toUpperCase();
}

function whichElement(e) {
  var targ;
  if (!e) {
    var e = window.event;
  }
  if (e.target) {
    targ = e.target;
  } else if (e.srcElement) {
    targ = e.srcElement;
  }
  var tname;
  tname = targ.tagName;
  alert("You clicked on a " + tname + " element.");
}
function max(e) {
  x = e.clientX;
  y = e.clientY;
  coor = "Coordinates: (" + x + "," + y + ")";
  document.getElementById("cordinates").innerHTML = coor
}

function clearCoor() {
  document.getElementById("demo").innerHTML = "";
}

function nice() {
  document.getElementById("demo").innerHTML = "Hello World";
}

function doubleclick() {
  document.getElementById("hi").innerHTML = "you have solved the puzzle";

}


function resize() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("resize").innerHTML = txt;
}
function colorchange(elmnt, clr) {
  elmnt.style.color = clr;
}