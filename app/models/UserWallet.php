<?php

namespace app\models;

class UserWallet extends Model
{
    protected $table = "users_wallets";

    protected $fields = [
        'user_id',
        'value',
        'type',
        'created_at'
    ];
}