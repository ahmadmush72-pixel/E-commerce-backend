<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;    

class Wishlist extends Model
{
    //
    protected array $fillable = [
        'user_id',
        'session_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
