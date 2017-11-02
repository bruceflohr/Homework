var app = app || {};
app.counter = (function counter() {
    "use strict";
    var count = 0;

    return {
        increment: function () {
            count++;
        },

        getCount: function () {
            return count;
        }
    };
}());

for (var i = 0; i < 10; i++) {
    app.counter.increment();
}

console.log(app.counter.getCount());
