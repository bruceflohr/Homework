var pcs = pcs || {};

pcs.stopwatch = (function () {
    "use strict";

    return function (parent) {
        var ticks = 0,
            interval,
            div = createElement('div'),
            span = createElement('span'),
            buttonDiv = createElement('div'),
            toggleButton = createElement('button'),
            resetButton = createElement('button');

        parent = parent || document.body;

        div.className = 'stopwatch';
        span.innerHTML = "0:00:00:00"; // prevent jump on start
        div.appendChild(span);
        resetButton.innerHTML = 'reset';
        buttonDiv.className = 'buttons';
        buttonDiv.appendChild(toggleButton);
        buttonDiv.appendChild(resetButton);
        div.appendChild(buttonDiv);

        parent.appendChild(div);

        updateToggleButtonText();

        toggleButton.addEventListener('click', function () {
            toggle();
        });

        resetButton.addEventListener('click', function () {
            reset();
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

        function updateDisplay() {
            var hundredths = ticks % 100,
                seconds = Math.floor(ticks / 100) % 60,
                minutes = Math.floor(seconds / 60) % 60,
                hours = Math.floor(minutes / 60);

            span.innerHTML = hours + ':' +
                ensureTwoDigits(minutes) + ':' +
                ensureTwoDigits(seconds) + ':' +
                ensureTwoDigits(hundredths);
        }

        function updateToggleButtonText() {
            if (interval) {
                toggleButton.innerHTML = 'stop';
            } else {
                toggleButton.innerHTML = 'start';
            }
        }

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
            updateToggleButtonText();
        }

        function reset() {
            ticks = 0;
            updateDisplay();
        }

        return {
            toggle: toggle,
            reset: reset,
            getTicks: function () {
                return ticks;
            }
        };
    }
}());