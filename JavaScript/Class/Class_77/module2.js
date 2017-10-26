var app = (function (theModuleObject) {
    "use strict";

    console.log(theModuleObject);

    theModuleObject.c = function () {
        console.log('function c');
    };
    theModuleObject.d = function () {
        console.log('function d');
    };
    return theModuleObject;
}(app || {}));

app.c();
app.d();