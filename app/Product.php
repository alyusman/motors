<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'status',
        'stock_location',
        'stock_port',
        'title',
        'model',
        'veh_type',
        'trans',
        'drive',
        'dealer',
        'mileage',
        'chasis_no',
        'price',
        'fuel',
        'photo',
    ];
}
