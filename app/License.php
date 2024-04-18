<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'license';

    protected $fillable = [
        'license_number', 'license_issued', 'license_valid_till'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'license_number', 'license_number');
    }

    public function licenseType()
    {
        return $this->hasMany('App\LicenseType', 'license_number', 'license_number');
    }
}
