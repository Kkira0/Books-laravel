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
        $books = Book::all();
        returnview('books.show', ['books' => $books]); 
    }

    public function store(Request $request){
        
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date
        ];

        Book::create($data);


        return redirect('/books');
    }
    



}
