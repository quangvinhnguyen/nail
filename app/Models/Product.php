<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
        'stautus',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'target');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function comboProduct()
    {
        # code...
    }
}
