<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookissue;
use DB;
class AdminbookissueContrtoller extends Controller
{
    public function issuebook()
    {
        return view('admin.book-issue');
    }

    public function storeissuereturnbook(Request $request)
    {
        

        $bookissue = new Bookissue;
        $bookissue->book_id = $request->bookid;
        $bookissue->useridno = $request->useridno;
        $bookissue->issuedate = $request->issuedate;
        $bookissue->returndate= $request->returndate;
       // return response()->json($bookissue);
       $bookissue->save();
       return view('admin.book-issue');
    }

    public function currentlyissuebook()
    {
        //$book = Bookissue::all();
        $book=DB::table('bookissues')
             ->join('books','books.book_id','bookissues.book_id')
             ->get();
        
      
       
        return view('admin.currentlyissuedbook',compact('book'));
    }
}
