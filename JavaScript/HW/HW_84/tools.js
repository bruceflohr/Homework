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
                button: function (btnName) {
                    var button = document.createElement("button");
                    button.innerHTML = btnName;

                    var body = document.getElementsByTagName("body")[0];
                    body.appendChild(button);

                    button.addEventListener("click", function () {
                        this.hide();
                    });
                    return this;
                },

                setCss: function (property, value) {
                    setCss(elem, property, value);
                    return this;
                },

                hide: function () {
                    elem.style.display = 'none';
                },

                show: function () {
                    elem.style.display = 'block';
                },

                pulsate: function () {
                    elem.addEventListener('click', function () {
                        var fontSize = 32,
                            i = 1,
                            interval = setInterval(function () {
                                if (i <= 5 || i > 15) {
                                    fontSize += 5;
                                } else {
                                    fontSize -= 5;
                                }

                                setCss(elem, "fontSize", fontSize + 'px');

                                if (i++ === 20) {
                                    clearInterval(interval);
                                }
                            }, 100);
                    });
                    return this;
                }
            };
        }
    };

}());