var pcs = pcs || {};

pcs.tools = (function () {
    "use strict";


    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    return {
        wrap: function (id) {
            var elem = get(id);

            return {
                setCss: function (property, value) {
                    setCss(elem, property, value);
                    return this;
                },
                pulsate: function () {
                    var fontSize = 20,
                        i = 0,
                        interval = setInterval(function () {
                            if (i < 5 || i > 15) {
                                fontSize += 5;
                            } else {
                                fontSize -= 5;
                            }

                            setCss(elem, "fontSize", fontSize + "px");

                            if (++i === 20) {
                                clearInterval(interval);
                            }
                        }, 100);
                    return this;
                }
            };
        }
    };

}());