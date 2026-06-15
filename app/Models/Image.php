<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path', 'property_id'];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
