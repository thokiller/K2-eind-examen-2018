<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promos extends Model
{
    protected $fillable = [
        'percentage', 
        'object_id',
        'active'
    ];

    public function object()
    {
        return $this->belongsTo(Objects::class, 'obj_id');
    }
}

