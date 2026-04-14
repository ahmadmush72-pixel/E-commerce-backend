<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Transaction;

class Payment extends Model
{
    //
    protected $fillable = [
        'order_id',
        'payment_method_id',
        'amount',
        'status'
    ];
    public function order(){
        return $this->belongsTo(Order::class); 
            } 

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
