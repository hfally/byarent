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

    public function ()
    {
        
    }
}
