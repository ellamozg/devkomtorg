<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class draftController extends Controller
{
    //
    
    public function guest()
    {
        return view('draft');
    }
}
