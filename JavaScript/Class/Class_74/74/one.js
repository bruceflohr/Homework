/*jshint plusplus: true*/
// var variableDeclaredAtTheBottom
console.log("Running JavaScript loaded from file");
console.log("x", x, "y", y);

var item = "laptop computer";
// 10 lines of code
iten = "mouse"

function add(a, b) {
    return a + b;
}

console.log(add(5, 5));

function test() {
    var imALocalvariable = 5;
    butImAglobal = "global variable";
}

test();
console.log("done");

console.log(variableDeclaredAtTheBottom);
var variableDeclaredAtTheBottom = 27;

//console.log(iDontExist);

console.log('"1" == 1', "1" == 1);
console.log('"1" === 1', "1" === 1);

console.log('"1" + 1', "1" + 1);
console.log('Number("1") + 1', Number("1") + 1);
console.log('"1" - 1', "1" - 1);

var a = 5 / "a";
var b = 5 / "b";
console.log(a, b, "a == b", a == b);

if (isNaN(a)) {
    console.log("a is NaN");
}
