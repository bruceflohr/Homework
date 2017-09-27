alert("Hello " + name);

function isGreater(a, b) {
    return a > b;
}

console.log("isGreater(5,6)", isGreater(5, 6));
console.log("isGreater(5,4)", isGreater(5, 4));

console.assert(isGreater(5, 6) === false);
console.assert(isGreater(5, 4) === true);