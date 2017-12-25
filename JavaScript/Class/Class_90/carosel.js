/*global $*/
(function () {
    "use strict";

    tagInput = $('#tag');

    $('#go').click(function () {
        $.getJSON("https://flickr.com/services/feeds/potos_public.gne?jsoncallback=?",
            {
                format: "json", tags: tagInput.val()
            }, function (data) {
                console.log(data);
            });
    });
}());