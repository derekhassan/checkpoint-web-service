<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function business() {
        return $this->belongsTo('App\Business', 'bus_id');
    }
}
