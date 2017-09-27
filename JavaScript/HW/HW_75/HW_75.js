function isLower(lowerLetter) {
    return lowerLetter[0] == lowerLetter[0].toLowerCase();

}
function isUpper(upperLetter) {
    return upperLetter[0] !== upperLetter[0].toLowerCase();
}

var lowerLetter = ['a', 'b', 'c'];
var upperLetter = ['A', 'B', 'C'];

console.log(upperLetter.some(isUpper));
console.log(lowerLetter.some(isLower));

////////////////////////////

function test(array, isUpper) {
    if (array === isUpper) {
        
    }
}

function onlyIf(array, test, action) {
    if (array === upperLetter[0].toLowerCase()) {

    }
}