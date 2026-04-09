<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Wishlist;
use App\Models\Product;

class WhishlistItem extends Model
{
    //
    protected array $fillable  = [ 'user_id', 'product_id', 'wishlist_id'];
    
    public function whishlist(){
        return $this->belongsTo(Wishlist::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);    
    }
    public function productVariant(){
        return $this->belongsTo(ProductVariant::class);
    }
}
