<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderStatusHistory extends Model
{
    //
    protected $fillable = [
        'order_id',
        'status',
        'changed_at',
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }

}
