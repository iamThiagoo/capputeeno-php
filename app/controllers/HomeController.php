<?php

namespace app\controllers;

class HomeController
{
    
    public array $data = [];
    public string $view;

    //
    public function index ()
    {
        $this->data = [
            'view' => 'home.php',
            'title' => 'Página Inicial - Capputeeno',
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