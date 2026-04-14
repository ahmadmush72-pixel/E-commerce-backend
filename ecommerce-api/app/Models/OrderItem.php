<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShipmentItem;
class OrderItem extends Model
{
    //
  protected array  $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function shipmentItems(){
        return $this->hasMany(ShipmentItem::class);
    }
}
