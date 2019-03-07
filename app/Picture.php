<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function getPathAttribute ($value)
    {
        return Storage::disk('minio')->temporaryUrl($value, Carbon::now()->addDays(1));
    }
}
