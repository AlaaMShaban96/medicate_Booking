<?php

namespace App\Http\Controllers;

use App\HotelApartments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function hotel(Request $request)
    {
        return view('cpanel/dashboard');
    }
    public function hotelApartments(Request $request)
    {
        dd(HotelApartments::all()->first()->location->name);
        // return view('hotels');
    }
    public function cpanel()
    {
        dd("here");
        return view('cpanel/dashboard');
    }
}
