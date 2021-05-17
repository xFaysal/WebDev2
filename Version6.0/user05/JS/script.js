function changeText() {
    document.getElementById("textChange").innerHTML = "<strong>You've been killed by Red</strong>";
}

function onBlur() {
    document.getElementById("fname")
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function addTextFn() {
    console.trace("addTextFn()");
    var el = document.getElementById("addText");
    el.innerHTML = "I just hit the button";
}

function Beeb() {
    alert("Crash Landed");
}

function Hola() {
    alert("Vented")
}

function displayDate() {
    document.getElementById("Test").innerHTML = Date();
}

function show_coords(event) {
    document.getElementById("demo").innerHTML = "X = " + event.clientX + "<br>Y = " + event.clientY;
}

function Yes() {
    var txt;
    var person = prompt("Please enter your name:", "Harry Potter");
    if (person == null || person == "") {
      txt = "User cancelled the prompt.";
    } else {
      txt = "Hello " + person + "! How are you today?";
    }
    document.getElementById("LOL").innerHTML = txt;
}