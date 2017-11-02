var app = app || {};

app.module2 = (function () {
    "use strict";

    var i = 0;

    function createCounter(openingCount) {
        i++;
        return {
            Count: openingCount
        };
    }

    function addAmount(amount) {
        this.Count += amount;
    }

    function increment() {
        this.Count += 1;
    }

    function increment2(time) {
        return {
            Counter: this.Count += time
        };
    }

    var count1 = createCounter(0);
    var count2 = createCounter(0);
    var count3 = createCounter(0);

    increment.call(count1);
    increment.call(count2);
    var inc2 = increment2.call(count3, 10);
    var inc3 = increment2.call(count3, 10);


    console.log(count1);
    console.log(count2);
    console.log(count3);
    console.log(inc2);
    console.log(inc3);

    console.log(i + " modules created");

}(app.module2 || {}));