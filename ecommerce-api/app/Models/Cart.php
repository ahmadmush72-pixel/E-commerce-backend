<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;   

class Cart extends Model
{
    //
    /**
 * @var string[]
 */
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];    
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity')->withTimestamps();
    }
}
