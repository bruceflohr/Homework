(function () {
    "use strict";

    function map(theArray, callback) {
        var result = [];
        theArray.forEach(function (element) {
            result.push(callback(element));
        });
        return result;
    }

    function double(number) {
        return number * 2;
    }

    function triple(number) {
        return number * 3;
    }

    var numbers = [2, 4, 6, 8];

    var double = map(numbers, double);
    console.log(numbers, double);

    var triple = map(numbers, triple);
    console.log(numbers, triple);

}());