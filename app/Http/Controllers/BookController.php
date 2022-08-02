<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		// $books = Book::all();
		// return view('book.index', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//create form is here..
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		// $request->validate(Request->all());

		// try{
		//     //INSERT INSERT INTO book (column1, column2, column3, ...)

		//     return response()->json([
		//         'message'=>'book Created Successfully!!'
		//     ]);
		// }catch(\Exception $e){
		//     \Log::error($e->getMessage());
		//     return response()->json([
		//         'message'=>'Something goes wrong while creating a book!!'
		//     ],500);
		// }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function show(Book $book) {
		//
		// show form is here
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Book $book) {
		//
		//edit form is here!
		// $request->validate(Request->all());

		//  try{

		//      $book->fill($request->post())->update();

		//      if($request->hasFile('image')){

		//          // remove old image
		//          if($book->image){
		//              $exists = Storage::disk('public')->exists("image/{$book->image}");
		//              if($exists){
		//                  Storage::disk('public')->delete("image/{$book->image}");
		//              }
		//          }

		//          $imageName = Str::random().'.'.$request->image->getClientOriginalExtension();
		//          Storage::disk('public')->putFileAs('image', $request->image,$imageName);
		//          $book->image = $imageName;
		//          $book->save();
		//      }

		//      return response()->json([
		//          'message'=>'book Updated Successfully!!'
		//      ]);

		//  }catch(\Exception $e){
		//      \Log::error($e->getMessage());
		//      return response()->json([
		//          'message'=>'Something goes wrong while updating a book!!'
		//      ],500);
		//  }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Book $book) {
		// update form is here
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Book $book) {
		try {

			if ($book->image) {
				$exists = Storage::disk('public')->exists("image/{$book->image}");
				if ($exists) {
					Storage::disk('public')->delete("image/{$book->image}");
				}
			}

			$book->delete();

			return response()->json([
				'message' => 'book Deleted Successfully!!',
			]);

		} catch (\Exception $e) {
			\Log::error($e->getMessage());
			return response()->json([
				'message' => 'Something goes wrong while deleting a book!!',
			]);
		}
	}
}
