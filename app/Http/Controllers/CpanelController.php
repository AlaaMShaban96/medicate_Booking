<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CpanelController extends Controller
{
    public function cities()
    {
        $cities = City::all();
        return view('cpanel.cities.index', compact('cities'));
    }
}
