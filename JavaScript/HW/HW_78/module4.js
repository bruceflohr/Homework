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

    /*function increment() {
        this.Count += 1;
    }*/

    function increment2(time) {
        return {
            Counter: this.Count += time
        };
    }

    var count1 = createCounter(0);
    var count2 = createCounter(0);


    var inc1 = increment2.call(count1, 10);
    var inc2 = increment2.call(count2, 5);
    var inc3 = increment2.call(count2, 15);

    console.log(inc1);
    console.log(count1);

    console.log(inc2);
    console.log(inc3);
    console.log(count2);

    console.log(i + " modules created");

}(app.module2 || {}));