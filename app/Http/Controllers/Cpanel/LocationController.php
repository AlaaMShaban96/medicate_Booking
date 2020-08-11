<?php

namespace App\Http\Controllers\Cpanel;

use App\User;
use App\Photo;
use App\Country;
use App\Location;
use App\HotelApartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('cpanel.users.locations.index',compact('user') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $countries=Country::all();
        return view('cpanel.users.locations.edit',compact('countries','location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'street_id' => 'required',
            'details' => 'required',
            'price' => 'required',
         
        ]);

            $location->hotelApartment->name = $request->name;
         
            if (!empty( $request->except('image_upload') )) {
       
                foreach ($request->image_upload as $key => $value) {
                 
                    
                    Photo::create([
                        'hotel_Apartment_id' => $location->hotelApartment->id,
                        'img_path'=>$this->uploadeImage( $request,$key ,"images")
                    ]);
                 
                }
            
            }

            if (!empty( $request->image)) {
           
                $location->hotelApartment->img_path = $this->uploadeImage( $request,0,"image");
             
            }
          
            $location->hotelApartment->update();

            $location->country_id = $request->country_id;
            $location->city_id = $request->city_id;
            $location->street_id = $request->street_id;
            $location->details = $request->details;
            $location->price = $request->price;

            $location->update();
        
            Session::flash('update', 'تم التعديل  بنجاح');
            return redirect("/cpanel/user/". $location->user->id ."/location");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function uploadeImage(Request $request, $key,$type)
    {
        $imageName = time().$key.".png";
         $path="";
        switch ($type) {

            case 'image':
                
                    return "storage/". $request->file('image')->storeAs('uploads', $imageName, 'public');
                
                break;
            
            case 'images':

                    return "storage/". $request->image_upload[$key]->storeAs('uploads', $imageName, 'public');
                
                break;
            
            default:

                return $path;

                break;
        }
    
    }
}
