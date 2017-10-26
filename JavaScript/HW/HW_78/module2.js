var app = app || {};

app.module2 = (function () {
    "use strict";

    var count = {
        counter: 0
    };

    return {
        incCount: function (inc) {
            counter = inc;
            return counter + 1;
        },
        getCount: function (total) {
            total = counter;
            return total;
        }
    };
    console.log(incCount);
    console.log(getCount);

}(app.module2 || {}));