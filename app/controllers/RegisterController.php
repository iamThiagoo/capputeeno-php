<?php

namespace app\controllers;

use app\models\City;
use app\models\State;

class RegisterController
{
    
    public array $data = [];
    public string $view;

    //
    public function index ()
    {
        $states = new State;

        $this->data = [
            'view' => 'register.php',
            'title' => 'Cadastro - Capputeeno',
            'states' => $states->all()
        ];
    }


    //
    public function create ()
    {
        dd($_POST);
    }

    //
    public function store ()
    {

    }
}