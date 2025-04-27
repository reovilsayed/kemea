<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedSearch extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $casts = [
        'date_of_entry' => 'datetime',
    ];

    
    public function scopeFilter($query)
    {
        return $query->when('property_for',function ($q) {
            $q->where('search_type','like','%'.request()->property_for.'%');
        });
    }
}
