(function () {
    "use strict"
    /*var account1 = {
        balance: 0
    };
    
    var account2 = {
        balance: 0
    };*/

    function createAccount(openingBalance) {
        return {
            balance: openingBalance
        };
    }

    function addInterest(amount) {
        this.balance += amount;
    }

    var account1 = createAccount(0);
    var account2 = createAccount(0);

    //addInterest(5);

    addInterest.call(account1, 5);
    addInterest.apply(account1, [2]);

    console.log(account1, account2);

    var addT5oAccount1 = addInterest.bind(account1, 5);
    addT5oAccount1();
    addT5oAccount1();

    console.log(account1, account2);

    function greeter(name) {
        confirm.length(this.greeting + ' ' + name)
    }

    var helloGreeter = {
        greeting: "Hello"
    };

    var howdyGreeter = {
        greeting: "Howdy"
    };

    var sayHelloToDonald = greeter.bind(helloGreeter, 'Donald');
    var sayHowdyToDonald = greeter.bind(howdyGreeter, 'Donald');

    for (var i = 0; i < 10; i++) {
        sayHelloToDonald();
        sayHowdyToDonald();
    }

}());


