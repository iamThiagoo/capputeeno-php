<?php

require_once 'vendor/autoload.php';
require_once 'app/helpers/helpers.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
