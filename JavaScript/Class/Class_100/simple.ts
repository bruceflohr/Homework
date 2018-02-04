interface Person {
    firstName: string;
    lastName: string;
    print();
}

function greeter(person: Person) {
    return "Hello " + person.firstName + ' ' + person.lastName;
}

var user = {
    firstName: "Donald",
    lastName: "Trump",
    print: function () { console.log(this.firstName, this.lastName); }
};

document.body.innerHTML = greeter(user);//[1, 2, 3]);//user);

class Student implements Person {
    /*firstName: string;
    lastName: string;
    grade: string;*/

    constructor(public firstName: string, public lastName: string, public grade: string) {
        /*this.firstName = firstName;
        this.lastName = lastName;
        this.grade = grade;*/
    }

    print() {
        console.log(this.firstName, this.lastName, this.grade);
    }
}

const donald = new Student("donald", "Trump", "2nd");
console.log(greeter(donald));
donald.print();