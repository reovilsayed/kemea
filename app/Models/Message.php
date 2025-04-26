<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sender()  {
        return $this->belongsTo(User::class,'sender_id');
    }
    public function reciver()  {
        
        return $this->belongsTo(User::class,'reciver_id');
    }
    public function property()  {
        
        return $this->belongsTo(Property::class,'property_id');
    }
}
