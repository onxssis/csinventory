<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = ['name', 'code', 'location'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getNumberOfProducts()
    {
        return $this->products()->where('warehouse_id', '=', $this->id)->count();
    }
}
