<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property_meta()
    {
        return $this->hasOne(Property_meta::class);
    }

    // app/Models/Property.php

public function scopeFilter($query, $filters)
{
    if (!empty($filters['search'])) {
        $search = $filters['search'];
        $query->where(function ($q) use ($search) {
            $q->where('city', 'like', "%{$search}%")
              ->orWhere('street', 'like', "%{$search}%")
              ->orWhere('apt_number', 'like', "%{$search}%")
              ->orWhere('keywords', 'like', "%{$search}%");
        });
    }

    if (!empty($filters['property_type']) && is_array($filters['property_type'])) {
        $query->whereIn('property_type', $filters['property_type']);
    }

    return $query;
}

    

}
