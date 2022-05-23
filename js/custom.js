// Regular map
function regular_map() {
    var var_location01 = new google.maps.LatLng(-12.08359, -77.025287);

    var var_location02 = new google.maps.LatLng(-11.9169964, -77.0566562);

    var var_mapoptions = {
        center: var_location01,
        zoom: 14
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var var_marker01 = new google.maps.Marker({
        position: var_location01,
        map: var_map,
        title: "TCOMP SAC - La Victoria"
    });

    var var_marker02 = new google.maps.Marker({
        position: var_location02,
        map: var_map,
        title: "TCOMP SAC - Comas"
    });
}

// Initialize maps
google.maps.event.addDomListener(window, 'load', regular_map);