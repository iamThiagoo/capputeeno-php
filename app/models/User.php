<?php

namespace app\models;

class User extends Model 
{
    protected $table = "users";

    protected $fields = [
        'name',
        'cpf',
        'email',
        'birthdate',
        'password',
        'wallet',
        'address',
        'city_id',
        'state_id'
    ];
}