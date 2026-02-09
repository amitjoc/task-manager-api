<?php

namespace App\Controllers;
use App\Helpers\Response;

class UserControllers
{
    private $data = null;
    
    public function __construct()
    {
        // Initialize any dependencies or services here
        $this->data = ['controller' => 'UserControllers', 'message' => 'Controller initialized successfully'];
    }

    public function register()
    {
        // Handle user registration logic here
        $this->data = array_merge($this->data, ['action' => 'register']);
         
        Response::json($this->data);
    }

    public function login()
    {
        // Handle user login logic here
    }
}