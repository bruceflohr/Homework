var theButton = document.getElementById("aButton");
var theDiv = document.getElementById("output");
var clickCount = 0;

function handleClick() {
    //console.log("Button was clicked!");
    theDiv.innerHTML = "The button was clicked " + (++clickCount) + " times";
}

theButton.addEventListener('click', handleClick);