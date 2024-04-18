<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderOptions extends Model
{
    protected $table = 'order_option';
    protected $primaryKey = 'ordernumber';
    protected $hidden = [];
    protected $guarded = [];

    public function option()
    {
        return $this->belongsTo(Options::class, 'option_id');
    }

    public function order()
    {
        return $this->belongsTo(Orders::class, 'ordernumber');
    }
}
