function myAlert() {
  alert("Are You Sure You Want to Return to the Home Page?");
}

function reSize() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}

function color(color) {
  document.forms[0].myInput.style.background = color;
}