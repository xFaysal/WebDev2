function changeText() {
 document.getElementById("textChange").innerHTML="<div class='ava'> Thanks for liking my Webpage</div>";
} 
function allCaps() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
function trigKey() {
  alert("You pressed a key inside the input field");
}
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
function doubleClick() {
  document.getElementById("demo").innerHTML = "Hello World";
}
function myFunction(elmnt, clr) {
  elmnt.style.color = clr;
}
function whichButton(event) {
  document.getElementById("demo").innerHTML = event.keyCode;
}