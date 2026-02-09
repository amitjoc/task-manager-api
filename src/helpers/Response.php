<?php
namespace App\Helpers;
class Response
{
    public static function json($data, $statusCode = 200)
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public static function error($message, $statusCode = 400)
    {
        self::json(['error' => $message], $statusCode);
    }

}

/**
 * TODO: implement default error handling and response formatting for the API.
 */