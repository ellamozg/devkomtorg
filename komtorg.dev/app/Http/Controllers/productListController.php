<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productListController extends Controller
{
    //
    
    public function guest()
    {
        return view('productList');
    }
}

