<?php
header("Content-Type: application/json");

$default_response = [
    "data" => null,    
    "status" => ['code'=> 200, 'message'=> 'success'],
    "errors" =>  [
        "status"=> "false",
        "code"=> "000",
        "message"=> "No error"
    ],
    "meta" => ["api_version" => "1.0.0"],
    "links" => false,
];
echo json_encode(array_merge($default_response, ['data'=> [
    "message" => "Welcome to Task Manager API"
]]));