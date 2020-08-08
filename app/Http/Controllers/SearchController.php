<?php

namespace App\Http\Controllers;

use App\Country;
use App\Location;



use App\HotelApartment;
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
        $countries=Country::all();
        // dd(HotelApartment::all());
       $locations = Location::where("country_id",$request->country_id)
                    ->where("city_id",$request->city_id)
                    ->where("street_id",$request->street_id)
                    ->paginate(8);

                //   dd($locations);
        return view('hotels',compact('locations','countries'));
    }
    public function cpanel()
    {
        return view('cpanel/dashboard');
    }
    
}
