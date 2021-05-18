function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function changeText2() {
    document.getElementById("doubleClickChange").innerHTML = "Here's your cookie🍪";
}

function textSelect() {
    document.getElementById("addText").innerHTML = "You selected some text";
}

function textChange3() {
    alert("You pressed a key!");
}

function changeText4() {
    document.getElementById("textChange3").innerHTML = "Your cursor touched the text!";
}

function upperCase() {
    var x = document.getElementById("inputText");
    x.value = x.value.toUpperCase();
  }

function focusFunction(x) {
    x.style.background = "yellow";
}

function loadFunction() {
    alert("Page is loaded");
}