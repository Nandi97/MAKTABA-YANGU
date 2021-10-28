<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Borrower;
use App\Models\Book;
use App\Models\BookBorrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $title = 'Books';
    $books = Book::all();

    return view('books/index', compact(['title', 'books']));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $title = 'Create';

    return view('books.create', compact(['title']));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \App\Models\Book
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // Validate form input
    $request->validate([
      'title' => 'required',
      'author' => 'required',
      'description' => 'required',
      'cover' => 'required',
      'publishDate' => 'required|date',
    ]);

    // Create a reference to a new Book object
    $book = new Book();

    // Populate the new Book object with the form input data
    $book->title = $request->title;
    $book->author = $request->author;
    $book->description = $request->description;
    $book->cover = $request->cover;
    $book->publishDate = $request->publishDate;

    // Save the new Book object into the books table in the database
    $book->save();

    // Redirect the user to the books index page
    return redirect('books');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function show(Book $book)
  {
    $users = User::all();
    $borrowers = Borrower::all();
    $bookBorrowers = BookBorrower::where('book_id', $book->id)->get();
    //Show book
    return view('books.show', compact(['book', 'users', 'borrowers', 'bookBorrowers']));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function edit(Book $book)
  {
    $title = 'Update';

    return view('books/edit', compact(['title', 'book']));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Book $book)
  {
    $request->validate([
      'title' => 'required',
      'author' => 'required',
      'description' => 'required',
      'cover' => 'required',
      'publishDate' => 'required|date',
    ]);

    // Populate the new Book object with the form input data
    $book->title = $request->title;
    $book->author = $request->author;
    $book->description = $request->description;
    $book->cover = $request->cover;
    $book->publishDate = $request->publishDate;

    // Save the new Book object into the books table in the database
    $book->save();

    // Redirect the user to the books index page
    return redirect('books');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function destroy(Book $book)
  {
    //
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function lend(Request $request, Book $book, BookBorrower $bookBorrower)
  {
    // Validate form input data
    $validator = Validator::make($request->all(), [
      'lender_id' => 'required|integer',
      'borrower_id' => 'required|integer',
      'status' => 'required|integer'
    ]);

    if ($validator->fails()) {
      echo '<pre>';
      echo var_dump($validator->fails());
      echo '</pre>';

      return redirect('books/' . $book->id)
        ->withErrors($validator)
        ->withInput();
    }

    // Update the book status to false to indicate book is unavailable
    $book->is_available = 0;
    $book->save();

    // Create a new BookBorrower object
    $bookBorrower = new BookBorrower();

    // Populate the bookBorrower attributes with the form input data
    $bookBorrower->lender_id = $request->lender_id;
    $bookBorrower->borrower_id = $request->borrower_id;
    $bookBorrower->book_id = $book->id;

    // Save the new bookBorrower object in the database
    $bookBorrower->save();

    return redirect('books/' . $book->id);
  }

  public function return(Request $request, Book $book)
  {

    // Update the book's status to is_available
    $book->is_available = 1;
    $book->save();


    $bookBorrower = BookBorrower::where('book_id', $book->id)->firstWhere('status', 0);
    $bookBorrower->status = 1;
    $bookBorrower->save();

    return redirect('books/' . $book->id);
  }
}