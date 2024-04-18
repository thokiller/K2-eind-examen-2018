<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Orders extends Model
{
    Protected $table = "order";
    protected $primaryKey = "ordernumber";
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function object()
    {
        return $this->belongsTo(Objects::class, 'obj_id');
    }

    /**
     * @return BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    /**
     * @return HasMany
     */
    public function orderOptions()
    {
        return $this->hasMany(OrderOptions::class, 'ordernumber');
    }

    /**
     * @return Collection
     */
    public function options()
    {
        return $this->hasMany(OrderOptions::class, 'ordernumber')->get()->map(function($orderOption) {
            return $orderOption->option()->first();
        });
    }
}
