var app = app || {};

app.module1 = (function () {
    "use strict";

    var numbers = [1, 2, 3];
    var doubles = numbers.map(function (x) {
        return x * 2;
    });

    console.log(doubles);

}(app.module1 || {}));

