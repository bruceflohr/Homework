/*global $*/

//(function(){}

"use strict";

//$.get("https://www.google.com", function (data) {
$.get("proxy.php", { url: "https://www.google.com" }, function (data) {
    console.log(data);
});

function foo(x) {
    console.log(typeof x, x);
}

/*var json = '{ "firstName": "Donald", "lastName": "Trump", "Age": "70" }';
foo(json);

var obj = { "firstName": "Donald", "lastName": "Trump", "Age": 70 };
foo(obj);*/

$.getScript("data.js?callback=foo", function (a) {
    console.log(a);
});

$.getJSON("data.js?callback=?", function (data) {
    console.log(data);
});

//}());