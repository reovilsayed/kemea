<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyMetaAttachment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPropertyPhotosAttribute($value)
    {
        return json_decode($value);
    }
}
