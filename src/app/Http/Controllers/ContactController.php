<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact:: with('category')->get();
        $categories = Category::all();

        return view('index', compact('contacts', 'categories',));

    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'category_id', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'content']);

        //修正ボタンリダイレクト
        if (!empty($request['back']))
        {
            return redirect()->route('index')->withInput();
        }

        return view('confirm', compact('contact'));
    }

    //confirmにcategoryの内容を表示
    public function showConfirm($id)
    {
        $contact = Contact::findOrFail($id);
        $category = $contact->category;

        return view('confirm', ['contact' => $contact, 'category' => $category]);

    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'category_id', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'content']);
        Contact::create($contact);

        return redirect('/thanks');
    }

    public function show()
    {
        return view('thanks');
    }









}
