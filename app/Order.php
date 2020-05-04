<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['Locality', 'Street', 'House', 'Apartment', 'Person', 'Tel', 'Date', 'Time_ot', 'Time_do'];

    public $timestamps = false;
}
