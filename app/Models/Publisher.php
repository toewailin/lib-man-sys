<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model {
	use HasFactory;
	protected $fillable = [
		'brand_name',
		'brand_logo',
		'phone',
		'address',
	];

}
