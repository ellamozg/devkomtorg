<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productItemsController extends Controller
{
    //
    
    public function guest()
    {
        return view('productItemsMenu');
    }
}
