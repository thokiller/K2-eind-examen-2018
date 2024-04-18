<?php
namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * primary key of table
     *
     * @var string
     */
    protected $primaryKey = 'customer_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'license_number', 'customer_initial', 'customer_insertion', 'customer_lastname',
        'customer_address', 'customer_postal_code', 'customer_town', 'customer_phone',
        'customer_mobile', 'customer_email', 'customer_username', 'customer_password',
        'customer_status', 'email_confirmed', 'is_admin', 'qualified', 'test_moment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * shortcut method to get fullname of user
     * @return string
     */
    public function getFullName()
    {
        return sprintf('%s %s %s', $this->customer_initial, $this->customer_insertion, $this->customer_lastname);
    }

    /**
     * Tells laravel where to find the user password
     * 
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->customer_password;
    }

    /**
     * license relation
     * 
     * @return mixed
     */
    public function license()
    {
        return $this->hasOne('App\License', 'license_number', 'license_number' );
    }

    /**
     * Get orders
     *
     * @return HasMany
     */
    public function orders()
    {
        return $this->hasMany(Orders::class, 'customer_id');
    }

}
