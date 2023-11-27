<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        return view('Admin\partials\layouts\katalog');
    }

    public function add_katalog(Request $request){

    }
}
