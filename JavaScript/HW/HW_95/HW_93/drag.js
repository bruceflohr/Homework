/*global $ */
(function () {
    'use strict';

    var dragging,
        offset,
        body = $('body'),
        zIndex = 0,
        drawings;

    drawings = localStorage.drawings;

    $(document).on('mousedown', '.box', function (event) {
        dragging = $(this);
        offset = { y: event.offsetY, x: event.offsetX };
        dragging.css("zIndex", ++zIndex);
        dragging.addClass("dragging");
    }).on('mouseup', '.box', function () {
        dragging.removeClass("dragging");
        dragging = null;
    }).mousemove(function (event) {
        if (dragging) {
            dragging.css({ top: event.clientY - offset.y, left: event.clientX - offset.x });
            localStorage.drawings = JSON.stringify(drawings);
        }
    });

    $('#add').click(function () {
        $('<div class="box"></div>').appendTo(body);
    });
}());