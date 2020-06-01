<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applybook;
use App\Book;
class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function profile()
    {
        return view('user.userprofile');
    }

    public function applyforbook()
    {
        return view('user.applyforthebook');
    }

    public function applybook(Request $request)
    {
     $book = new Applybook;
     $book->book_id = $request->bookid;
     $book->book_title = $request->booktitle;
     $book->author_name = $request->authorname;
     $book->useridno = $request->useridno;
    
     $book->save();
     return view('user.applyforthebook');

    }

    public function booklist()
    {
       $book= Book::all();
       return view('user.booklist',compact('book'));
 
    }

    public function findbooks(Request $request)
    {
     $search_txt = $request->search;
     $book = Book::orderBy('book_id','desc')
              ->where('book_title','like','%'.$search_txt.'%')
              ->get();
             
              return view('user.findbook',compact('book'));         
    }
 
}
