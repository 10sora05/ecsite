<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class accountController extends Controller
{
    public function mypage(Request $request)
    {
        return view('/');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['content', 'name', 'email', 'password']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $Item = $request->only(['content', 'name', 'email', 'password']);
        Account::create($Item);

        return view('upload');
        return redirect('/');
    }
    $name = $email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTメソッドで送信されたデータを取得
    $name = htmlspecialchars($_POST['name']); // HTMLエンティティをエスケープ
    $email = htmlspecialchars($_POST['email']);
  }
}
