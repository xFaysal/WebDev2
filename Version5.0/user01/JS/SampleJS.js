function changeText() {
 document.getElementById("textChange").innerHTML="General Kenobi, a bold one.";
}

function LoremIpsum() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}


Enter your name: <input type="text" id="fname" onblur="LoremIpsum()">
