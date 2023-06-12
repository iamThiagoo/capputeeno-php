<?php

namespace app\controllers;

class LoginController
{
    
    public array $data = [];
    public string $view;

    //
    public function index ()
    {
        $this->data = [
            'view' => 'login.php',
            'title' => 'Login - Capputeeno',
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