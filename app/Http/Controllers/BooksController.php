<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('user_id', auth()->user()->id);
        return $books;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->user_id = auth()->user()->id;
        $book->title = $request->title;
        $book->phonetic = $request->phonetic;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->volume = $request->volume;
        $book->chapter = $request->chapter;
        $book->status = $request->status;
        $book->image_url = $request->image_url;
        $book->point = $request->point;
        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $book = Book::find($request->id);
        // $book->user_id = $request->user_id;
        $book->title = $request->title;
        $book->phonetic = $request->phonetic;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->volume = $request->volume;
        $book->chapter = $request->chapter;
        $book->status = $request->status;
        $book->image_url = $request->image_url;
        $book->point = $request->point;
        $book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}
