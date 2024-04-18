<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Options extends Model
{
    protected $table = 'option';
    protected $primaryKey = 'option_id';

    /**
     * @return HasMany
     */
    public function orderOptions()
    {
        return $this->hasMany(OrderOptions::class, 'option_id');
    }
}
