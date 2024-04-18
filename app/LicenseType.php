<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseType extends Model
{
    protected $table = 'license_type';

    protected $fillable = [
        'license_number', 'license_type'
    ];

    public function license()
    {
        return $this->belongsTo('App\License', 'license_number');
    }
}
