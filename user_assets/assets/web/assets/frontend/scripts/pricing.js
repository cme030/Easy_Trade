function initMap() {
    var pick_address = document.getElementById('pickup-address');
    var drop_address = document.getElementById('drop-address');

    var pickup_autocomplete = new google.maps.places.Autocomplete(pick_address);
    var drop_autocomplete = new google.maps.places.Autocomplete(drop_address);
    pickup_autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);
    pickup_autocomplete.setComponentRestrictions(
                {'country': ['in']});
    drop_autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);
    drop_autocomplete.setComponentRestrictions(
                {'country': ['in']});
    pickup_autocomplete.addListener('place_changed', function() {
        var place = pickup_autocomplete.getPlace();
        $(".estimate-amount").text(0);
        $(".submit-wrap").show();
        $('.estimate-wrap').hide();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            $("#from-lat").val();
            $("#from-long").val();
            window.alert("No details available for input: '" + place.name + "'");
            return;
        } else {
            var lat = place.geometry.location.lat();
            var long = place.geometry.location.lng();
            $("#from-lat").val(lat);
            $("#from-long").val(long);
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        }
    });
    drop_autocomplete.addListener('place_changed', function() {
        var place = drop_autocomplete.getPlace();
        $(".estimate-amount").text(0);
        $(".submit-wrap").show();
        $('.estimate-wrap').hide();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            $("#to-lat").val();
            $("#to-long").val();
            window.alert("No details available for input: '" + place.name + "'");
            return;
        } else {
            var lat = place.geometry.location.lat();
            var long = place.geometry.location.lng();
            $("#to-lat").val(lat);
            $("#to-long").val(long);
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        }
    });


    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: {lat: 21.59, lng: 78.96}
    });
    directionsDisplay.setMap(map);
    //calculateAndDisplayRoute(directionsService, directionsDisplay);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    var fromLat, fromLong, toLat, toLong;
    fromLat = $("#from-lat").val();
    toLat = $("#to-lat").val();
    fromLong = $("#from-long").val();
    toLong = $("#to-long").val();
    if(fromLat != '' && fromLong != '' && toLat != '' && toLong != '') {
        directionsService.route({
            origin: fromLat+', '+ fromLong,
            destination: toLat+', '+ toLong,
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                console.log('Directions request failed due to ' + status);
            }
        });
    }
}

$(document).ready(function(){
    $('.estimate-get').bind("keypress", function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            return false;
        }
    });

    $('.estimate-get').submit(function(event){
        event.preventDefault();
        var fromLat, fromLong, toLat, toLong;
        fromLat = $("#from-lat").val();
        toLat = $("#to-lat").val();
        fromLong = $("#from-long").val();
        toLong = $("#to-long").val();
        if(fromLat != '' && fromLong != '' && toLat != '' && toLong != '') {
            $.ajax({
                type: "POST",
                url: '/get-fare',
                data: {fromLat: fromLat, fromLong: fromLong, toLat: toLat, toLong: toLong},
                dataType: "json",
                success: function( data ) {
                    if(data.status == 1) {
                        var fare = data.response.fare;
                        if(fare > 0) {
                            $(".estimate-amount").text(fare);
                            $(".submit-wrap").hide();
                            $('.estimate-wrap').show();
                            $(".error-block").hide()
                        }
                    } else {
                        showFormError(data.message);
                    }
                },
                error: function() {
                    showFormError("Oops! Something went wrong. Please try again later.");
                }
            });
        } else {
            showFormError("Please enter pickup and drop location");
        }
    })
});


function showFormError(message) {
    $('.error-block').html('');
    $('.error-block').html('<span class="text-danger">'+message+'</span>');
    $(".error-block").show();

    $('html, body').animate({
        scrollTop: $(".error-block").offset().top-200
    }, 2000);
}