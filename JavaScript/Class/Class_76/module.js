/*var dayUtils = {
    'use strict';

    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat'],

    getDayName: function (num) {
        return this.days[num];
    },

    getDayNumber: function (name) {
        for (var i = 0; i < this.days.length; i++) {
            if (this.days[i] === name) {
                return i;
            }
        }
        return "No such day";
    }
};

console.log('getDayName(6)', dayUtils.getDayName(6));
console.log('getDayNumber(Fri)', dayUtils.getDayNumber("Fri"));


function DaysUtils() {
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat'];

    /*function getDayName(num) {
        return this.days[num];
    }

    function getDayNumber(name) {
        for (var i = 0; i < this.days.length; i++) {
            if (this.days[i] === name) {
                return i;
            }
        }
        return "No such day";
    }
    

    return {
        getDayName: getDayName,
        getDayNumber: getDayNumber
    };

    return {
        getDayName: function (num) {
            return this.days[num];
        },
        getDayNumber: function (name) {
            for (var i = 0; i < this.days.length; i++) {
                if (this.days[i] === name) {
                    return i;
                }
            }
            return "No such day";
        }
    };
}

var theDaysUtils = daysUtils();
console.log('getDayName(6)', dayUtils.getDayName(6));
console.log('getDayNumber(Fri)', dayUtils.getDayNumber("Fri"));*/

/*var theDaysUtils = (function () {
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat'];

    return {
        getDayName: function (num) {
            return this.days[num];
        },
        getDayNumber: function (name) {
            for (var i = 0; i < this.days.length; i++) {
                if (this.days[i] === name) {
                    return i;
                }
            }
            return "No such day";
        }
    };
}());

console.log('getDayName(6)', theDaysUtils.getDayName(6));
console.log('getDayNumber(Fri)', theDaysUtils.getDayNumber("Fri"));*/

(function () {
    'use strict';
    var theButton = document.getElementById("theButton");
    var theDiv = document.getElementById("output");
    var clickCount = 0;

    function handleClick() {
        //console.log("Button was clicked!");
        theDiv.innerHTML = "The buttom was clicked" + (++clickCount) + "Times";
    }

    theButton.addEventListener('click', handleClick);
}());