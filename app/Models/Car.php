<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = ['created_at', 'updated_at'];


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }


    public function make()
    {
        return $this->belongsTo(Make::class);
    }


    public function model()
    {
        return $this->belongsTo(ModelCar::class);
    }
}
