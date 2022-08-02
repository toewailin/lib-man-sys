<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model {
	use HasFactory;
	protected $fillable = [
		'name',
		'pen_name',
		'abstract',
		'biography',
		'cover_photo',
	];

}
