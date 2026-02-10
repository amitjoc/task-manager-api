# 📌 Overview

Task Manager API a lightweight, object-oriented PHP API for managing tasks, built with **Core PHP** and modern OOP principles. Designed for scalability, maintainability, and easy integration into larger systems.

![PHP Version](https://img.shields.io/badge/php-%5E8.3-blue)
![Build Status](https://img.shields.io/badge/build-passing-brightgreen)
![License](https://img.shields.io/badge/license-MIT-orange)

## 🚀Features

- ✅ Composer integration
- ✅ PHPUnit testing setup
- ✅ Default response format
- 🚧 API versioning (/v1/, /v2/)
- 🚧 Task CRUD endpoints
- 🚧 Authentication & role-based access


## ⚙️Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/task-manager-api.git
   ```
2. Install dependencies:
    ```bash
    composer install
    composer dump-autoload
    ```
3. Run tests:
   ```bash
   ./vendor/bin/phpunit
   ```
## 📡 Usage 

1. Default controller 
    ```bash
    curl -X GET http://task-manager-api.test/
    ```
2. Response 
    ```json
    {
    "data": [],
    "status": {"code":200,"message":"success"},
    "errors": {"status":"false","code":"000","message":"No error"},
    "meta": {"api_version":"1.0.0"},
    "_links": false
    }
    ```


## 🛠️ Architecture & Technical Notes  
- Core PHP + OOP (no frameworks → lightweight, educational).
- Default response format ensures consistency.
- PHPUnit ensures testability.

### 🔗 Dependency & commands 
 

## 📈 Roadmap 

- [ ] API versioning support
- [ ] Task CRUD operations
- [ ] Authentication & authorization
- [ ] Documentation with examples
- [ ] Docker support for easy deployment
- [ ] Default or minimum [Response Format](#-usage) 

### Router Feature    
- [x] Removed else error response from router 
- [x] Added default in case of home, index, '', '/'
- [x] upated default message 'links' to '_links'

## 🔜 TODO 

- [ ] add version control for api like /v1/  

## 🤝 Contributing
Contributions are welcome! Please fork the repository and submit a pull request.

## 📜 License
This project is licensed under the MIT License.
