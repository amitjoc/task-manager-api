<?php
namespace App\Helpers;
 
class Router 
{
    public function __construct($uri, $method)
    {
        
        // Basic routing logic based on URI and HTTP method
        $uri = explode('/', $uri); 
        
        if ( $uri[0] === 'user' && $method === 'GET') {
            // Example: GET /users
            $controller = new \App\Controllers\UserControllers();
            $controller->register();      
        } else {
            // Handle 404 Not Found
            http_response_code(404);
            echo json_encode(['error' => 'Endpoint not found']);
        }
    }
     
}