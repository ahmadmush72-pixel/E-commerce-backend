<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;

class PaymentMethod extends Model
{
    //
    protected $fillable = [
       'payment_gateway',
    ];
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
