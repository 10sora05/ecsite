<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // バリデーション（例: 画像ファイルのみ受け付ける）
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // 画像を取得
        $image = $request->file('image');

        // 画像をストレージに保存（'public'ディスクを使用）
        $path = $image->store('images', 'public'); // 'images'フォルダ内に保存

        // 保存したパスをデータベースに保存したり、ビューに渡す
        return back()->with('success', '画像がアップロードされました。')->with('path', $path);
    }
}
