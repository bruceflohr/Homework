
function global() {
    alert = "I am global";
}
console.log(global());

function greaterThan(x, y) {
    if (x > y) {
        console.log(x, " is greater than ", y);
    } else if (x = y) {
        console.log(x, " is equal to ", y);
    } else {
        console.log(x, " is smaller than ", y);
    }
}

console.log(greaterThan(1, 2));
console.log(greaterThan(1, 1));
console.log(greaterThan(2, 1));