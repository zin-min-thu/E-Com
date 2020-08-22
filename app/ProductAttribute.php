<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $fillable = [
        'product_id',
        'size',
        'price',
        'stock',
        'sku',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
