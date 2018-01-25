<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Fusion Tables layers</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div id="map"></div>


<script>

    function initMap() {


        var map = new google.maps.Map(document.getElementById('map'), {

            center: {lat: 39.308224,  lng: 35.236922},
            zoom: 6
        });

        var layer = new google.maps.FusionTablesLayer({


            query: {
                select: 'geometry',
                from: '1NYlfPxGv5v73W23_rnqont9yb4eFQjxivRkaDot1',
                where:'Plaka = 23',
            }
        });

        layer.setMap(map);

        // Add a listener to listen for zoom changed events
        google.maps.event.addListener(map, 'zoom_changed', function() {
            var coarseZoom = 8;
            var zoomLevel = map.getZoom();

            // Show a coarser geometry when the map is zoomed out
            if (zoomLevel <= coarseZoom) {
                layer.setOptions({
                    query: {
                        select: 'geometry',
                        from: '1NYlfPxGv5v73W23_rnqont9yb4eFQjxivRkaDot1',

                    },
                    styles: [{
                        polygonOptions: {
                            fillColor: '#00FF00',
                            fillOpacity: 0.3
                        }
                    }, {
                        where: 'Plaka > 23',
                        polygonOptions: {
                            fillColor: '#fff702'
                        }
                    }, {
                        where: 'Plaka = 23',
                        polygonOptions: {
                            fillColor: '#ff2500',
                            fillOpacity: 0.3
                        }
                    }],
                    options: {
                        styleId: 2,
                        templateId: 2
                    }
                });

                // Show a finer geometry when the map is zoomed in
            } else if (zoomLevel >= coarseZoom) {
                layer.setOptions({
                    query: {
                        select: 'geometry',
                        from: '152rWNgYQrz_5CaXpgA-OU5INBOr-pAsbiwIVeTIZ',

                    },
                    styles: [{
                        polygonOptions: {
                            fillColor: '#00FF00',
                            fillOpacity: 0.3
                        }
                    }, {
                        where: 'ID_2 > 322',
                        polygonOptions: {
                            fillColor: '#fff702'
                        }
                    }, {
                        where: 'ID_2 = 322',
                        polygonOptions: {
                            fillColor: '#ff2500',
                            fillOpacity: 0.3
                        }
                    }],
                    options: {
                        styleId: 2,
                        templateId: 2
                    }
                });

                // Otherwise, show a medium geometry
            }

        });}






</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMP0SYbq6G4GsivibZvk8c0JfwZqNcSWo&callback=initMap">
</script>
</body>
</html>