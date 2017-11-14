var pcs = pcs || {};

pcs.messagebox = (function () {
    "use strict";

    var offset = 40,
        centerLeft = -200,
        centerTop = -50,
        left = centerLeft,
        top = centerTop,
        width = 400,
        height = 100,
        zIndex = 0;

    var modalDiv = createElement("div");
    modalDiv.style.position = "fixed";
    modalDiv.style.top = 0;
    modalDiv.style.left = 0;
    modalDiv.style.width = "100%";
    modalDiv.style.height = "100%";
    modalDiv.style.backgroundColor = "lightGray";
    modalDiv.style.opacity = 0.5;
    modalDiv.style.display = "none";
    modalDiv.style.zIndex = 20000;
    document.body.appendChild(modalDiv);


    function createElement(type) {
        return document.createElement(type);
    }

    function show(msg, modal, buttons, callback) {
        buttons = buttons || ['OK'];

        var div = createElement("div");
        var span = createElement("span");
        var buttonDiv = createElement("div");


        span.innerHTML = msg;
        div.appendChild(span);

        div.appendChild(buttonDiv);
        document.body.appendChild(div);

        div.style.backgroundColor = 'lightblue';
        div.style.padding = '20px';
        div.style.width = width + 'px';
        div.style.height = height + 'px';
        div.style.border = '1px solid blue';
        div.style.position = 'absolute';
        div.style.left = '50%';
        div.style.top = '50%';
        if (modal) {
            div.style.marginLeft = centerLeft + 'px';
            div.style.marginTop = centerTop + 'px';
        } else {
            div.style.marginLeft = left + 'px';
            div.style.marginTop = top + 'px';
        }

        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';
        div.style.zIndex = ++zIndex;

        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        for (let i = 0; i < buttons.length; i++) {
            var button = createElement("button");
            button.innerHTML = buttons[i];
            buttonDiv.appendChild(button);
            button.addEventListener("click", function () {
                document.body.removeChild(div);
                if (modal) {
                    modalDiv.style.display = 'none';
                }
                if (callback) {
                    callback(button[i]);
                }
            });
        }

        if (modal) {
            modalDiv.style.display = 'block';
            div.style.zIndex = 20001;
        } else {
            top += offset;
            left += offset;
            if (parseInt(getComputedStyle(div).getPropertyValue('right')) - offset < 0) {
                left -= window.innerWidth / 2;
            }
            if (parseInt(getComputedStyle(div).getPropertyValue('bottom')) - offset < 0) {
                top -= window.innerHeight / 2;
            }
        }
        div.addEventListener('click', function () {
            div.style.zIndex = ++zIndex;
        });
    }

    return {
        show: show
    };
}());