<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [
        'id'
    ];

    public function houses()
    {
        return $this->belongsToMany(House::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNumberAttribute()
    {
        return 'BR/OR/' . Carbon::parse($this->creted_at)->format('Y') . '/' . $this->id;
    }
}