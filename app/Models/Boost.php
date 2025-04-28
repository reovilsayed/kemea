<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function boostPrice() {
        return $this->belongsTo(BoostPrice::class,'boost_price_id');
    }
    public function property() {
        return $this->belongsTo(Property::class,'property_id');
    }
    public function charges()
    {
        return $this->morphMany(Charge::class, 'chargeable');
    }
}
