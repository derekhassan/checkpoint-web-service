<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function coupons() {
        return $this->hasMany('App\Coupon', 'bus_id');
    }

}
