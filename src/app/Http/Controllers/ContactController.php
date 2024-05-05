<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    //public function create()
    //{
    //    return view('auth.register');
    //}

}
