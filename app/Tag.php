<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Fields:
 * 		- id
 * 		- name
 */
class Tag extends Model
{
	protected $table = 'tags';
	protected $fillable = ['name'];
}
