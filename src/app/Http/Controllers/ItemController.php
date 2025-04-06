<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Storage;
//use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = item::all();

        return view('index', compact('items'));
    }
    public function create(Request $request)
    {
        return view('create');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['content', 'name', 'price', 'image']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $Item = $request->only(['content', 'name', 'price', 'image']);
        Item::create($Item);

        return view('upload');
        return redirect('/');
    }
    public function update(Request $request)
    {
        $user = $request->user();
        $image = $request->file('image');

        //画像が送信されてきていたら保存処理
        if ($image) {
            //保存されたパス
            $image_url = Item::disk('storage/image')->put('user_profile_image', $image, 'image'); //画像の保存処理
            $user->image_url = $image_url;
            $user->save();
        }
    }
}
