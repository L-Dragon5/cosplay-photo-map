$.ajax({
	type: 'GET',
	url: '/locations/',
	success: function(data) {
		// Move returned data to a variable
		var locations = data;
		var pos;
		
		// Google Maps Options
		var mapOptions = {
			zoom: 10,
			disableDoubleClickZoom: false,
			streetViewControl: false,
			zoomControl: true,
			fullscreenControl: false
		};
		
		// Create new map with map options
		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
		// HTML5 geolocation
		if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			});
		}
		
		if(pos === undefined) {
			pos = new google.maps.LatLng(43.0418258, -77.6419547);
		}
		
		// Set map center
		map.setCenter(pos);
		
		// Go through each location
		for(var i = 0; i < locations.length; i++) {
			// Create marker for each location and set on map
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']),
				map: map,
				id: locations[i]['id']
			});
			
			// Set click listener for each marker
			google.maps.event.addListener(marker, 'click', (function(map, marker, i) {
				return function() {
					map.setCenter(marker.getPosition());
					map.setZoom(15);
					
					let data = locations[i];
					openInfo(data);
				}
			})(map, marker, i));
		}
	}
});

$('#location-info button.uk-modal-close-default').on('click', closeInfo);

function openInfo(data) {
	let i = $('#location-info');
	i.removeClass('location-info--open');
	i.removeClass('location-info--closed');
	
	i.addClass('location-info--open');
	
	// Populate modal
	if(data.name !== undefined) {
		$('.location-info__body__name').text(data.name);
	}
	
	if(data.updated_at !== undefined) {
		$('.location-info__body__updated').text('Last updated: ' + formatTimestamp(data.updated_at));
	}
	
	if(data.address !== undefined) {
		$('.location-info__body__address').text('Address: ' + data.address);
	}
	
	if(data.is_public == 0) {
		$('.location-info__body__is-public').text('Private').addClass('location-private');
	} else {
		$('.location-info__body__is-public').text('Public').addClass('location-public');
	}
	
	if(data.tags !== undefined) {
		$('.location-info__body__tags').text(data.tags);
	} else {
		$('.location-info__body__tags').html('<i>No tags found</i>');
	}
	
	if(data.description !== undefined) {
		$('.location-info__body__description').text(data.description);
	}
	
	// Populate Photos
	$.ajax({
		type: 'GET',
		url: '/locations-photo/' + data.id + '/0',
		success: function(response) {
			$('.location-info__body__photos--location').html(response);
		}
	});
}

function closeInfo() {
	let i = $('#location-info');
	i.removeClass('location-info--open');
	i.removeClass('location-info--closed');
	
	i.addClass('location-info--closed');
}

function formatTimestamp(time) {
	var date = new Date(time).toLocaleDateString(undefined, {
		day: '2-digit',
		month: '2-digit',
		year: 'numeric',
		hour: '2-digit',
		minute: '2-digit',
	});
	
	return date;
}