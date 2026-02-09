# task-manager-api
Task Manger API written using only Core php and OOP concepts 






## Project Steps 

- composer init 
  - `require`
    - php verson ^8.3
  - `require-dev` 
    - phpunit 12
- composer dump-autoload
- composer install

## DONE

- [x] coposer added 
- [x] dependencies added 
  - [x] php version ^8.3
  - [x] phpunit 12 
- [x] basic/defualt response format added  

## Default or minimum Response Format 

```php
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
```


## TODO 

- [ ] add version control for api like /v1/  
- [ ] 