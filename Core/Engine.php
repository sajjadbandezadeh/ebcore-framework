<?php

namespace ebcore\framework\Core;

use ebcore\framework\Module\DataCleaner;
use ebcore\framework\Packages\Logger\Logger;

class Engine
{
    private static $executedEvents = [];
    private static $globalMiddlewares = [];

    public function __construct()
    {
        // Load global middlewares from config
        $configMiddlewares = Config::get('middleware.global_middlewares', []);
        foreach ($configMiddlewares as $middleware) {
            $class = "\\ebcore\\Middlewares\\$middleware";
            if (class_exists($class)) {
                self::$globalMiddlewares[] = $class;
            }
        }
    }

    public function dispatch($handler, $params = [])
    {
        // Execute global middlewares first
        foreach (self::$globalMiddlewares as $middleware) {
            $middleware = new $middleware();
            $middleware->handle();
        }

        // Execute route-specific middlewares
        if (isset($handler['middleware']) && is_array($handler['middleware'])) {
            $modelClass = $handler["model"];
            foreach ($handler['middleware'] as $middlewareName) {
                $class = "\App\\entities\\$modelClass\\Middlewares\\{$middlewareName}";
                if (class_exists($class)) {
                    $middleware = new $class();
                    $middleware->handle();
                }
            }
        }

        return $this->callAction($handler, $params);
    }

    protected function callAction($handler, $params = [])
    {
        $modelClass = $handler["model"];
        $controllerClass = "\App\\entities\\$modelClass\\Controllers\\{$handler['controller']}";
        $actionClass = $handler["action"];

        if ($handler['model'] == "System" & $handler['controller'] == "SystemController") {
            switch ($handler["action"]) {
                case "welcome":
                    include(dirname(__FILE__) . '/../Resources/Welcome/index.php');
                    exit();
                    break;
                case "health":
                    echo "Health";
                    exit();
                    break;
            }
        }

        if (!class_exists($controllerClass)) {
            throw new \Exception("Controller `$handler[controller]` not found.");
        }

        if (!method_exists($controllerClass, $actionClass)) {
            throw new \Exception("Method `$actionClass` in Controller `$handler[controller]` not found.");
        }

        if (isset($handler['event'])) {
            $eventClass = "\App\\entities\\$modelClass\\Events\\{$handler['event']}";
            if (!class_exists($eventClass)) {
                throw new \Exception("Event `$handler[event]` not found.");
            }
        }

        if (isset($handler["eventTime"])) {
            $eventTime = $handler["eventTime"];
            if (!in_array($eventTime, ['before', 'after'])) {
                throw new \Exception("Event Timer is not valid! (before/after)");
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requestData = $_POST;
            $params = array_merge($params, $requestData);
        } else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $data_cleaner = new DataCleaner();
            $a_data = array();
            $requestData = $data_cleaner->parse_raw_http_request($a_data);
            $params = array_merge($params, $requestData);
        }

        $controllerInstance = new $controllerClass();

        if (isset($handler['event']) && isset($eventTime) && $eventTime === 'before') {
            $this->executeEvent($eventClass);
        }

        $result = call_user_func_array([$controllerInstance, $actionClass], $params);

        if (isset($handler['event']) && isset($eventTime) && $eventTime === 'after') {
            $this->executeEvent($eventClass);
        }

        return $result;
        exit();
    }

    private function executeEvent($eventClass)
    {
        $eventKey = $eventClass . '_' . microtime(true);

        if (isset(self::$executedEvents[$eventKey])) {
            return;
        }

        $eventInstance = new $eventClass();
        $eventInstance->execute();
        self::$executedEvents[$eventKey] = true;
    }
}