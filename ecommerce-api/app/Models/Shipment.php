<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;
use App\Models\ShipmentItem;
use App\Models\ShippingMethod;

class Shipment extends Model
{
    //
    protected $fillable = [
         'order_id',
         'shipping_method_id',
         'tracking_number',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function shipmentItems()
    {
        return $this->hasMany(ShipmentItem::class);
    }
    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class);
    }
}
