var pcs = pcs || {};

pcs.stopwatch = (function () {
    "use strict";

    var //ticks = 0,
        interval,
        div = createElement('div'),
        span = createElement('span'),
        buttonDiv = createElement('div'),
        toggleButton = createElement('button'),
        resetButton = createElement('button');

    div.appendChild(span);
    toggleButton.innerHTML = 'start';
    resetButton.innerHTML = 'reset';
    buttonDiv.appendChild(toggleButton);
    buttonDiv.appendChild(resetButton);
    div.appendChild(buttonDiv);
    document.body.appendChild(div);

    toggleButton.addEventListener('click', function () {
        pcs.stopwatch.toggle();
    });

    function createElement(type) {
        return document.createElement(type);
    }

    function padLeft(paddee, padder, length) {
        var result = paddee.toString();
        while (result.length < length) {
            result = padder + result;
        }
        return result;
    }

    function ensureTwoDigits(number) {
        return padLeft(number, '0', 2);
    }

    /*function getPrettyNumber(num) {
        if (num < 10) {
            return '0' + num;
        }
        return num.toString();
    }*/

    function updateDisplay(ticks) {
        var hundredths = ticks % 100,
            seconds = Math.floor(ticks / 100) % 60,
            minutes = Math.floor(seconds / 60) % 60,
            hours = Math.floor(minutes / 60);

        span.innerHTML = hours + ':' +
            ensureTwoDigits(minutes) + ':' +
            ensureTwoDigits(seconds) + ':' +
            ensureTwoDigits(hundredths);
    }

    /*
    function toggle() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        } else {
            interval = setInterval(function () {
                ticks++;
                updateDisplay();
            }, 1);
        }
    }
    */

    return {
        toggle: function () {
            if (interval) {
                clearInterval(interval);
                interval = null;
            } else {
                console.log('outside', this);
                var that = this;
                interval = setInterval(function () {
                    console.log('inside', this, that);
                    that.ticks++;
                    updateDisplay(that.ticks);
                }, 1);
            }
        },
        reset: function () {
            this.ticks = 0;
            updateDisplay();
        },
        ticks: 0
        /*getTicks: function () {
            return ticks;
        }*/
    };
}());