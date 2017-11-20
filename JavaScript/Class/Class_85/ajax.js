(function () {
    "use strict";
    var request = new XMLHttpRequest();
    //console.log(request);

    request.onreadystatechange = function (event) {
        console.log(event, request);
        if (request.readyState === 4) {
            if (request.status < 400) {
                alert("Sucessesfully loaded", request.responseText);
            } else {
                alert(" AW SNAP", request.statusText);
            }
        }
    };

    request.open('GET', /*'https://www.google.com/'*/ 'ajax.html');
    request.send();

    /*setTimeout(function () {
        alert(request.responseText);
    }, 1000);*/
}());
