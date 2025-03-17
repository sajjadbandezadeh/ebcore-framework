# Encore Framework

<div align="center">
  <img src="https://raw.githubusercontent.com/sajjadbandezadeh/encore-framework/main/logo.png" alt="Encore Framework Logo" width="200">
  
  [![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-purple.svg)](https://php.net)
  [![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

[//]: # (  [![Build Status]&#40;https://github.com/encore/encore/workflows/tests/badge.svg&#41;]&#40;https://github.com/encore/encore/actions&#41;)

[//]: # (  [![Code Coverage]&#40;https://codecov.io/gh/encore/encore/branch/main/graph/badge.svg&#41;]&#40;https://codecov.io/gh/encore/encore&#41;)

[//]: # (  [![StyleCI]&#40;https://github.styleci.io/repos/encore/encore/badge.svg&#41;]&#40;https://github.styleci.io/repos/encore/encore&#41;)
</div>

Encore is a modern and powerful PHP framework inspired by Entity-Based architecture. It helps you build complex web applications with ease and elegance.

## Key Features

- 🏗️ Entity-Based Architecture
- 🛣️ Modern Routing System
- 🔒 Powerful Middleware System
- ⚡ Advanced Caching
- 🎯 Event System
- 📝 Logging System
- 🔐 Security Features
- ⚙️ Flexible Configuration

## Installation

Create a new project with Encore:

```bash
composer create-project sajjadbandezadeh/encore-skeleton my-project
cd my-project
```

## Project Structure

```
my-project/
├── app/
│   └── entities/
│       └── User/
│           ├── Controllers/
│           │   └── UserController.php
│           ├── Events/
│           │   └── UserRegisterEvent.php
│           └── Middlewares/
│               └── CheckUserPermissionMiddleware.php
├── config/
│   ├── app.json
│   ├── database.json
│   └── middleware.json
├── public/
│   ├── .htaccess
│   └── index.php
├── routes/
│   └── web.php
└── vendor/
    └── encore/
        ├── Core/
        ├── Middlewares/
        └── Packages/
```

## Usage Examples

### 1. Defining Routes

```php
// routes/web.php
use encore\Core\Router;

$router->map('GET', '/', 'User','UserController', 'index');
$router->map('GET', '/users', 'User','UserController', 'index', 'UserRegisterEvent', 'after');

$router->run();

```

### 2. Creating Controllers

```php
// app/entities/User/Controllers/UserController.php
namespace App\entities\User\Controllers;

use encore\Core\Controller;
use encore\DB\DbContext;
use encore\Module\Response;
use encore\Packages\Dump\Dump;

class UserController 
{
    public function index() 
    {
        $users = DbContext::User()->all();
        // Dump::dd($users);
        if (empty($users)) {
            return Response::json(null, "No users found", 404, false);
        }
        return Response::json($users);
    }
}
```

### 3. Creating Middleware

```php
// app/entities/User/Middlewares/CheckUserPermissionMiddleware.php
namespace app\entities\User\Middlewares;

use encore\Core\Middleware;

class CheckUserPermissionMiddleware extends BaseMiddleware
{
    public function handle($request, $next)
    {
        if (!$this->checkPermission()) {
            Logger::warning("Permission denied for user", [
                'permission' => $this->requiredPermission,
                'user_id' => $_SESSION['user_id'] ?? null
            ]);

            return $this->jsonResponse([
                'error' => 'Permission Denied',
                'message' => 'You do not have the required permission.'
            ], 403);
        }
        
        return $next($request);
    }
}
```

### 4. Creating Events

```php
// app/entities/User/Events/UserRegisterEvent.php
namespace App\entities\User\Events;

use encore\Core\Events;
use encore\DB\DbContext;
use encore\Module\Response;

class UserRegisterEvent extends Events
{
    public function execute()
    {
        if ($this->isExecuted('UserRegisterEvent')) {
            return;
        }

        try {
            $user = array();
            $user["name"] = "test";
            $user["family"] = "test";
            $user["created_at"] = date("Y/m/d h:i:sa");
            DbContext::User()->create($user);
            $this->markAsExecuted('UserRegisterEvent');
        } catch (\Exception $e) {
            $this->resetExecution('UserRegisterEvent');
            throw $e;
        }
    }
}
```

### 5. Using Cache System

```php
use encore\Core\Cache;

// Store in cache
Cache::put('key', 'value', 3600);

// Retrieve from cache
$value = Cache::get('key');

// Remove from cache
Cache::forget('key');
```

## Configuration

### Application Settings

```json
// config/app.json
{
    "name": "Encore Framework",
    "version": "1.0.0",
    "debug": true,
    "timezone": "Asia/Tehran",
    "locale": "fa",
    "url": "http://localhost"
}
```

### Middleware Settings

```json
// config/middleware.json
{
    "throttle": {
        "max_requests": 60,
        "decay_minutes": 1,
        "enabled": true
    },
    "global_middlewares": [
        "ThrottleMiddleware"
    ]
} 
```

## Security Features

- Throttle System 
- Duplicate Request control system
- Rate limiting
- Input validation
- Output sanitization


## Contributing

Please read our [Contributing Guide](CONTRIBUTING.md) before submitting a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

- [Documentation](https://encore.ir/docs)
- [GitHub](https://github.com/sajjadbandezadeh/encore-framework)
- [Twitter](https://twitter.com/encorefw)

## Acknowledgments

Thank you to all contributors and developers who have helped build this framework. 