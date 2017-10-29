var app = app || {};

app.module2 = (function () {
    "use strict";

    function createCounter(openingCount) {
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

    var count1 = createCounter(1);
    var count2 = createCounter(5);

    addAmount.call(count1, 5);
    increment.call(count2);

    console.log(count1);
    console.log(count2);

}(app.module2 || {}));