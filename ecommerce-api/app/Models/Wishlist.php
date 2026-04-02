<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected array $fillable = [
        'user_id',
        'product_id',
    ];
}
