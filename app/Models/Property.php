<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {
    protected $fillable = ['title','description','sqm','rooms','address','city','status','user_id'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
