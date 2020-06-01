<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminapplylistController extends Controller
{
    public function applylist()
    {
        $apply = DB::table('applybooks')->get();

        return view('admin.applylist', ['apply' => $apply]);
    }
}
