<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserSettingController extends Controller
{
    public function mybook() {
        return view('pages.mybook', [
            "title" => "My Book"
        ]);
    }
    public function myacc() {
        return view('pages.myacc', [
            "title" => "My Account"
        ]);
    }
    public function pclist() {
        return view('pages.pclist', [
            "title" => "Purchase List"
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
