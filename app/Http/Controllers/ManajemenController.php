<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    public function index()
    {
        return view('Admin\partials\layouts\manajemen');
    }
}
