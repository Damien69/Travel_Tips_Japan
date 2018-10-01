//carte
function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 35.719411,
            lng: 139.643148
        },
        zoom: 6,
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function (marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
}

//convertisseur de devises

function euroConverter() {
    document.converter.yen.value = document.converter.euro.value * 126.15
}

function yenConverter() {
    document.converter.euro.value = document.converter.yen.value * 0.0079
}

//galerie
function changeImageOnClick(event) {
    event = event || window.event;
    var targetElement = event.target || event.srcElement;

    if (targetElement.tagName == "IMG") {
        mainImage.src = targetElement.getAttribute("src");
    }
    function scrollTo(image_id) {
        var images = document.getElementById("imagesGalerie").getElementsByTagName("img");

        for (var i = 0; images.length; i++) {
            images[i].onmouseover = function () {
                this.style.cursor = 'hand';
                this.style.borderColor = 'red';
            }
            images[i].onmouseout = function () {
                this.style.cursor = 'pointer';
                this.style.borderColor = 'grey';
            }

        }

    }




//traducteur
$(document).ready(function () {
    $("#show_bonjour").click(function () {
        $(".bonjour").show();
        $(".revoir").hide();
        $(".merci").hide();
        $(".francais").hide();
        $(".origine").hide();
        $(".gare").hide();
        $(".anglais").hide();
        $(".japonais").hide();
        $(".pardon").hide();
        $(".aplus").hide();
    });
    $("#show_revoir").click(function () {
        $(".revoir").show();
        $(".bonjour").hide()
        $(".merci").hide();
        $(".francais").hide();
        $(".origine").hide();
        $(".gare").hide();
        $(".anglais").hide();
        $(".japonais").hide();
        $(".pardon").hide();
        $(".aplus").hide();
    });
    $("#show_aplus").click(function () {
        $(".aplus").show();
        $(".merci").hide();
        $(".bonjour").hide()
        $(".francais").hide();
        $(".origine").hide();
        $(".anglais").hide();
        $(".japonais").hide();
        $(".pardon").hide();
        $(".revoir").hide();
    });
    $("#show_francais").click(function () {
        $(".francais").show();
        $(".merci").hide();
        $(".bonjour").hide()
        $(".revoir").hide();
        $(".origine").hide();
        $(".gare").hide();
        $(".anglais").hide();
        $(".japonais").hide();
        $(".pardon").hide();
        $(".aplus").hide();
    });
    $("#show_origine").click(function () {
        $(".origine").show();
        $(".francais").hide();
        $(".merci").hide();
        $(".bonjour").hide()
        $(".revoir").hide();
        $(".gare").hide();
        $(".anglais").hide();
        $(".japonais").hide();
        $(".pardon").hide();
        $(".aplus").hide();
    });
    $("#show_pardon").click(function () {
        $(".pardon").show();
        $(".origine").hide();
        $(".francais").hide();
        $(".merci").hide();
        $(".gare").hide();
        $(".bonjour").hide()
        $(".anglais").hide();
        $(".japonais").hide();
        $(".revoir").hide();
        $(".aplus").hide();
    });
    $("#show_gare").click(function () {
        $(".gare").show();
        $(".pardon").hide();
        $(".origine").hide();
        $(".francais").hide();
        $(".merci").hide();
        $(".bonjour").hide()
        $(".anglais").hide();
        $(".japonais").hide();
        $(".revoir").hide();
        $(".aplus").hide();
    });
    $("#show_anglais").click(function () {
        $(".anglais").show();
        $(".gare").hide();
        $(".pardon").hide();
        $(".origine").hide();
        $(".francais").hide();
        $(".merci").hide();
        $(".bonjour").hide()
        $(".japonais").hide();
        $(".revoir").hide();
        $(".aplus").hide();
    });
    $("#show_japonais").click(function () {
        $(".japonais").show();
        $(".anglais").hide();
        $(".gare").hide();
        $(".pardon").hide();
        $(".origine").hide();
        $(".francais").hide();
        $(".merci").hide();
        $(".bonjour").hide()
        $(".revoir").hide();
        $(".aplus").hide();
    });
    $("#show_merci").click(function () {
        $(".merci").show();
        $(".bonjour").hide()
        $(".gare").hide();
        $(".revoir").hide();
        $(".anglais").hide();
        $(".francais").hide();
        $(".japonais").hide();
        $(".origine").hide();
        $(".pardon").hide();
        $(".aplus").hide();
    });
});