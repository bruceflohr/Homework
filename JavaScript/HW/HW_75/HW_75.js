var lowerLetter = ['a', 'b', 'c'];
var upperLetter = ['A', 'B', 'C'];
var word = ['A', 'b', 'C'];

function isLower(lowerLetter) {
    //return lowerLetter[0] == lowerLetter[0].toLowerCase();
    return /^[A-Za-z]+$/.test(lowerLetter);

}
function isUpper(upperLetter) {
    return upperLetter[0] !== upperLetter[0].toLowerCase();
}

console.log(lowerLetter.some(isLower));
console.log(upperLetter.some(isUpper));


////////////////////////////
function test(upperLetter) {
    return upperLetter[0] !== upperLetter[0].toLowerCase();
}

/*var caseTest = letters.filter(function (word) {
    return word.length > 6;
});*/

function onlyIf(array, test, action) {
    var passed = array.filter(function (test) {
        if (test === true) {
            console.log(array, "Is not upper case")
        } else {
            console.log(array, "Is upper case")
        }
    })
}

onlyIf(word);


function hasLowerCase(str) {
    return str.toUpperCase() != str;
}

function hasUpperCase(str) {
    return str.toLowerCase() != str;
}

//Pass the type to check, Pass Array.
function check2(cases, array) {
    return console.log(array.some(cases));
}

var arr1 = ['A', 'B', 'C'];
var arr2 = ['A', 'b', 'C'];
var UL = ['A', 'b', 'C'];
var upper = UL.filter(function (hasLowerCase) {
    return UL == UL.toUpperCase();
})


check2(hasLowerCase, arr1);
check2(hasLowerCase, arr2);
check2(hasUpperCase, arr1);
