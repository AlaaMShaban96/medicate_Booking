<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Street;
use App\Country;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{


    public function Cityall(Country $country)
    {
        return $country->cities;
    }
    public function Streetall(City $city)
    {
        
        return $city->streets;
    }
    public function get()
    {
       return Location::all();
    }
}
