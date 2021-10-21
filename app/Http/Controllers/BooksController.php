<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

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

        return view('books/index', compact(['title','books']));
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
        $title = 'Show';
        //Show book
        return view('books.show', compact(['title','book']));
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
          'title'=>'required',
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
}