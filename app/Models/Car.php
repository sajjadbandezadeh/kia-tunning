<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class, 'cars_id');
    }
}
