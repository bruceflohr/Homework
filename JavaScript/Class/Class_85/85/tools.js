var pcs = (function () {
    "use strict";

    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    function getCss(elem, property) {
        return getComputedStyle(elem).getPropertyValue(property);
    }

    return function (id) {
        var elem = get(id);
        var data;
        var oldDisplayVal;

        return {
            /*setCss: function (property, value) {
                css(elem, property, value);
                return this;
            },
            getCss: function (property) {
                return getCss(elem, property);
            },*/
            css: function (property, value) {
                if (arguments.length < 2) {
                    return getCss(elem, property);
                }
                setCss(elem, property, value);
                return this;
            },
            pulsate: function () {
                var fontSize = parseInt(getCss(elem, 'font-size')),
                    i = 1,
                    //that = this,
                    interval = setInterval(function () {
                        if (i <= 5 || i > 15) {
                            fontSize += 5;
                        } else {
                            fontSize -= 5;
                        }

                        //that.css("fontSize", fontSize + 'px');
                        setCss(elem, "fontSize", fontSize + 'px');

                        if (i++ === 20) {
                            clearInterval(interval);
                        }
                    }, 100);

                return this;
            },
            click: function (callback) {
                elem.addEventListener('click', callback);
                return this;
            },
            hide: function () {
                oldDisplayVal = this.css("display");
                this.css("display", "none");
                //css(elem, "display", "none");

                return this;
            },
            show: function () {
                var newDisplay = oldDisplayVal !== "none" ? oldDisplayVal : "inline-block";
                this.css("display", newDisplay);

                return this;
            },
            setInnerHtml: function (html) {
                elem.innerHTML = html;
                return this;
            },
            getElement: function () {
                return elem;
            },
            /*setData: function (d) {
                data = d;
                return this;
            },
            getData: function () {
                return data;
            }*/
            data: function (d) {
                if (!arguments.length) {
                    return data;
                }
                data = d;
                return this;
            }
        };
    };
}());