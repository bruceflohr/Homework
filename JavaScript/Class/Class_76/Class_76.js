'use strict';

function some(array, test) {
    for (var i = 0; i < array.length; i++) {
        if (test(array[i])) {
            return true;
        }
    }
    return false;
}

/*function isUpperCase(letter) {
    return letter === letter.toUpperCase();
}*/

function isUpperCase(letter) {
    return letter === /^A - Z/;
}

function isLowerCase(letter) {
    return !isUpperCase(letter);
}

var capital = ['a', 'b', 'c'];
var lowercase = ['A', 'B', 'C'];
var mixed = ['A', 'b', 'C', 'd'];
var numbers = [1, 2, 3];

console.log(some(capital, isUpperCase), "capital, isUppercase");
console.log(some(lowercase, isUpperCase), "lowercase, isUppercase");
console.log(some(mixed, isUpperCase), "mixed, isUppercase");
console.log(some(numbers, isLowerCase), "numbers, isUppercase");

// Passing some fuction
console.log(capital, capital.some(isUpperCase), "capital, isUppercase");

function printIt(it) {
    console.log("it is " + it);
}

function onlyIf(array, test, action) {
    array.forEach(function (element) {
        if (test(element)) {
            action(element);
        }
    });
}

console.log(capital, 'onlyIf(capital, isLowerCase, printIt)');
onlyIf(capital, isUpperCase, printIt);

mixed.filter(isUpperCase).forEach(printIt);