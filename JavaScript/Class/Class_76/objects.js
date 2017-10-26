'use strict';

var person = {
    first: 'Donald',
    last: 'Trump',
    position: 'President'
};

function printPerson(person) {
    console.log('First Name:' + person.first);
    console.log('Last Name:' + person.last);
    console.log('Position:' + person.position);
}

console.log('person', person);

printPerson(person);

/*var person2 = {
    first: Jared,
    last: Kushner,
    position: Ass,
    print: function () {
        console.log('First Name:' + this.first);
        console.log('Last Name:' + this.last);
        console.log('Position:' + this.position);
    }
};*/

function createPerson(first, last, position) {
    return {
        first: first,
        last: last,
        position: position,
        print: function () {
            console.log('First Name:' + this.first);
            console.log('Last Name:' + this.last);
            console.log('Position:' + this.position);
        }
    };
}

var melania = createPerson('Melania', 'Trump', 'FLOTUS');
var ivanka = createPerson('Ivanka', 'Jared', 'FLOTUS');

melania.print();
ivanka.print();

/// JSON

var someJSON = `{"name": "Bill", "age": 30, "hobbies": ["golf", "fishing", "politics"]}`;
console.log(someJSON, typeof someJSON);

var asAnObject = JSON.parse(someJSON);
console.log(asAnObject, typeof asAnObject);

var backAsString = JSON.stringify(asAnObject);
console.log(backAsString, typeof backAsString);

console.log(JSON.stringify(ivanka));