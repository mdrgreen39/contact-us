<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $admins = Contact::all();


        return view('admin', compact('admins'));
    }

    public function show()
    {
        return view('auth.login');
    }
}


