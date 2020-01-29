<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'qrCode';
    protected $primaryKey = 'qrid';
    //public $incrementing = true;
    public $timestamps = false;
}
