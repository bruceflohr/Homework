var pcs = pcs || {};

pcs.messagebox = (function () {
    "use strict";

    function createElement(type) {
        return document.createElement(type);
    }

    function show(msg) {
        var div = createElement("div");
        var span = createElement("span");
        var buttonDiv = createElement("div");
        var okButton = createElement("button");
        var inputText = createElement("input");
        inputText.setAttribute("type", "text");
        var inputCheck = createElement("input");
        inputCheck.setAttribute("type", "checkbox");
        inputCheck.setAttribute("id", "idCheck");

        span.innerHTML = msg;
        div.appendChild(span);
        div.appendChild(inputCheck);
        div.appendChild(inputText);
        okButton.innerHTML = "OK";
        buttonDiv.appendChild(okButton);
        div.appendChild(buttonDiv);
        document.body.appendChild(div);

        div.style.backgroundColor = 'lightblue';
        div.style.padding = '20px';
        div.style.width = '400px';
        div.style.height = '100px';
        div.style.border = '1px solid blue';
        div.style.position = 'absolute';
        div.style.left = '50%';
        div.style.top = '50%';
        div.style.marginLeft = '-200px';
        div.style.marginTop = '-50px';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';

        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        okButton.addEventListener("click", function () {
            document.body.removeChild(div);
        });

        

        if (document.getElementById("idCheck").checked = true) {
            alert("checked");
        } else {
            alert("unchecked");
        }
    }

    return {
        show: show
    };
}());