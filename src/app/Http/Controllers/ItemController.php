<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        return view('create');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'content', 'price', 'avatar']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $Item = $request->only(['content', 'name', 'price']);
        Item::create($Item);

        return view('upload');
    }
    public function mypage(Request $request)
    {
        return view('mypage');
    }
}
