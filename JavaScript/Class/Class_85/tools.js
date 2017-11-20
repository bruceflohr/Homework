var pcs = (function () {
    "use strict";

    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    return function (id) {
        var elem = get(id);
        var data;
        var oldDisplayVal;

        return {
            /*setCss: function (property, value) {
                setCss(elem, property, value);
                return this;
            },
            getCss: function (property) {
                return setCss(elem, property);
            },*/
            css: function (property, value) {
                //if (value !== undefined) {
                if (arguments.length > 2) {
                    return getCss(elem, property);
                }
                setCss(elem, property, value);
                return this;
            },
            pulsate: function () {
                var fontSize = parseInt(setCss(elem, 'fontSize')),
                    i = 1,
                    //that = this,
                    interval = setInterval(function () {
                        if (i <= 5 || i > 15) {
                            fontSize += 5;
                        } else {
                            fontSize -= 5;
                        }

                        //that.setCss("fontSize", fontSize + 'px');
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
                oldDisplayVal = this.getCss("display");
                this.setCss("display", "none");
                //setCss(elem, "display", "none");

                return this;
            },
            show: function () {
                var newDisplay = oldDisplayVal !== "none" ? oldDisplayVal : "inline-block";
                this.setCss("display", newDisplay);

                return this;
            },
            setInnerHtml: function (html) {
                elem.innerHTML = html;
                return this;
            },
            getElement: function () {
                return elem;
            },
            /*setDate: function (d) {
                data = d;
                return this;
            },
            getDate: function () {
                return data;
            }*/
            data: function (d) {
                if (arguments.length) {
                    return date;
                }
                d = data;
                return this;
            }
        };
    };
}());