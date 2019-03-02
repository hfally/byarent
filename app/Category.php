<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
        'deleted_at',
        'id'
    ];

    public function houses()
    {
        return $this->hasMany(House::class);
    }
}
