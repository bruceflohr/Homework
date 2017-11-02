var app = app || {};
app.counter2 = (function () {
    "use strict";
    var numCounter = 0;

    return {
        create: function () {
            numCounter++;
            var count = 0;


            return {
                increment: function () {
                    count++;
                },

                getCount: function () {
                    return count;
                }
            };
        },
        getNumbersOfCounter: function () {
            return numCounter;
        }
    };
}());

var c1 = app.counter2.create();
var c2 = app.counter2.create();

for (var i = 0; i < 10; i++) {
    //app.counter2.increment();

    c1.increment();
    c2.increment();
}

console.log(c1.getCount(), c2.getCount());
console.log("there are " + app.counter2.getNumbersOfCounter() + " counters");

//console.log(app.counter2.getCount());
