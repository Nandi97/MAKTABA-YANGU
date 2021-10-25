<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Borrowers';
        $borrowers = Borrower::all();

        return view('borrowers/index', compact(['title','borrowers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create';

        return view('borrowers.create', compact(['title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Models\Borrower
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form input data
        $request->validate([
          'name' => 'required',
          'avatar' => 'required',
          'email' => 'required',
          'phone_no' => 'required',
      ]);

        // Create a reference to a new Borrower object
        $borrower = new Borrower();

        // Populate the new Borrower object with form input data
        $borrower->name = $request->name;
        $borrower->avatar = $request->avatar;
        $borrower->email = $request->email;
        $borrower->phone_no = $request->phone_no;

        // Save the new Borrower object into the borrowers table in the database
        $borrower->save();

        // Redirect user back to the Borrowers page
        return redirect('borrowers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function show(Borrower $borrower)
    {
        return view('borrowers.show', compact(['borrower']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrower $borrower)
    {
        $title = 'Update';

        return view('borrowers/edit', compact(['borrower','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrower $borrower)
    {
        // Validate form input data
        $request->validate([
          'name' => 'required',
          'avatar' => 'required',
          'email' => 'required',
          'phone_no' => 'required',
      ]);



        // Populate the new Borrower object with form input data
        $borrower->name = $request->name;
        $borrower->avatar = $request->avatar;
        $borrower->email = $request->email;
        $borrower->phone_no = $request->phone_no;

        // Update the Borrower object into the database
        $borrower->save();

        // Redirect user back to the Borrowers page
        return redirect('borrowers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrower $borrower)
    {
        //
    }
}