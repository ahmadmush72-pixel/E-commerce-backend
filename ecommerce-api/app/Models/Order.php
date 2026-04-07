<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;    

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
}
