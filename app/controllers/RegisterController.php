<?php

namespace app\controllers;

class RegisterController
{
    
    public array $data = [];
    public string $view;

    //
    public function index ()
    {
        $this->data = [
            'view' => 'register.php',
            'title' => 'Cadastro - Capputeeno',
        ];
    }

    //
    public function show ()
    {

    }

    //
    public function create ()
    {

    }

    //
    public function store ()
    {

    }

    //
    public function edit (int $id)
    {

    }

    //
    public function delete ()
    {

    }
}