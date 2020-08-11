<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class HotelApartment extends Model
{
    protected $fillable = [
        'name',"img_path",
    ];
    // public function location()
    // {
    //     return $this->belongsTo(Location::class);
    // }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
