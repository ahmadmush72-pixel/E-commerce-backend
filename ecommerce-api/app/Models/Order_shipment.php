<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_shipment extends Model
{
    //
    protected array $fillable = [
        'order_id',
        'tracking_number',
        'courier_name',
        'shipped_at',
        'delivered_at',
    ];
}
