<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table='services';
    protected $fillable=['status','payment_time','checkin_time'];
}
