greet();

function greet() {
    console.log("Hello!");
}

greet();

function getGreeter() {
    return function /*theGreeter*/() {
        console.log("Hello");
    };
}

var greeter = getGreeter();
console.log(greeter);
greeter();

var aGreeterFunction = function () {
    console.log("Hello there");
};

aGreeterFunction();

///////////////////////////////////////////////

function getBetterGreeter(name) {
    return function () {
        console.log("Hello " + name);
        name += " I was called";
    };
}

var greetTheDonald = getBetterGreeter("Donald");
greetTheDonald();
greetTheDonald();

//////////////////////////////////

function multiply(x, y) {
    return x * y;
}

console.log("multiply(2,5)", multiply(2, 5));

function getMultiplier(x) {
    return function (y) {
        return x * y;
    };
}

var multiplyBy5 = getMultiplier(5);
console.log("multiplyBy5(2)", multiplyBy5(2));

var multiplyBy10 = getMultiplier(10);
console.log("multiplyBy10(2)", multiplyBy10(2));

//var x;
function multiplyBroken(y) {
    return x * y;
}

function getMultiplierBroken(x/*theNumber*/) {
    //x = theNumber;
    return multiplyBroken;
}

var multiplyBy5Broken = getMultiplierBroken(5);
//console.log("multiplyBy5Broken(2)", multiplyBy5Broken(2));

/////////////////////////////////////////////////////////////////////

function sayHi() {
    console.log("Hi!");
}

for (var i = 0; i < 5; i++) {
    sayHi();
}

function repeat(action, times) {
    for (var i = 0; i < times; i++) {
        action();
    }
}

repeat(sayHi, 5);

//////////////////////////////

function ourForEach(theArray, callback) {
    for (var i = 0; i < theArray.length; i++) {
        callback(theArray[i]);
    }
}

var someLetters = ['a', 'b', 'c'];

function printIt(it) {
    console.log(it);
}

ourForEach(someLetters, printIt);

someLetters.forEach(printIt);

function printIt2(it, index, theArray) {
    console.log(it, index, theArray);
}
someLetters.forEach(printIt2);

printIt2("Hello");
printIt2("Hello", 0, [1, 2, 3], 'extra');

////////////////////////////////

function ourFilter(theArray, callback) {
    var filteredItems = [];
    /*for (var i = 0; i < theArray.length; i++) {
        if (callback(theArray[i])) {
            filteredItems.push(theArray[i]);
        }
    }*/
    //ourForEach(theArray, function (element) {
    theArray.forEach(function (element) {
        if (callback(element)) {
            filteredItems.push(element);
        }
    });
    return filteredItems;
}

function isOdd(number) {
    return number % 2 !== 0;
}

var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var odds = ourFilter(numbers, /*function (number) {
    return number % 2 !== 0;
}*/ isOdd);
var evens = ourFilter(numbers, function (number) {
    //return number % 2 === 0;
    return !isOdd(number);
});
console.log(numbers, 'our filter odd', odds, 'our filter evens', evens);

console.log(numbers, 'built in filter odd', numbers.filter(isOdd));
console.log(numbers, 'built in filter even', numbers.filter(function (number) {
    return !isOdd(number);
}));


function ourEvery(theArray, callback) {
    /*var allPassed = true;
    theArray.forEach(function (element) {
        if (!callback(element)) {
            //return false;
            allPassed = false;
        }
    });
    return allPassed;*/
    for (var i = 0; i < theArray.length; i++) {
        if (!callback(theArray[i])) {
            return false;
        }
    }

    return true;
}

console.log("ourEvery(numbers, isOdd)", ourEvery(numbers, isOdd));
console.log("ourEvery(odds, isOdd)", ourEvery(odds, isOdd));

