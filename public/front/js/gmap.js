(function ($) {
    // USE STRICT
    "use strict";

        $(document).ready(function () {

            var selector_map = $('#google_map');
            var img_pin = selector_map.attr('data-pin');
            var data_map_x = selector_map.attr('data-map-x');
            var data_map_y = selector_map.attr('data-map-y');
            var scrollwhell = selector_map.attr('data-scrollwhell');
            var draggable = selector_map.attr('data-draggable');

            if (img_pin == null) {
                img_pin = 'img/icons/location.png';
            }
            if (data_map_x == null || data_map_y == null) {
                data_map_x = 37.3863866;
                data_map_y = -122.0576091;
            }
            if (scrollwhell == null) {
                scrollwhell = 0;
            }

            if (draggable == null) {
                draggable = 0;
            }

            var style = [{
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
            }, {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [{"visibility": "off"}]
            }, {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{"visibility": "off"}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{"lightness": 20}, {"color": "#ececec"}]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "all",
                "stylers": [{"visibility": "on"}, {"color": "#f0f0ef"}]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [{"visibility": "on"}, {"color": "#f0f0ef"}]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "geometry.stroke",
                "stylers": [{"visibility": "on"}, {"color": "#d4d4d4"}]
            }, {
                "featureType": "landscape.natural",
                "elementType": "all",
                "stylers": [{"visibility": "on"}, {"color": "#ececec"}]
            }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "on"}]}, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{"lightness": 21}, {"visibility": "off"}]
            }, {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [{"visibility": "on"}, {"color": "#d4d4d4"}]
            }, {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#303030"}]
            }, {
                "featureType": "poi",
                "elementType": "labels.icon",
                "stylers": [{"saturation": "-100"}]
            }, {
                "featureType": "poi.attraction",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {
                "featureType": "poi.business",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {
                "featureType": "poi.government",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {
                "featureType": "poi.medical",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {"featureType": "poi.park", "elementType": "all", "stylers": [{"visibility": "on"}]}, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{"color": "#dedede"}, {"lightness": 21}]
            }, {
                "featureType": "poi.place_of_worship",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {
                "featureType": "poi.school",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {
                "featureType": "poi.school",
                "elementType": "geometry.stroke",
                "stylers": [{"lightness": "-61"}, {"gamma": "0.00"}, {"visibility": "off"}]
            }, {
                "featureType": "poi.sports_complex",
                "elementType": "all",
                "stylers": [{"visibility": "on"}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
            }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#dadada"}, {"lightness": 17}]}];

            var latitude = data_map_x,
                longitude = data_map_y,
                map_zoom = 14;

            var locations = [
                ['<div class="infobox"><h4>INSURANCE</h4><p>Now that you visited our website, how' +
                ' <br>about checking out our office too?</p></div>'
                    , latitude, longitude, 2]
            ];

            var map = new google.maps.Map(document.getElementById('google_map'), {
                zoom: map_zoom,
                scrollwheel: scrollwhell,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: draggable,
                styles: style,
                center: new google.maps.LatLng(latitude, longitude),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: img_pin
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }

        });

})(jQuery);