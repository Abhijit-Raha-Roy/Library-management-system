<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book ;
class AdminbookController extends Controller
{
    public function bookadd()
    {
        return view('admin.add-book');
    }

    public function storebook(Request $request)
    {
       

        $book = new Book;
        $book->book_id = $request->bookid;
        $book->book_title = $request->booktitle;
        $book->author_name = $request->authorname;
        $book->description = $request->description;
        $book->numberofissue = $request->numberofissue;
        
        $book->save();
        return view('admin.add-book');
    }

   public function allbook()
   {
      $book= Book::all();
      return view('admin.all-book',compact('book'));

   }
   


   public function booksearch(Request $request)
   {
    $search_txt = $request->search;
    $book = Book::orderBy('book_id','desc')
             ->where('book_title','like','%'.$search_txt.'%')
             ->get();
            
             return view('admin.booksearch',compact('book'));         
   }

   
}
