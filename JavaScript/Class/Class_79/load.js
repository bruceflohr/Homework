(function () {
    "use strict";

    window.onload = function () {
        var allowNavigation = false;

        var theButton = document.getElementById("theButton");
        theButton.style.color = "Red";
        theButton.style.backgroundColor = "Black";

        addEventListener(theButton, 'click', function () {
            console.log(" The Button was clicked", event);
            allowNavigation = true;
        });

        var theDiv = document.getElementById("theDiv");
        addEventListener(theDiv, 'click', function () {
            console.log(" The Div was clicked");
        });

        var theFirstButton = document.getElementById("theFirstButton");
        addEventListener(theFirstButton, 'click', function () {
            console.log(" The 1st Button was clicked");
            event.stopPropagation();
        });


        var theAncor = document.getElementById("theAncor");
        addEventListener(theAncor, 'click', function (event) {
            console.log(" The theAncor Button was clicked");
            if (!allowNavigation) {
                console.log(" Navigation Blocked");
                event.preventDefault();
            }
        });

    };
}());