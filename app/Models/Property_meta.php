<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_meta extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'visivility_options' => 'array',
    ];
    public function properties()
    {
        return $this->hasMany(Property::class, 'property_id', 'id');
    }

}
