var theButton = document.getElementById("theButton");
var theDiv = document.getElementById("output");
var clickCount = 0;

function handleClick() {
    //console.log("Button was clicked!");
    theDiv.innerHTML = "The buttom was clicked" + (++clickCount) + "Times";
}

theButton.addEventListener('click', handleClick);