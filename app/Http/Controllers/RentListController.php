<?php

namespace App\Http\Controllers;

use App\Models\RentList;
use Illuminate\Http\Request;

class RentListController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function avaibleBooks() {
		//book table status has two conditions =>
		// 1. avaiable = 0 and when rent = 1;
		// avaiable_books = 'SELECT * FROM tbl_book WHERE status = 0';
		// data will compact or with ['avaiable_books']
		return 'query result';
	}

	public function returnedBooks() {
		//book table status has two conditions =>
		// 1. avaiable = 0 and when rent = 1;
		// avaiable_books = 'SELECT * FROM tbl_book WHERE status = 1';
		// data will compact or with ['avaiable_books']
		return 'query result';
	}

	public function index() {
		//book table status has two conditions =>
		// 1. avaiable = 0 and when rent = 1;
		// query = 'SELECT * FROM tbl_book';
		return 'query result';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//create form
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\RentList  $rentList
	 * @return \Illuminate\Http\Response
	 */
	public function show(RentList $rentList) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\RentList  $rentList
	 * @return \Illuminate\Http\Response
	 */
	public function edit(RentList $rentList) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\RentList  $rentList
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, RentList $rentList) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\RentList  $rentList
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(RentList $rentList) {
		//
	}
}
