<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\cartItems;
class ProductVariant extends Model
{
    //
    protected $fillable = [
        'product_id',
        'size',
        'color',
        'price',
        'stock',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'product_variant_id');
    }
    public function wishlistItems()
    {
        return $this->hasMany(WhishlistItem::class, 'product_variant_id');
    }
}
