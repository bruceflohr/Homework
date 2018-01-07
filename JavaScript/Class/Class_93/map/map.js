/*global google, $ */
function initMap() {
    "use strict";

    var location = { lat: -34.397, lng: 150.644 },
        map = new google.maps.Map(
            document.getElementById('map'),
            {
                center: location,
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.SATELLITE
            }
        ),
        tagInput = $('#tag'),
        numResultsInput = $('#numResults'),
        theList = $('#sidebar ul'),
        infoWindow = new google.maps.InfoWindow({
            maxWidth: 250
        }),
        drawingManager = new google.maps.drawing.DrawingManager(),
        markers = [],
        drawings;

    drawingManager.setMap(map);

    $('#go').click(function () {
        $.getJSON('http://api.geonames.org/wikipediaSearch?callback=?',
            {
                q: tagInput.val(),
                maxRows: numResultsInput.val(),
                username: 'slubowsky',
                type: 'json'
            },
            function (data) {
                var bounds = new google.maps.LatLngBounds();

                data.geonames.forEach(function (place) {
                    var location = { lat: place.lat, lng: place.lng },
                        marker = new google.maps.Marker({
                            position: location,
                            map: map,
                            title: place.title,
                            icon: place.thumbnailImg ? {
                                url: place.thumbnailImg,
                                scaledSize: new google.maps.Size(50, 50)
                            } : null
                        });

                    bounds.extend(location);

                    marker.addListener('click', function () {
                        infoWindow.setContent(place.summary + '<br><a target="_blank" href="http://' + place.wikipediaUrl + '">Wikipedia</a>');
                        infoWindow.open(map, marker);
                    });

                    markers.push(marker);

                    $('<li><img src="' + (place.thumbnailImg || 'default.png') + '"/>' + place.title + '</li>')
                        .appendTo(theList)
                        .click(function () {
                            map.panTo(location);
                            map.setZoom(15);
                        });
                });

                map.fitBounds(bounds);
            });
    });

    $('#clear').click(function () {
        markers.forEach(function (marker) {
            marker.setMap(null);
        });
        markers = [];
        theList.empty();
        drawings = [];
        localStorage.removeItem('drawings');
    });

    google.maps.event.addListener(drawingManager, 'overlaycomplete', function (event) {
        if (event.type === 'circle') {
            var radius = event.overlay.getRadius(),
                center = event.overlay.getCenter();

            drawings.push({ radius: radius, center: center });
            localStorage.drawings = JSON.stringify(drawings);
            //localStorage.circle = JSON.stringify({ radius: radius, center: center });
        }
    });

    /*var existingCircle = localStorage.circle;
    if (existingCircle) {
        existingCircle = JSON.parse(existingCircle);
        var circle = new google.maps.Circle({
            map: map,
            radius: existingCircle.radius,
            center: existingCircle.center
        });
    }*/
    drawings = localStorage.drawings || [];
    if (typeof drawings === 'string') {
        drawings = JSON.parse(drawings);
        drawings.forEach(function (circleData) {
            var circle = new google.maps.Circle({
                map: map,
                radius: circleData.radius,
                center: circleData.center
            });
            markers.push(circle);
        });
    }
}