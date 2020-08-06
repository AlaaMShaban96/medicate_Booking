<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class HotelApartments extends Model
{
    protected $fillable = [
        'name', 'location_id',
    ];
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
