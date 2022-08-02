<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
	use HasFactory;
	protected $fillable = [
		'name',
		'slug',
		'publisher',
		'edition',
		'category',
		'status',
		'cover_photo',
		'book',
		'abstract',
		'remark',
	];

}
