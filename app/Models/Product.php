<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function addNew()
    {
        # code...
    }

    public function getCostPriceAttribute($value)
    {
        return $value / 100;
    }

    public function getSellingPriceAttribute($value)
    {
        return $value / 100;
    }
}