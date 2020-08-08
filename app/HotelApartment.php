<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class HotelApartment extends Model
{
    protected $fillable = [
        'name',
    ];
//     public function location()
//     {
//         return $this->belongsTo(Location::class);
//     }
}
