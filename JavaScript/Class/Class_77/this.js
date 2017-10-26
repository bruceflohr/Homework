//"use strict";
var name = "Hillary Clinton";
var email = "HillaryClinton@TheWhiteHouse.gov";

function PrintPerson() {
    console.log('Name:', this.name, 'Email:', this.email)
}

var donald = {
    name: "Donald Trump",
    email: "DonaldTrump@theWhiteHouse.gov",
    /* print: function () {
         console.log('name', this.name, 'emial', this.email)
     }*/
    print: PrintPerson
};

var mike = {
    name: "Mike Pence",
    email: "MikePence@theWhiteHouse.gov",
    /* print: function () {
         console.log('name', this.name, 'emial', this.email)
     }*/
    print: PrintPerson
};

donald.print();
//PrintPerson();
mike.print();

var printFromDonald = donald.print;
printFromDonald();

PrintPerson.call(donald);
PrintPerson.call(mike);
printFromDonald.call(mike);
donald.print.call(mike);
donald.print.apply(mike);

var greeter1 = {
    greeting: "Hello"
};

var greeter2 = {
    greeting: "Shalom"
};

function greeting(firstName, lastName) {
    console.log(this.greeting + ' ' + firstName + ' ' + lastName);
}

greeting.call(greeter1, "Donald", "Trump");
greeting.call(greeter2, "Donald", "Trump");
greeting.apply(greeter2, ["Donald", "Trump"]);