<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;    
use App\Models\Address;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use App\Models\OrderStatusHistory;
use App\Models\Payment;
use App\Models\Shipment;
class Order extends Model
{
    //
    protected array $fillable = [
        'user_id',
        'total_amount',
        'status',
        'shipping_address',
        'payment_method'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function addresses(){
        return $this->hasMany(OrderItem::class);
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
    public function orderStatus(){
        return $this->belongsTo(OrderStatus::class);
    }
    public function OrderStatusHistories(){
        return $this->hasMany(OrderStatus::class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }
    public function shipments(){
        return $this->hasMany(Shipment::class);
    }
}
