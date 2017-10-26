var app = app || {};

app.views = (function (views) {
    "use strict";

    views.viewsFunction = function () {
        console.log("Im a views function");
    };

    return views;

}(app.views || {}));