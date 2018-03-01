<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
