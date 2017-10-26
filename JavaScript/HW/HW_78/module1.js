var app = app || {};

app.module1 = (function () {
    "use strict";

    var numbers = [2, 4, 6];
    var doubles = numbers.map(function (x) {
        return x * 2;
    });

    console.log(doubles);

}(app.module1 || {}));


