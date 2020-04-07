 function changeText() {
     document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
 }


 var space = " ";
 var pos = 0;
 var msg = "User 16";

 function Scroll() {
     document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

     pos++;
     if (pos > msg.length) pos = 0;
     window.setTimeout("Scroll()", 0);
 }

 Scroll();

 function myFunction() {
     var x = document.getElementById("fname");
     x.value = x.value.toUpperCase();
 }

 function confirmInput() {
     fname = document.forms[0].fname.value;
     alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
 }

 function myFunction(x) {
     x.style.background = "yellow";
 }

 function size() {
     var w = window.outerWidth;
     var h = window.outerHeight;
     var txt = "Window size: width=" + w + ", height=" + h;
     document.getElementById("size").innerHTML = txt;
 }

 function color(color) {
     document.forms[0].myInput.style.background = color;
 }

 function message() {
     alert("This alert box was triggered by the onreset event handler");
 }

 function myFunction(x) {
     x.style.background = "yellow";
 }


 function myFunction() {
     var x = document.getElementById("fname");
     x.value = x.value.toUpperCase();
 }

 function show_coords(event) {
     document.getElementById("demo1").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
 }

 function isKeyPressed(event) {
     var text = "The shift key was NOT pressed!";
     if (event.shiftKey == 1)
         text = "The shift key was pressed!";
     document.getElementById("demo").innerHTML = text;
 }
