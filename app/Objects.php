<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    protected $fillable = [
        'license_plate', 'chassis_number', 'obj_type', 'brand', 'type',
        'year', 'mass_inventory', 'mass_max', 'length_till', 'length_construction',
        'height', 'license_needed', 'price_day', 'price_week', 'image_link',
        'day_view_image_link', 'night_view_image_link'

    ];

    protected $primaryKey = "obj_id";

    public function orders()
    {
        return $this->hasMany(Orders::class, 'obj_id');
    }

    public function isAvailable(\DateTime $fromDate, \DateTime $tillDate, $ignored = null)
    {
        $array = [
            ['obj_date_in', '<=', $tillDate->format('Y-m-d')],
            ['obj_date_out', '>=', $fromDate->format('Y-m-d')]
        ];

        if(null !== $ignored) {
            $array[] = ['ordernumber', '!=', $ignored];
        }

        return null === $this->orders()->where($array)->first();
    }

    /**
     * @return array
     */
    public function getPriceArray()
    {
        if (null === ($promo = $this->promo()->where('active', 1)->first())) {
            return [
                'current_day' => $this->price_day,
                'current_week' => $this->price_week,
            ];
        }

        return [
            'previous_day' => $this->price_day,
            'previous_week' => $this->price_week,
            'current_day' => $this->price_day - $this->price_day / 100 * $promo->percentage,
            'current_week' => $this->price_week - $this->price_week / 100 * $promo->percentage
        ];
    }

    public function promo()
    {
        return $this->hasOne(Promos::class, 'object_id');
    }
}
