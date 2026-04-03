<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

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
   public function carts(){
    return $this->belongsToMany(Cart::class)->withPivot('quantity')->withTimestamps(); 
}
}