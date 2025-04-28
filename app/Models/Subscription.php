<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'payment_id',
        'start_date',
        'end_date',
        'status',
    ];


    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to Plan
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function charges()
    {
        return $this->morphMany(Charge::class, 'chargeable');
    }
}
