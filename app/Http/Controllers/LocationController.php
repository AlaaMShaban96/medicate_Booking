<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Country;
use App\Location;
use App\HotelApartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;




class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::where("user_id",auth()->user()->id)->get();
       
        return view('users.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::all();
        return view('users.add',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
 
            'image' => 'required',
            'name' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'street_id' => 'required',
            'details' => 'required',
            'price' => 'required',
         
        ]);
        
        HotelApartment::create([
            'name'=>$request->name,
            'img_path'=>$this->uploadeImage( $request,0,"image")
        ]);

        $hotelApartment=HotelApartment::orderBy('id','desc')->first();

        if ($request->has('image_upload')) {
            
            foreach ($request->image_upload as $key => $value) {

                Photo::create([
                    'hotel_Apartment_id' => $hotelApartment->id,
                    'img_path'=>$this->uploadeImage( $request,$key ,"images")
                ]);
            }
        }
        Location::create([
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'street_id' => $request->street_id,
            'details' => $request->details,
            'price' => $request->price,
            'user_id' => auth()->user()->id,
            'hotel_Apartments_id' => $hotelApartment->id,
        ]);
        
        Session::flash('message', 'تم التعديل بنجاج ');
        return redirect()->back();
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('users.edit',compact('countries','location'));
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
         
            if (empty( $request->except('image_upload') )) {
         
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
        
            Session::flash('update', 'تم إرسال طلبك بنجاح');
            return redirect('/location/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        
        unlink($location->hotelApartment->img_path);

        $location->hotelApartment->delete();


        $location->delete();

        return redirect()->back();
    }
    public function destroyPhoto(Photo $photo)
    {
        unlink($photo->img_path);
        $photo->delete();
      
        return redirect()->back();
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
