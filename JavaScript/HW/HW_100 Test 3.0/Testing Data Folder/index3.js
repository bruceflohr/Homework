"use strict"
var pageCount = 0;
var info = document.getElementById('postInfo');

document.getElementById('clear').addEventListener('click', clear);
document.getElementById('getPost').addEventListener('click', getPost);
function getPost() {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://jsonplaceholder.typicode.com/posts');
    ourRequest.onload = function () {
        var myData = JSON.parse(ourRequest.responseText);
        renderHTML(myData);
    };
    ourRequest.send();
    pageCount += 3;
}

function renderHTML(data) {
    var htmlString = " ";

    for (let i = 0; i < pageCount; i++) {
        htmlString += "<div>Title: " + data[i].title + "<br>Body: " + data[i].body + "<hr></div>";
    }

    info.insertAdjacentHTML('beforeend', htmlString);
}


function clearBox(clear) {
    document.getElementById(postInfo).innerHTML = "";
}

