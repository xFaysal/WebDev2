function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function message() {
    alert("This alert box was triggered by the onreset event handler");
}

function color(elmnt, clr) {
    elmnt.style.color = clr;
}

function myFunction(e) {
    x = e.clientX;
    y = e.clientY;
    coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor
}

function clearCoor() {
    document.getElementById("demo").innerHTML = "";
}

function clickhere() {
    document.getElementById("surprise").innerHTML = "Surprise!";

}

function capitalize() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();

}

function selecttext() {
    document.getElementById("select").innerHTML = "You selected this text";
}

function loadImage() {
    alert("Image is loaded")
}
