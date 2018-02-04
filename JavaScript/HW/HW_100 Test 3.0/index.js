"use strict"
document.getElementById('getPost').addEventListener('click', getPost);
document.getElementById('addPost').addEventListener('submit', addPost);
let info = document.getElementById('postInfo');

var pageCount = 0;
function getPost() {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://jsonplaceholder.typicode.com/posts');
    ourRequest.onload = function () {
        var myData = JSON.parse(ourRequest.responseText);
        renderHTML(myData);
    };
    ourRequest.send();
    pageCount += 3;
};

function renderHTML(data) {
    var htmlString = " ";

    for (let i = 0; i < pageCount; i++) {
        htmlString += "<h4>Title: " + data[i].title + "</h4><p> " + data[i].body + "<hr></p>";
    }

    info.insertAdjacentHTML('beforeend', htmlString);
}

/*function getPost() {
    fetch('https://jsonplaceholder.typicode.com/posts')
        .then((res) => res.json())
        .then((data) => {
            let output = '<h2>Post</h2>';
            console.log(data);
            data.forEach(function (post) {
                output += `
            <div>
                <h3>Name: ${post.title}</h3>
                <p>Email: ${post.body}</p>
            </div>
            `;
            });
            document.getElementById('output').innerHTML = output;
        });
}*/

function addPost(e) {
    e.preventDefault();

    let title = document.getElementById('title').value;
    let body = document.getElementById('body').value;

    fetch('https://jsonplaceholder.typicode.com/posts', {
        method: 'POST',
        headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-type': 'application/json'
        },
        body: JSON.stringify({ title: title, body: body })
    })
        .then((res) => res.json())
        .then((data) => console.log(data))
        .then(document.getElementById('output').innerHTML = 'Title: ' + title + ' ' + '<br>' + body + '<hr>');
}