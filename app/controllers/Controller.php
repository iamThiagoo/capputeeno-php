<?php

namespace app\controllers;

use app\classes\Uri;
use app\exceptions\ControllerNotExistException;
use app\exceptions\MethodNotExistException;

class Controller 
{

    private $uri;
    private $namespace;
    private $controller;


    //
    public function __construct () 
    {
        $this->uri = Uri::getUri();
    }


    //
    public function isHome ()
    {
        return $this->uri == '/';
    }


    //
    public function load ()
    {
        return $this->isHome() == true ? $this->homeController() : $this->controllerNotHome();
    }


    //
    private function homeController ()
    {
        if (!$this->controllerExist('HomeController'))
            throw new ControllerNotExistException ('This controller not exist');

        return $this->instanceController();
    }


    // 
    private function controllerNotHome ()
    {
        $controller = $this->getControllerNotHome();

        if (!$this->controllerExist($controller))
            throw new ControllerNotExistException ('This controller not exist!');

        return $this->instanceController();
    }

    // 
    private function getControllerNotHome ()
    {
        if (substr_count($this->uri, '/') > 1) {
            list($controller) = array_values(array_filter(explode('/', $this->uri)));
            return ucfirst($controller) . "Controller";
        }

        return ucfirst(ltrim($this->uri, '/')) . "Controller";
    }


    //
    private function controllerExist ($controller)
    {
        $controllerExist = false;

        if (class_exists( "app\controllers". "\\" .$controller))
        {
            $controllerExist = true;

            $this->namespace  = "app\controllers";
            $this->controller = $controller; 
        }

        return $controllerExist;
    }


    //
    private function instanceController ()
    {
        $controller = $this->namespace . "\\" . $this->controller;
        return new $controller;
    }


    //
    public function getMethod ()
    {
        if (substr_count($this->uri, '/') > 1)
        {
            $uri = array_values(array_filter(explode('/', $this->uri)));
            $method = $uri[1] ??= 'index';
        }

        $method ??= 'index';
        $this->methodExist($method);

        return $method;
    }
    
    //
    public function methodExist ($method)
    {
        if (!method_exists($this->namespace . "\\" . $this->controller, $method)) 
        {
            throw new MethodNotExistException('This method not exist!');
        }
    
        return true;
    }
}
