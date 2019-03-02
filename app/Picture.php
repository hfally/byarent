<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $guarded = [
        'deleted_at',
        'id'
    ];

    public function house ()
    {
        return $this->belongsTo(House::class);
    }
}
