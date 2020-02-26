function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my webpage!";
    document.getElementById("textChange").style.fontFamily = 'comicsans';
    document.getElementById('textChange').style.color = getRandomColor();
}

function getRandomColor() {
  var letters = '0123456789ABCDEF'; //0123456789ABCDEF :Old value
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function control(setting){
    var vid = document.getElementById('video');
    var plbutt = document.getElementById('btn2');
    var pabutt = document.getElementById('btn3');
    var sbutt = document.getElementById('btn4');
    if (setting == 's'){
        vid.style.visibility = 'visible';
        vid.height = '240';
        vid.play();
        plbutt.classList.remove('disabled');
        pabutt.classList.remove('disabled');
        sbutt.classList.remove('disabled');
        
    }else if(setting == 'pa'){
        vid.pause();
        
    }else if(setting == 'pl'){
        vid.play();
        
    }else if(setting == 'e'){
        vid.style.visibility = 'collapse';
        vid.height = '1';
        vid.pause();
        plbutt.classList.add('disabled');
        pabutt.classList.add('disabled');
        sbutt.classList.add('disabled');
    }
}

function turn() {
    document.getElementById('yes').style.transform = 'rotate(-10deg)';
}

function turn2() {
    document.getElementById('textChange').style.transform = 'rotate(10deg)';
}

var space = " ";
var pos = 0;
var msg = "Seth Bercich (User 02's) Website";
function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);
    pos+= 2;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 270);
}
Scroll();

function hover(el){
    var ele = document.getElementById(el);
    ele.style.background = '#AAAAAA';
    ele.style.color = '#FF0000';
}

function unhover(el){
    var ele = document.getElementById(el);
    ele.style.background = '#FFFFFF';
    ele.style.color = '#000000';
}

function backgroundoff() {
    para = document.getElementById('para');
    para.style.background = '#FFFFFF';
    para.style.fontSize = '16px';
}

var rot = 0;
function barrelRoll() {
    rot += 4;
    document.body.style.transform = 'rotate(' + rot + 'deg)';
    document.body.style.backgroundColor = getRandomColor();
    if (rot != 360) {
        window.setTimeout("barrelRoll()", 20);
    } else {
        rot = 0;
        document.body.style.backgroundColor = '#FFFFFF';
    }
}

var paragraph = 'My Log: '
var script = ""
var char = 0
function insertz(){
    paragraph += script[char];
    console.log(paragraph);
    document.getElementById('typeScript').innerHTML = paragraph;
    char++;
}