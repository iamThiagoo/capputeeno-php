<?php

namespace app\models;

class Product extends Model
{
    protected $table = "products";

    protected $fields = [
        'name',
        'value',
        'detail',
        'stock',
        'status',
        'images',
        'category_id',
        'created_at',
        'update_at'
    ];
}