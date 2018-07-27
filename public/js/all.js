$.ajax({
	type: 'GET',
	url: '/locations/',
	success: function(data) {
		var locations = data;
		
		var mapOptions = {
			center: new google.maps.LatLng(43.0418258, -77.6419547),
			zoom: 10,
			disableDoubleClickZoom: false,
			streetViewControl: false,
			zoomControl: true,
			fullscreenControl: false
		};
		
		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
		for(var i = 0; i < locations.length; i++) {
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']),
				map: map,
				id: locations[i]['id']
			});
			
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					
				}
			})(marker, i));
		}
	}
});