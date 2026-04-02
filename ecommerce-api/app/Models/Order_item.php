<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    //
  protected array  $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];
}
