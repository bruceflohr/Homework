(function () {
    "use strict";
    var colorPicker = get("color");
    var backgroundPicker = get("bgcolor");
    var someTexInpout = get("someText");

    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    someTexInpout.addEventListener("change", function () {
        console.log(someTexInpout.value);

        setCss(document.body, "color", colorPicker.value);
        setCss(document.body, "backgroundColor", backgroundPicker.value);
    });
}());