// JavaScript Document

(function() {

var map = new google.maps.Map(document.querySelector('#map')), marker, preloader = document.querySelector('.preloadcon'), stats= document.querySelectorAll('.stats');

///import the gocode API
///
var geocoder = new google.maps.Geocoder(),

//don't ask me why, but neither a for loop not a foreach would allow me to run the same funtion from two separate buttons.
geocode1 = document.querySelector('#geocode1'),
geocode2 = document.querySelector('#geocode2'),

//directions display
directionsService = new google.maps.DirectionsService(),
directionsDisplay,
locations = [];

var icon = 'images/marker.png';

var imgOverlay;

var addBut = document.querySelectorAll('.addoverlay');
var rmvBut = document.querySelectorAll('.removeoverlay');



function initMap(position){
	//save our location
	locations[0] = { lat: 44.490723, lng: -81.404537,};
	
	directionsDisplay = new google.maps.DirectionsRenderer({
          map: map,
});

	
	directionsDisplay.setMap(map);
	map.setCenter({ lat: 44.490723, lng: -81.404537,}); //passes dynamic variables through method NOTE: objects require commas, methods require semicolons
	map.setZoom(20);

	marker = new google.maps.Marker({
	animation: google.maps.Animation.DROP,
	position: {lat: 44.490723, lng: -81.404537,},
	map: map,
	icon: icon,
	title: "Chantry Island",


});


  var contentString = '<div id="content">'+
      '<h1>86 Saugeen St. Southampton, Ontario Canada N0H 2L0</h1>'+
      '<div id="bodyContent">'+
      '<p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>'+
      '</div>'+
      '</div>';


 var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  
   marker.addListener('click', function() {
    infowindow.open(map, marker);
  });


  var imageBounds = {
          north: 44.490920, 
          south: 44.490530,
          east: -81.404056,
          west: -81.404950  
        };

        imgOverlay = new google.maps.GroundOverlay(
            'images/mapconoverlay.jpg',
            imageBounds);
        imgOverlay.setMap(map);


preloader.classList.add('hide-preloader');
	
}

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(initMap, handleError); //this function requirs a success callback and an error callback. The error callback runs when it fails.
}else{

	console.log("Failure to load.");
}


function handleError() {

console.log("Something went wrong.");

}

function codeAddress(){
	

	var address = document.querySelector('.address').value;

	geocoder.geocode({ 'address' : address}, function(results, status){

		if(status == google.maps.GeocoderStatus.OK){

			// push location into array
			locations[1] = { lat: results[0].geometry.location.lat(),
							lng: results[0].geometry.location.lng(),
					};
			map.setCenter(results[0].geometry.location);

			if(marker){
				marker.setMap(null);

				marker = new google.maps.Marker({
						map: map,
						position: results[0].geometry.location,
					});
	
				calcRoute(results[0].geometry.location);
			}

			else {
				console.log('Geocode was not successful for the following reason:', status);
			}
		}

	});
}

function calcRoute(codedLoc){

var request = {

	origin: locations[0],
	destination: locations[1],
	travelMode: 'DRIVING',
	
};

var origin = new google.maps.LatLng(marker.lat,marker.lng);
var destination = new google.maps.LatLng(44.490723, -81.404537);
	
 var service = new google.maps.DistanceMatrixService();
  service.getDistanceMatrix({
      origins: origin,
      destinations: destination,
      avoidHighways: false,
      avoidTolls: false
    });
	
directionsService.route(request, function(response, status) {

if(status == 'OK') {

	directionsDisplay.setDirections(response);
	updateLocation(response);
}
});

}

function updateLocation(response){
	
	var point = response.routes[0].legs[0];
	for (var i = 0; i < stats.length; i++) {  
	 stats[i].innerHTML = 'Estimated travel time: ' + point.duration.text + ' (' + point.distance.text + ')';
	}
	}



      function addOverlay() {
        imgOverlay.setMap(map);
      }

      function removeOverlay() {
        imgOverlay.setMap(null);
      }

[].forEach.call(addBut, function(addBut) {addBut.addEventListener('click', addOverlay, false);});

[].forEach.call(rmvBut, function(rmvBut) {rmvBut.addEventListener('click', removeOverlay, false);});

geocode1.addEventListener('click', codeAddress, false);
geocode2.addEventListener('click', codeAddress, false);


})();