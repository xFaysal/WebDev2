function changeText() {
 document.getElementById("textChange").innerHTML="<div class='ava'> Thanks for liking my Webpage</div>";
} 
var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();
