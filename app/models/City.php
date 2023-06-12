<?php

namespace app\models;

class City extends Model
{
    protected $table = "cities";

    protected $fields = [
        'name',
        'state_id',
        'ibge'
    ];
}