<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class LibraryController extends Controller
{
    public function drawing(){
        $books = Book::where('category','drawing')->paginate(4);
        return view('web.drawing',compact('books'));
    }

    public function reading(){
        $books = Book::where('category','reading')->paginate(4);
        return view('web.library',compact('books'));
    }

    public function book_detail($id){
        $book = Book::where('id',$id)->first();
        return view('web.book_detail',compact('book'));
    }
}
