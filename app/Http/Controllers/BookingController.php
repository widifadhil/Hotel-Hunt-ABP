<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function findh() {
        return view('pages.findh', [
            "title" => "Find Hotel"
        ]);
    }
    public function hdetail() {
        return view('pages.hdetail', [
            "title" => "Detail Hotel"
        ]);
    }
    public function book() {
        return view('pages.book', [
            "title" => "Booking"
        ]);
    }   
}
