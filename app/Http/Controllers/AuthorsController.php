<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return "authors index file list will here..";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//create form is here
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//store will here
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Authors  $authors
	 * @return \Illuminate\Http\Response
	 */
	public function show(Authors $authors) {
		//show form will be here
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Authors  $authors
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Authors $authors) {
		//edit form will be here..
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Authors  $authors
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Authors $authors) {
		// update
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Authors  $authors
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Authors $authors) {
		// delete
	}
}
