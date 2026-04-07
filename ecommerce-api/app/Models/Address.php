<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Address extends Model
{
    //
    protected $fillable = [
        'user_id',
        'street',
        'city',
        'state',
        'postal_code',
        'country',
    ];
    public function  user(){
        return $this->belongsTo(User::class);
    }
}
