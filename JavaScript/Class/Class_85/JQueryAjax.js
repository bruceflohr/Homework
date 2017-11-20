/* global $ */
(function () {
    "use strict";
    $.get("JQueryAjax.js", function (loadedData) {
        //alert(loadedData);
    }).fail(function (xhr, statusCode, statusText) {
        //alert("error: " + statusText);
        console.log(xhr, statusCode, statusText);
    });
}());