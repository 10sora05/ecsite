<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function mypage(Request $request)
  {
    $user = User::find(Auth::id());

    return view('mypage', compact('user'));
  }
  public function confirm(Request $request)
  {
    $contact = $request->only(['content', 'name', 'email', 'password']);
    return view('confirm', compact('contact'));
  }
  public function store(Request $request)
  {
    $Account = $request->only(['content', 'name', 'email', 'password']);
    User::create($Account);

    return view('upload');
    return redirect('/');
  }
  /*
    $name = $email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTメソッドで送信されたデータを取得
    $name = htmlspecialchars($_POST['name']); // HTMLエンティティをエスケープ
    $email = htmlspecialchars($_POST['email']);
  }
    */
}
