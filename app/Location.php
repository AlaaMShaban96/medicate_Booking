<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',"street_id","city_id","country_id",
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
}
