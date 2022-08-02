<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('authors', function (Blueprint $table) {
			$table->id();
			$table->string('name')->nullable();
			$table->string('pen_name');
			$table->string('abstract');
			$table->text('biography');
			$table->string('cover_photo');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('authors');
	}
}
