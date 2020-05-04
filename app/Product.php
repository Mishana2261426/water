<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['VendorCode', 'Name', 'Сapacity', 'Description', 'Price', 'Img'];
}
