var DemoGMaps = function () {

     var mapGeocoding = function() {

        var map = new GMaps({
            div: '#gmap_geocoding',
            lat: 28.70,
            lng: 77.14
        });

        map.addMarker({
            lat: 28.698998,
            lng: 77.138417,
            title: 'Marker with sandeep',
            infoWindow: {
                content: '<span style="color:#678666">HTML Content!</span>'
            }
        });
		map.addMarker({
            lat: 28.698998,
            lng: 77.1417,
            title: 'Marker with Pradeep',
            infoWindow: {
                content: '<span style="color:#678666">HTML Content!</span>'
            }
        });
         map.addMarker({
            lat: 28.697962,
            lng: 77.140517,
            title: 'Marker ',
            infoWindow: {
                content: '<span style="color:#000">Sandy!</span>'
            }
        });

        var handleAction = function() {
            var text = $.trim($('#gmap_geocoding_address').val());
            GMaps.geocode({
              address: text,
              callback: function(results, status){
                if(status=='OK'){
                  var latlng = results[0].geometry.location;
                  map.setCenter(latlng.lat(), latlng.lng());
                  map.addMarker({
                    lat: latlng.lat(),
                    lng: latlng.lng()
                  });
                  App.scrollTo($('#gmap_geocoding'));
                }
              }
            });
        }

        $('#gmap_geocoding_btn').click(function(e){
            e.preventDefault();
            handleAction();
        });

        $("#gmap_geocoding_address").keypress(function(e){
            var keycode = (e.keyCode ? e.keyCode : e.which);
            if(keycode == '13') {
                e.preventDefault();               
                handleAction();
            }           
        });

     }   

    return {
        //main function to initiate map samples
        init: function () {
            mapGeocoding();
        }

    };

}();