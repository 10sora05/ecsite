<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

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
        $image = $request->file('image'); //アップロードしたファイルの取得

        //画像が送信されてきていたら保存処理
        if ($image) {
            //保存されたパス
            $image_url = Storage::disk('public')->put('user_profile_image', $image, 'public'); //画像の保存処理
            $user->image_url = $image_url;
            $user->save();

            // バリデーション（例: 画像ファイルのみ受け付ける）
            $request->validate([
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
        }
    }
}

/*
//画像が送信されてきていたら保存処理
if ($image) {
    //保存されたパス
    $image_url = Storage::disk('public')->put('user_profile_image', $image, 'public'); //画像の保存処理
    $user->image_url = $image_url;
    $user->save();

    // バリデーション（例: 画像ファイルのみ受け付ける）
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);
*/

        /*

        // 画像を取得
        $image = $request->file('image');

        // 画像をストレージに保存（'public'ディスクを使用）
        $path = $image->store('images', 'public'); // 'images'フォルダ内に保存

        // 保存したパスをデータベースに保存したり、ビューに渡す
        return back()->with('success', '画像がアップロードされました。')->with('path', $path);
    }

        public function show($id)
    {    public function store(Request $request)
    {
        // バリデーション（例: 画像ファイルのみ受け付ける）
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        // IDで投稿を取得
        $post = Post::find($id);

        // ビューにデータを渡す
        return view('/', ['post' => $post]);
    }

        */
