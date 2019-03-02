<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [
        'id'
    ];

    public function houses()
    {
        return $this->hasManyThrough(House::class, HouseOrder::class);
    }
}