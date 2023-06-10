<?php

require_once '../bootstrap.php';

use app\controllers\Controller;

try 
{
    $controller = new Controller;

    $loadedController = $controller->load();
    $method = $controller->getMethod();

    $loadedController->$method();

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $viewPath = "../app/views/";

        extract($loadedController->data);
        require '../app/views/index.php';
    }

} catch (\Exception $e)
{
    dd($e->getMessage());
}