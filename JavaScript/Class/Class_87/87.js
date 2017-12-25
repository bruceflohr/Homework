/*global $*/
(function () {
    "use strict";

    $.getJSON("videos.json", function (videoList) {
        var theList = $("#sidebar ul");
        var videoPlayer = $("video");

        videoList.array.forEach(function (video) {
            $('<li><img src="' + (video.picture || 'video/defualt.png') + '"/>' + video.title + '</li>')
                .appendTo(theList)
                .click(function () {
                    videoPlayer.attr("src", video.url);
                    videoPlayer.show();
                    //videoPlayer[0].play();
                });
        });
    });
}());