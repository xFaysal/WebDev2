function popup() {
  alert("Welcome To My Website About Soccer!");
}

function bigImg(x) {
  x.style.height = "450px";
  x.style.width = "400px";
}

function normalImg(x) {
  x.style.height = "250px";
  x.style.width = "200px";
}

function giantImg(x) {
  x.style.height = "400px";
  x.style.width = "400px";
}

function antImg(x) {
  x.style.height = "250px";
  x.style.width = "250px";
}

function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname + "! You will now be brought to a page where you can choose to learn more about a specific player!");
}
