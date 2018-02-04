/*global $ */
(function () {
    'use strict';

    var dragging,
        offset,
        body = $('body'),
        colorPicker = $('#color'),
        zIndex = 0;

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
        }
    });

    $('#add').click(function () {
        $('<div class="box"></div>').appendTo(body).css("background-color", colorPicker.val());
    });
}());