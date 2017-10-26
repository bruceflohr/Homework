"use strict";
var functions = [];

function createFunction(x) {
    return function () {
        console.log(x);
    }
}

//for (var i = 0; i < 5; i++) {
//for (let i = 0; i < 5; i++) {
for (let i = 0; i < 5; i++) {
    functions[i] = createFunction(i);/*function () {
        console.log(i);
    };*/
    functions[i]();
}

/*functions[i] = (function (x) {
    return function () {
        console.log(x);
    };
}(i));*/

functions.forEach(function (func) {
    func();
});