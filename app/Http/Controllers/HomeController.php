<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\User;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = DB::table('users')->get();
        return view('admin.dashboard',['user' => $user]);
    }

    public function status(Request $request,$id)
    {
     $data = User::find($id);

     if ($data->status == 0){

         $data->status = 1;
     }else{
         $data->status = 0;
     }
    $data->save();
    return Redirect::to('dashboard')->with('message',$data->name.'status has been changes successfully.');
    }

 
     public function logout() 
    {
        Auth::logout();
        return redirect('/login');
    }
}   