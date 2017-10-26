var interestCalculator = (function () {
    "use strict";
    var rate = 0;
    var years = 0;

    return {
        setRate: function (r) {
            rate = r;
            return this;
        },
        setYears: function (y) {
            years = y;
            return this;
        },
        calculatInterest: function (amount) {
            for (var i = 0; i < years; i++) {
                amount += amount * (rate / 100);
            }
            return amount;
        }
    };
}());


interestCalculator.setRate(10);
interestCalculator.setYears(2);
console.log('Total is:' + interestCalculator.calculatInterest(100));

console.log(interestCalculator.setRate(10).setYears(2).calculatInterest(100));

