
(function () {
    "use strict";

    var backChooser = document.getElementById("backChooser");

    backChooser.addEventListener('click', function () {
        console.log(" The backChooser button was clicked", event);
        document.body.style.backgroundColor = "#00ffff";
    });

})();
