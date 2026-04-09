<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;    
use App\Models\WhishlistItem;
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
    public function whishlistItems(){
        return $this->hasMany(WhishlistItem::class);
    }
}
