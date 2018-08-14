<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\LocationsPhoto;

class LocationsPhotoController extends Controller
{	
	public function getPhotosByLocation($id, $photoshoot) {
		$photos = LocationsPhoto::where([ ['location_id', '=', $id], ['is_photoshoot', '=', $photoshoot] ])->pluck('filename')->toArray();
		
		if(empty($photos)) {
			$photos = array('no-image.jpg');
		}
		
		return view('modals.location-photos', ['photos' => $photos]);
	}
}
