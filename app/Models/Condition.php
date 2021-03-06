<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $table = 'conditions';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
