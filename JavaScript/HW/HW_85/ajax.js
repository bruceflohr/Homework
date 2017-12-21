(function () {
    "use strict";
    var request = new XMLHttpRequest();
    //console.log(request);
    request.onreadystatechange = function (event) {
        console.log(event, request);
        if (request.readyState === 4) {
            if (request.status < 400) {
                alert(request.responseText);
            } else {
                alert("OOPS" + request.statusText);
            }
        }
    };

    request.open('GET', 'ajax.html');
    request.send();

    /*setTimeout(function () {
        alert(request.responseText);
    }, 2000);*/
}());