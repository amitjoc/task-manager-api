<?php 

require __DIR__ . '/../vendor/autoload.php';
  
use App\Helpers\Router;

$router = new Router(trim($_SERVER['REQUEST_URI'], '/'), $_SERVER['REQUEST_METHOD']); 

 
