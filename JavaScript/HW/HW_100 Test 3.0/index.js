"use strict"
//document.getElementById('getPost').addEventListener('click', getPost);
document.getElementById('getPost').addEventListener('click', getPost2);
document.getElementById('addPost').addEventListener('submit', addPost);
document.getElementById('clear').addEventListener('click', clear);
let info = document.getElementById('postInfo');
let pageCount = 0;

function getPost2() {
    getPost();
    clear();
}


function getPost() {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://jsonplaceholder.typicode.com/posts');
    ourRequest.onload = function () {
        var myData = JSON.parse(ourRequest.responseText);
        renderHTML(myData);
    };
    ourRequest.send();
}

function renderHTML(data) {
    var htmlString = " ";
    for (let i = pageCount; i < pageCount + 3; i++) {
        htmlString += "<h4 id='postTitle'>Title: " + data[i].title + "</h4><p id='postBody'> " + data[i].body + "<br></p>";
    }
    info.insertAdjacentHTML('beforeend', htmlString);
}

function clear() {
    let pageNum = 0;
    if (pageNum < 1) {
        let title = document.getElementById('postTitle');
        let parent = title.parentNode;

        while (parent.hasChildNodes()) {
            parent.removeChild(parent.lastChild);
        }
    }
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
        .then(document.getElementById('output').innerHTML = '<h4 id="postTitle">Title: ' + title + '</h4> ' + '<p>' + body + '</p><br>');
}