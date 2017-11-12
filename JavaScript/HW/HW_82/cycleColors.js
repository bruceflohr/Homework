(function () {
    "use strict";

    function createElement(type) {
        return document.createElement(type);
    }

    var div = createElement("div");
    var span = createElement("span");
    var theInterval;
    var t = 0;

    span.innerHTML = t;
    div.appendChild(span);

    theInterval = setInterval(function () {
        console.log(t++);
    }, 1000);

    var theButton = document.getElementById("theButton");
    theButton.addEventListener("click", function () {
        if (theInterval) {
            clearTimeout(theInterval);
            theButton.innerHTML = 'Start';
            span.innerHTML = t;
        } else if (!theInterval) {
            theButton.innerHTML = 'Stop';
            theInterval = setTimeout(function () {
                console.log(t++);
            }, 1000);
        }
    });

    /*
    var colors = ['red', 'white', 'blue'];
    var i = 0;

    setInterval(function () {
        document.body.style.color = colors[i++];
        if (i === colors.length) {
            i = 0;
        }
        document.body.style.backgroundColor = colors[i];
    }, 1000);
    */

    /*
    function getRandomColor() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);

        return "rgb(" + r + "," + g + "," + b + ")";
    }

    setInterval(function () {
        document.body.style.color = getRandomColor();
        document.body.style.backgroundColor = getRandomColor();
    }, 1000);*/
    /*
        var theInterval;
        var r = -1;
        var g = 0;
        var b = 0;
        var increment = 10;
    
        function cycleColors() {
            /*for(r = 0; r < 256; r++) {
                for(g = 0; g < 256; g++) {
                    for(b = 0; b < 256; b++) {
                        console.log(r,g,b);
                    }
                }
            }
    
            theInterval = setInterval(function () {
                r += increment;
                if (r > 255) {
                    r = 0;
                    g += increment;
                }
                if (g > 255) {
                    g = 0;
                    b += increment;
                }
                if (b > 255) {
                    b = 0;
                }
                document.body.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
                console.log(document.body.style.backgroundColor);
            }, 10);
        }
    
        var theButton = document.getElementById("theButton");
        theButton.addEventListener("click", function () {
            if (theInterval) {
                clearInterval(theInterval);
                theInterval = 0;
                theButton.innerHTML = 'Start';
            } else {
                cycleColors();
                theButton.innerHTML = 'Stop';
            }
        });*/
}());