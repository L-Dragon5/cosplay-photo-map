function initMap() {
	var map = new google.maps.Map(document.getElementById('map'));
	var options = {
		zoom: 4
	};
	var uluru = {lat: -25.344, lng: 131.036};
	
	map.setCenter(uluru);
	map.setOptions(options);
}