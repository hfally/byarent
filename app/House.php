<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        return $this->belongsToMany(Order::class);
    }

    /**
     * Scope a query to only include available houses.
     *
     * @param $query
     * @return mixed
     */
    public function scopeAvailable($query)
    {
        return $query->whereRaw("houses.id not in (select house_id from house_order)");
    }

    public function getAvatarAttribute($value)
    {
        return Storage::disk('minio')->temporaryUrl($value, Carbon::now()->addDays(1));
    }

    public function getSizeAttribute()
    {
        return "{$this->breadth}ft/{$this->length}ft | {$this->no_of_room}br " . ucwords($this->category->name);
    }

    public function getPostedAtAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getNumberAttribute()
    {
        return 'BR/HO/' . Carbon::parse($this->creted_at)->format('Y') . '/' . $this->id;
    }
}