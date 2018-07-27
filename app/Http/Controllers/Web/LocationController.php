<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Location;

class LocationController extends Controller
{
    public function getAllLocations() {
		$locations = Location::all();
		return response()->json($locations, 200);
	}
	
	public function getLocation($id) {
		
	}
}
