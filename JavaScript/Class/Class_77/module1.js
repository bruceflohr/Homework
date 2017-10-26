var app = (function (theModuleObject) {
    "use strict";

    console.log(theModuleObject);

    theModuleObject.a = function () {
        console.log('function a');
    };
    theModuleObject.b = function () {
        console.log('function b');
    };
    return theModuleObject;
}(app || {}));

app.a();
app.b();

/*var x = 1;
var y = 4;
var z = x || y;
console.log(z);*/
