$(function () {
    // Google Maps  
    $('#map-canvas').addClass('loading');
    var latlng = new google.maps.LatLng(3.072082, 101.710212); // Set your Lat. Log. New York
    var settings = {
        zoom: 16
        , center: latlng
        , mapTypeId: google.maps.MapTypeId.ROADMAP
        , mapTypeControl: false
        , scrollwheel: false
        , draggable: true
        , styles: [{
            "featureType": "landscape.natural"
            , "elementType": "geometry.fill"
            , "stylers": [{
                "visibility": "on"
            }, {
                "color": "#e0efef"
            }]
        }, {
            "featureType": "poi"
            , "elementType": "geometry.fill"
            , "stylers": [{
                "visibility": "on"
            }, {
                "hue": "#1900ff"
            }, {
                "color": "#c0e8e8"
            }]
        }, {
            "featureType": "road"
            , "elementType": "geometry"
            , "stylers": [{
                "lightness": 100
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road"
            , "elementType": "labels"
            , "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit.line"
            , "elementType": "geometry"
            , "stylers": [{
                "visibility": "on"
            }, {
                "lightness": 700
            }]
        }, {
            "featureType": "water"
            , "elementType": "all"
            , "stylers": [{
                "color": "#7dcdcd"
            }]
        }]
        , mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        }
        , navigationControl: false
        , navigationControlOptions: {
            style: google.maps.NavigationControlStyle.SMALL
        }
    , };
    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
    google.maps.event.addDomListener(window, "resize", function () {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
        $('#map-canvas').removeClass('loading');
    });
    var contentString = '<div id="info-window">' + '<p>11, Jalan Tasik Selatan 3,<br /> Bandar Tasik Selatan, 57000 Kuala Lumpur<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>' + '</div>';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    var companyImage = new google.maps.MarkerImage('images/map-marker.png', new google.maps.Size(36, 62), // Width and height of the marker
        new google.maps.Point(0, 0), new google.maps.Point(18, 52) // Position of the marker 
    );
    var companyPos = new google.maps.LatLng(3.072082, 101.710212);
    var companyMarker = new google.maps.Marker({
        position: companyPos
        , map: map
        , icon: companyImage
        , title: "ANSI Systems Sdn Bhd"
        , zIndex: 3
    });
    google.maps.event.addListener(companyMarker, 'click', function () {
        infowindow.open(map, companyMarker);
        pageView('/#address');
    });
});