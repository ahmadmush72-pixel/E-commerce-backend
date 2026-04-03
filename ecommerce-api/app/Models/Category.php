<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
class Category extends Model
{
    //
    /**
 * @var string[]
 */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_active',
    ];
    
    public function products(){
        return $this->hasMany(Product::class);
    }
}
