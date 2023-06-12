<?php

namespace app\models;

class State extends Model
{
    protected $table = "states";

    protected $fields = [
        'name',
        'uf'
    ];
}