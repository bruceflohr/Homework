function greeter(person) {
    return "Hello " + person.firstName + ' ' + person.lastName;
}
var user = {
    firstName: "Donald",
    lastName: "Trump",
    print: function () { console.log(this.firstName, this.lastName); }
};
document.body.innerHTML = greeter(user); //[1, 2, 3]);//user);
var Student = /** @class */ (function () {
    /*firstName: string;
    lastName: string;
    grade: string;*/
    function Student(firstName, lastName, grade) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.grade = grade;
        /*this.firstName = firstName;
        this.lastName = lastName;
        this.grade = grade;*/
    }
    Student.prototype.print = function () {
        console.log(this.firstName, this.lastName, this.grade);
    };
    return Student;
}());
var donald = new Student("donald", "Trump", "2nd");
console.log(greeter(donald));
donald.print();
