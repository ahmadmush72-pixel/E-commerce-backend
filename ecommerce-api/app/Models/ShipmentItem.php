<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Shipment;
use App\Models\OrderItem;

class ShipmentItem extends Model
{
    //
    protected $fillable = [
        'shipment_id',
        'order_item_id',
        'quantity',
    ];
    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
    public function orderItem(){
        return $this->belongsTo(OrderItem::class);
    }
}
