<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'details',"street_id","city_id","country_id","hotel_Apartments_id","user_id","state"
    ];
    public function street()
    {
        return $this->belongsTo(Street::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function hotelApartment()
    {
        return $this->belongsTo(HotelApartment::class,"hotel_Apartments_id");
    }
}
