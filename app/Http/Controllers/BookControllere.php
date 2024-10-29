<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookControllere extends Controller
{


    public function index(){
        $books = Book::all();
        return view('books.index', ['allBooks' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function show($id){
        $book = Book::find($id);
        return view('books.show', ['book' => $book]); 
    }

    public function store(Request $request){
        \Log::debug($request);
        
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'release_date' => $request->release_date
        ];

        Book::create($data);


        return redirect('/books');
    }
    



}
