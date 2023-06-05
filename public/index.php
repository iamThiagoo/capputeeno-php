<?php

require_once '../bootstrap.php';

use app\controllers\Controller;

try 
{
    $controller = new Controller;

    $loadedController = $controller->load();
    $method = $controller->getMethod();

    $loadedController->$method();

} catch (\Exception $e)
{
    dd($e->getMessage());
}