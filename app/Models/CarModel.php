<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'car_models';

    public $timestamps = false;

    public function car_makes()
    {
        return $this->belongsTo(CarMake::class);
    }
}
