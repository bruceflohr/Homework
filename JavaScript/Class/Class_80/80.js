(function () {
    "use strict";
    var colorPicker = document.getElementById("color");
    var backgroundPicker = document.getElementById("bgcolor");

    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    get("apply").addEventListener("click", function (event) {

        setCss(document.body, "color", colorPicker.value);
        setCss(document.body, "backgroundColor", backgroundPicker.value);

        event.preventDefault();
    });
}());