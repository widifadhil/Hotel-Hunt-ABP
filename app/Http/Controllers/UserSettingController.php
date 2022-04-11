<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
