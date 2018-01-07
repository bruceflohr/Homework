/*global $*/
(function () {
    "use strict";

    var tagInput = $('#tag'),
        pictureImg = $('#pictures img'),
        pictureTitle = $('#picture h2'),
        pictures,
        index = 0;

    function refreshPicture() {
        pictureImg.attr("src", pictures[index].url);
        pictureTitle.text(pictures[index].title);
    }

    $('#go').click(function () {
        $.getJSON("https://api.flickr.com/services/feeds/potos_public.gne?jsoncallback=?",
            {
                format: "json", tags: tagInput.val()
            }, function (data) {
                pictures = data.items.map(function (picture) {
                    return {
                        title: picture.title,
                        url: picture.media.m.replace("_m.", ".")
                    };
                });
                refreshPicture();
            });
    });

    $('#left').click(function () {
        if (--index < 0) {
            index = pictures.length - 1;
        }
        refreshPicture();
    });

    $('#right').click(function () {
        if (++index === pictures.length) {
            index = 0;
        }
        refreshPicture();
    });
}());