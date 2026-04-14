<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderStatus extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'sequence',
        'is_final',
        'color',
    ];
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
