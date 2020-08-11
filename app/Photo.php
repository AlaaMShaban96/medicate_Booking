<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
       "hotel_Apartment_id","img_path",
    ];
    public function hotelApartment()
    {
        return $this->belongsTo(HotelApartment::class, 'hotel_Apartment_id');
    }
}
