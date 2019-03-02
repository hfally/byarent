<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $guarded = [
        'deleted_at',
        'id'
    ];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order()
    {
        return $this->hasOneThrough(Order::class, HouseOrder::class);
    }

    /**
     * Scope a query to only include available houses.
     *
     * @param $query
     * @return mixed
     */
    public function scopeAvailable($query)
    {
        return $query->whereNotIn('id', function () {
            Order::select('house_id');
        });
    }
}