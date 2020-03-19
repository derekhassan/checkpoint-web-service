<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    public $timestamps = true;
}


// $table->bigIncrements('transaction_id');
// $table->timestamps();
// $table->bigInteger('user_shared_id')->unsigned();
// $table->bigInteger('user_received_id')->unsigned();
// $table->integer('qr_id');