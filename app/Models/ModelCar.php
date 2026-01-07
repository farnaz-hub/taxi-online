<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    protected $table = 'models';

    protected $guarded = ['created_at', 'updated_at'];

    public function make()
    {
        return $this->belongsTo(Make::class);
    }
}
