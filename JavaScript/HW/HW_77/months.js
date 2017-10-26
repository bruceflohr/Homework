var monthUntils = (function () {
    "use strict";
    var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    function getNumber(name) {
        for (var i = 0; i < months.length; i++) {
            if (months[i] === name) {
                return i + 1;
            }
        }
        return -1;
    }

    return {
        getMonthName: function (num) {
            return months[num - 1];
        },
        getMonthNumber: getNumber
    };
}());

console.log("monthUntils.getMonthName(5)", monthUntils.getMonthName(5));
console.log("monthUntils.getMonthNumber('May)", monthUntils.getMonthNumber("May"));