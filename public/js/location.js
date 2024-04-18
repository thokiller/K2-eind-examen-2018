(function($) {
    function loadMap() {
        var mapEl = document.getElementById('map');
        var fromPoint = {lat: $(mapEl).data('d-lat'), lng: $(mapEl).data('d-lng') };
        var currentPoint = {lat: $(mapEl).data('c-lat'), lng: $(mapEl).data('c-lng') };

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;

        var map = new google.maps.Map(mapEl, {
            zoom: 6,
            center: currentPoint
        });

        directionsDisplay.setMap(map);

        directionsService.route({
            origin: fromPoint,
            destination: currentPoint,
            optimizeWaypoints: true,
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            }
        });
    }

    function loadPartial(object, date) {
        $.ajax({
            url: '/location/get/' + object,
            method: 'POST',
            data: {
                date: date
            }
        }).then(function(result) {
            $('#result').html(result);
            loadMap();
        }).fail(function(response) {
            $('#result').html(response.responseJSON.message);
        });
    }

    $('#dateBtn').on('click', function () {
        $('#result').html('<i class="fa fa-circle-o-notch fa-spin bs-text-center full-width" style="font-size:24px"></i>');
        loadPartial($('#date').data('id'), $('#date').val());
    });

    loadPartial($('#date').data('id'), $('#date').val());
})(jQuery);
