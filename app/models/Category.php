<?php

namespace app\models;

class Category extends Model
{
    protected $table = "categories";

    protected $fields = [
        'name',
        'created_at',
        'update_at'
    ];
}