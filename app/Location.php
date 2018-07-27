<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Fields:
 * 		- id
 * 		- name
 * 		- description
 * 		- address
 * 		- lat
 * 		- lng
 * 		- created_at
 * 		- updated_at
 */
class Location extends Model
{
	protected $table = 'locations';
	protected $fillable = ['name', 'description', 'address', 'lat', 'lng'];
}
