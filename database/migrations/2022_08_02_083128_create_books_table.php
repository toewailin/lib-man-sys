<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('books', function (Blueprint $table) {
			$table->id();
			$table->string('name')->nullable();
			$table->string('slug');
			$table->string('author_id')->nullable();
			$table->string('publisher_id')->nullable();
			$table->string('edition');
			$table->string('category_id')->nullable();
			$table->string('status');
			$table->string('cover_photo');
			$table->string('book');
			$table->string('abstract');
			$table->string('remark');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('books');
	}
}
