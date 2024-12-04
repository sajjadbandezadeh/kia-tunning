<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    public function car()
    {
        return $this->belongsTo(Car::class, 'cars_id');
    }
}
