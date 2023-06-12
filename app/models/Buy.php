<?php

namespace app\models;

class Buy extends Model
{
    protected $table = "buys";

    protected $fields = [
        'product_id',
        'value',
        'address',
        'user_id',
        'status',
        'created_at',
        'update_at'
    ];
}