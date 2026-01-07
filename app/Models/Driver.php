<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    function province()
    {
        return $this->belongsTo(Province::class);
    }

    function city()
    {
        return $this->belongsTo(City::class);
    }


    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
