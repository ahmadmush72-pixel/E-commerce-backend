<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\CartItem;
use App\Models\WhishlistItem;
use App\Models\OrderItem;
class Product extends Model
{
    /**
 * @var string[]
 */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'image',
        'status',
    ];
    public function category(){
      return $this->belongsTo(Category::class);
    }
       public function brand(){
         return $this->belongsTo(Brand::class);
      }
      public function images(){
         return $this->hasMany(ProductImage::class);
      }
      public function variants(){
         return $this->hasMany(ProductVariant::class);
      }
      public function cartItems(){
         return $this->hasMany(CartItem::class);
      }
      public function wishlistItems(){
         return $this->hasMany(WhishlistItem::class);
      }
      public function orderItems(){
         return $this->hasMany(OrderItem::class);
      }

}